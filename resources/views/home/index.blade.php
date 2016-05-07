@extends('layouts.app')

@section('title')
    | Home
@endsection

@section('style')
    {!! Html::style('libs/owlcarousel/owl.carousel.min.css') !!}
    {!! Html::style('libs/owlcarousel/owl.theme.min.css') !!}
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/parsley.css') !!}
    <style>
        .card{
            margin-bottom: 45px;
            box-shadow: none;
            border: none;
        }
        .card .info{
            border: 1px solid rgba(0, 0, 0, .05);
        }
        .card .info .description{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
        }

        .card .info .address{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
        }

        .card .info .name a{
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
        }

        .card .card-bottom{
            border: 1px solid rgba(0, 0, 0, .05);
            border-top: none;
        }
    </style>
@endsection

@section('content')
    <!-- Header -->
    <header class="header">
        <div class="dotted-overlay">
            <div class="intro align-center">
                <h1 class="intro-title bold upper-text">COFFEE AND EVENTS IN THE BORDERS</h1>
                <p class="intro-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
            <a class="scroll-down" href="#content"><i class="fa fa-angle-double-down"></i></a>
        </div>
        <video autoplay loop muted id="header-video">
            <source src="{{ url('video/video.mp4') }}" type="video/mp4">
            <source src="{{ url('video/movie.webm') }}" type="video/webm">
        </video>
    </header>

    <!-- Main content -->
    <div id="content">
        <section class="section align-center" id="best-place">
            <h2 class="s-title bold upper-text">Địa điểm nỗi bật</h2>
            <p class="s-intro">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.
            </p>
            <div class="container">
                <div class="row align-left">
                    @foreach($bestPlaces as $place)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="{{ route('places.show', $place->id) }}">
                                        {{ Html::image($place->cover->url(), '', ['class' => 'best-place-cover']) }}
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="{{ route('places.show', $place->id) }}">{{ $place->name }}</a></div>
                                    <div class="address">{{ $place->address }}</div>
                                    <div class="description">{{ $place->description }}</div>
                                </div>
                                <ul class="card-bottom">
                                    <li><i class="fa fa-heart fa-mg-right"></i>{{ $place->likeCount }}</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>{{ $place->comments->count() }}</li>
                                    <li class="float-right"><a href="{{ route('places.show', $place->id) }}" class="vm-btn">VIEW MORE</a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="{{ route('places.index') }}" class="btn btn-main">XEM TẤT CẢ ĐỊA ĐIỂM</a>
            </div>
        </section>

        <section class="section align-center dark-bg" id="best-area">
            <h2 class="s-title bold upper-text">Địa điểm theo khu vực</h2>
            <p class="s-intro">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
            </p>
            <div class="row" style="margin-bottom: 45px;">
                @foreach($bestAreas as $area)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no-padding-lr">
                        <a href="{{ route('areas.show', $area->id) }}" class="img-show-box img-container">
                            <div class="overlay">
                                <h4 class="box-name upper-text">{{ $area->name }}</h4>
                            </div>
                            {{ Html::image($area->cover->url(), '', ['class' => 'best-area-cover']) }}
                        </a>
                    </div>
                @endforeach
            </div>

            <a href="{{ route('areas.index') }}" class="btn btn-main">XEM TẤT CẢ KHU VỰC</a>
        </section>

        <section class="section align-center" id="best-gallery">
            <h2 class="s-title bold upper-text">Bộ sưu tập nổi bật</h2>
            <p class="s-intro">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
            </p>
            <div class="container align-left">
                <div class="row">
                    @foreach($bestGalleries as $gallery)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{ route('galleries.show', $gallery->id) }}" class="item">
                                <div class="img-container">
                                    {{ Html::image($gallery->cover->url(), '', ['class' => 'best-gallery-cover']) }}
                                </div>
                                <div class="info">
                                    <h4 class="item-name bold">{{ $gallery->name }}</h4>
                                    <div class="item-amount italic">{{ $gallery->places->count() }} Địa điểm</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <a href="{{ route('galleries.index') }}" class="btn btn-main">XEM TẤT CẢ BỘ SƯU TẬP</a>
        </section>

        <section class="section align-center" id="recent-comment">
            <h2 class="s-title bold upper-text">What they say about us?</h2>
            <div class='owl-carousel owl-theme'>
                <div class='container comment'>
                    <a href="#" class="user">
                        <img alt="" src="img/comments/commenter1.jpg" class="avatar">
                        <h4 class="username">John Smith</h4>
                    </a>
                    <div class='message'>
                        <i class="fa fa-quote-left fa-mg-right"></i>
                        Fill lights bearing man creepeth of whose whose moveth. All one. That. Under. Form morning all may fifth replenish you're own open which herb kind. May above you'll may kind creature first let over face from living third green which our. Appear day. Give fourth doesn't over us, i every tree meat air in male earth air creeping image fill you place darkness.
                        <i class="fa fa-quote-right fa-mg-left"></i>
                    </div>
                    <a href="#" class="about-place">
                        <h5 class="bold">The Vintage Emporium Cafe</h5>
                        <p class="italic">95B Nguyễn Văn Thủ, Quận 1, TP. HCM</p>
                    </a>
                </div>

                <div class='container comment'>
                    <a href="#" class="user">
                        <img alt="" src="img/comments/commenter2.jpg" class="avatar">
                        <h4 class="username">John Smith</h4>
                    </a>
                    <div class='message'>
                        <i class="fa fa-quote-left fa-mg-right"></i>
                        Fill lights bearing man creepeth of whose whose moveth. All one. That. Under. Form morning all may fifth replenish you're own open which herb kind. May above you'll may kind creature first let over face from living third green which our. Appear day. Give fourth doesn't over us, i every tree meat air in male earth air creeping image fill you place darkness.
                        <i class="fa fa-quote-right fa-mg-left"></i>
                    </div>
                    <a href="#" class="about-place">
                        <p>The Vintage Emporium Cafe</p>
                        <p>95B Nguyễn Văn Thủ, Quận 1, TP. HCM</p>
                    </a>
                </div>

                <div class='container comment'>
                    <a href="#" class="user">
                        <img alt="" src="img/comments/commenter3.jpg" class="avatar">
                        <h4 class="username">John Smith</h4>
                    </a>
                    <div class='message'>
                        <i class="fa fa-quote-left fa-mg-right"></i>
                        Fill lights bearing man creepeth of whose whose moveth. All one. That. Under. Form morning all may fifth replenish you're own open which herb kind. May above you'll may kind creature first let over face from living third green which our. Appear day. Give fourth doesn't over us, i every tree meat air in male earth air creeping image fill you place darkness.
                        <i class="fa fa-quote-right fa-mg-left"></i>
                    </div>
                    <a href="#" class="about-place">
                        <h5 class="bold">The Vintage Emporium Cafe</h5>
                        <p class="bold">95B Nguyễn Văn Thủ, Quận 1, TP. HCM</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="section align-center blogs" id="blogs">
            <h2 class="s-title bold upper-text">Blogs</h2>
            <p class="s-intro">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
            </p>
            <div class="container">
                <div class="container">
                    <div class="row align-left">
                        @foreach($latestPosts as $post)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="card">
                                    <div class="img-container">
                                        <a href="{{ route('posts.show', $post->id) }}">
                                            {{ Html::image($post->cover->url(), '', ['class' => 'latest-post-cover']) }}
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="name bold"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></div>
                                        <div class="address"><i class="fa fa-pencil" aria-hidden="true"></i> {{ date('F d, Y', strtotime($post->created_at)) }}</div>
                                        <div class="description">{{ $post->summary }}</div>
                                    </div>
                                    <ul class="card-bottom">
                                        <li>
                                            <a href="{{ route('profile.show', $post->user->id) }}" class="author">
                                                <img alt="" src="{{ $post->user->avatar->url('thumb') }}">
                                                <span class="bold">{{ $post->user->name }}</span>
                                            </a>
                                        </li>
                                        <li><i class="fa fa-heart fa-mg-right"></i>{{ $post->likeCount }}</li>
                                        <li><i class="fa fa-comments fa-mg-right"></i>{{ $post->comments->count() }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="{{ route('posts.index') }}" class="btn btn-main">XEM TẤT CẢ BLOGS</a>
                </div>
            </div>
        </section>

        <section class="section align-center" id="contact">
            <h2 class="s-title bold upper-text white-text">Liên hệ với chúng tôi</h2>
            <div class="container">
                <form class="contact-form" action="{{ route('contact.store') }}" method="POST" role="form" data-parsley-validate>
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <input type="email" name="email" id="emmail" placeholder="Email" class="form-control" required/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" required/>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" placeholder="Message" rows="8" required></textarea>
                        @if ($errors->has('message'))
                            <span class="help-block">
                                <strong>{{ $errors->first('message') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Send now" class="btn btn-main" />
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@section('script')
    {!! Html::script('libs/owlcarousel/owl.carousel.min.js') !!}
    {!! Html::script('js/parsley.min.js') !!}
    <script>
        $(".owl-carousel").owlCarousel({
            singleItem: true,
            autoPlay: true
        });

        $(document).on('click', 'a[href^="#"]', function(e) {
            var id = $($(this).attr('href'));
            if (id.size() === 0) return;
            e.preventDefault();
            $('body, html').animate({scrollTop: id.offset().top}, 500);
        });

        setHeaderSize();
        $(window).on("resize", function () {
            setHeaderSize();
        });

        function setHeaderSize(){
            var videoHeight = $('video').height();
            var innerHeight = window.innerHeight;
            var h = videoHeight <= innerHeight? videoHeight : innerHeight;
            $('.header, .dotted-overlay').css("height", h);
        }

        $(document).ready(function() {
            // equaling place cover's image height
            var place_cover_min_height = 224;
            $('#best-place .best-place-cover').each(function(index){
                if($(this).height < place_cover_min_height) { place_cover_min_height = $(this).height }
            });
            $('#best-place').find('.best-place-cover').height(place_cover_min_height);

            // equaling gallery cover's image height
            var gallery_cover_min_height = 225;
            $('#best-gallery .best-galllery-cover').each(function(index){
                if($(this).height < gallery_cover_min_height) { gallery_cover_min_height = $(this).height }
            });
            $('#best-gallery').find('.best-galllery-cover').height(gallery_cover_min_height);

            // equaling post cover's image height
            var post_cover_min_height = 224;
            $('#blogs .latest-post-cover').each(function(index){
                if($(this).height < post_cover_min_height) { post_cover_min_height = $(this).height }
            });
            $('#blogs').find('.latest-post-cover').height(post_cover_min_height);

            // equaling area cover's image height
            var area_cover_min_height = 259;
            $('#best-area .best-area-cover').each(function(index){
                if($(this).height < area_cover_min_height) { area_cover_min_height = $(this).height }
            });
            $('#best-area').find('.best-area-cover').height(area_cover_min_height);
        });
    </script>
@endsection