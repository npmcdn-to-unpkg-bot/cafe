@extends('layouts.app')

@section('style')
    {!! Html::style('css/owlcarousel/owl.carousel.min.css') !!}
    {!! Html::style('css/owlcarousel/owl.theme.min.css') !!}
    {!! Html::style('css/index.css') !!}
@endsection

@section('content')
    <!-- Header -->
    <header class="header">
        <div class="dotted-overlay">
            <div class="intro align-center">
                <h1 class="intro-title bold upper-text">RESTAURANT AND EVENTS IN THE BORDERS</h1>
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
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="img-container">
                                <a href="{{ url('/places/1') }}">
                                    {{ Html::image('img/places/dd1.jpg', '') }}
                                </a>
                            </div>
                            <div class="info">
                                <div class="name bold"><a href="{{ url('/places/1') }}">MOF Japanese Dessert Cafe</a></div>
                                <div class="address">30 Lê Lợi, P. Bến Nghé, Quận 1, TP. HCM</div>
                                <div class="description">
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                </div>
                            </div>
                            <ul class="card-bottom">
                                <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                <li class="float-right"><a href="{{ url('/places/1') }}" class="vm-btn">VIEW MORE</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="img-container">
                                <a href="{{ url('/places/1') }}">
                                    {{ Html::image('img/places/dd2.jpg', '') }}
                                </a>
                            </div>
                            <div class="info">
                                <div class="name bold"><a href="{{ url('/places/1') }}">MOF Japanese Dessert Cafe</a></div>
                                <div class="address">30 Lê Lợi, P. Bến Nghé, Quận 1, TP. HCM</div>
                                <div class="description">
                                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.
                                </div>
                            </div>
                            <ul class="card-bottom">
                                <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                <li class="float-right"><a href="{{ url('/places/1') }}" class="vm-btn">VIEW MORE</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="img-container">
                                <a href="{{ url('/places/1') }}">
                                    {{ Html::image('img/places/dd3.jpg', '') }}
                                </a>
                            </div>
                            <div class="info">
                                <div class="name bold"><a href="{{ url('/places/1') }}">MOF Japanese Dessert Cafe</a></div>
                                <div class="address">30 Lê Lợi, P. Bến Nghé, Quận 1, TP. HCM</div>
                                <div class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                </div>
                            </div>
                            <ul class="card-bottom">
                                <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                <li class="float-right"><a href="{{ url('/places/1') }}" class="vm-btn">VIEW MORE</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="img-container">
                                <a href="{{ url('/places/1') }}">
                                    {{ Html::image('img/places/dd1.jpg', '') }}
                                </a>
                            </div>
                            <div class="info">
                                <div class="name bold"><a href="{{ url('/places/1') }}">MOF Japanese Dessert Cafe</a></div>
                                <div class="address">30 Lê Lợi, P. Bến Nghé, Quận 1, TP. HCM</div>
                                <div class="description">
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                </div>
                            </div>
                            <ul class="card-bottom">
                                <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                <li class="float-right"><a href="{{ url('/places/1') }}" class="vm-btn">VIEW MORE</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="img-container">
                                <a href="{{ url('/places/1') }}">
                                    {{ Html::image('img/places/dd2.jpg', '') }}
                                </a>
                            </div>
                            <div class="info">
                                <div class="name bold"><a href="{{ url('/places/1') }}">MOF Japanese Dessert Cafe</a></div>
                                <div class="address">30 Lê Lợi, P. Bến Nghé, Quận 1, TP. HCM</div>
                                <div class="description">
                                    Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.
                                </div>
                            </div>
                            <ul class="card-bottom">
                                <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                <li class="float-right"><a href="{{ url('/places/1') }}" class="vm-btn">VIEW MORE</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="img-container">
                                <a href="{{ url('/places/1') }}">
                                    {{ Html::image('img/places/dd3.jpg', '') }}
                                </a>
                            </div>
                            <div class="info">
                                <div class="name bold"><a href="{{ url('/places/1') }}">MOF Japanese Dessert Cafe</a></div>
                                <div class="address">30 Lê Lợi, P. Bến Nghé, Quận 1, TP. HCM</div>
                                <div class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                </div>
                            </div>
                            <ul class="card-bottom">
                                <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                <li class="float-right"><a href="{{ url('/places/1') }}" class="vm-btn">VIEW MORE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="{{ url('/places') }}" class="btn btn-main">XEM TẤT CẢ ĐỊA ĐIỂM</a>
            </div>
        </section>

        <section class="section align-center dark-bg" id="best-area">
            <h2 class="s-title bold upper-text">Địa điểm theo khu vực</h2>
            <p class="s-intro">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
            </p>
            <div class="row" style="margin-bottom: 45px;">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no-padding-lr">
                    <a href="{{ url('/places') }}" class="img-show-box img-container">
                        <div class="overlay">
                            <h4 class="box-name upper-text">Quận 1</h4>
                        </div>
                        {{ Html::image('img/cities/city1.jpg', '') }}
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no-padding-lr">
                    <a href="{{ url('/places') }}" class="img-show-box img-container">
                        <div class="overlay">
                            <h4 class="box-name upper-text">Quận 2</h4>
                        </div>
                        {{ Html::image('img/cities/city2.jpg', '') }}
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no-padding-lr">
                    <a href="{{ url('/places') }}" class="img-show-box img-container">
                        <div class="overlay">
                            <h4 class="box-name upper-text">Quận 3</h4>
                        </div>
                        {{ Html::image('img/cities/city3.jpg', '') }}
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no-padding-lr">
                    <a href="{{ url('/places') }}" class="img-show-box img-container">
                        <div class="overlay">
                            <h4 class="box-name upper-text">Quận 4</h4>
                        </div>
                        {{ Html::image('img/cities/city4.jpg', '') }}
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no-padding-lr">
                    <a href="{{ url('/places') }}" class="img-show-box img-container">
                        <div class="overlay">
                            <h4 class="box-name upper-text">Quận 5</h4>
                        </div>
                        {{ Html::image('img/cities/city5.jpg', '') }}
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no-padding-lr">
                    <a href="{{ url('/places') }}" class="img-show-box img-container">
                        <div class="overlay">
                            <h4 class="box-name upper-text">Quận 6</h4>
                        </div>
                        {{ Html::image('img/cities/city6.jpg', '') }}
                    </a>
                </div>
            </div>

            <a href="{{ url('/places') }}" class="btn btn-main">XEM TẤT CẢ KHU VỰC</a>
        </section>

        <section class="section align-center" id="best-gallery">
            <h2 class="s-title bold upper-text">Bộ sưu tập nổi bật</h2>
            <p class="s-intro">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
            </p>
            <div class="container align-left">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="{{ url('galleries/1') }}" class="item">
                            <div class="img-container">
                                <img alt="" src="img/items/item1.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe mở cửa 24h</h4>
                                <div class="item-amount italic">14 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="{{ url('galleries/1') }}" class="item">
                            <div class="img-container">
                                <img alt="" src="img/items/item4.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe giường nằm</h4>
                                <div class="item-amount italic">10 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="{{ url('galleries/1') }}" class="item">
                            <div class="img-container">
                                <img alt="" src="img/items/item5.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe sân vườn</h4>
                                <div class="item-amount italic">21 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="{{ url('galleries/1') }}" class="item">
                            <div class="img-container">
                                <img alt="" src="img/items/item6.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Vintage cafe</h4>
                                <div class="item-amount italic">14 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="{{ url('galleries/1') }}" class="item">
                            <div class="img-container">
                                <img alt="" src="img/items/item7.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe Acoustic</h4>
                                <div class="item-amount italic">10 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="{{ url('galleries/1') }}" class="item">
                            <div class="img-container">
                                <img alt="" src="img/items/item8.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe Sách</h4>
                                <div class="item-amount italic">21 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <a href="./gallery/gallery.html" class="btn btn-main">XEM TẤT CẢ BỘ SƯU TẬP</a>
        </section>

        <section class="section align-center" id="recent-comment">
            <h2 class="s-title bold upper-text">Bình luận gần đây</h2>
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
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blogs/blog-detail.html"><img alt="" src="img/places/dd1.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blogs/blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="img/blogs/author1.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blogs/blog-detail.html"><img alt="" src="img/places/dd2.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blogs/blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="img/blogs/author2.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blogs/blog-detail.html"><img alt="" src="img/places/dd3.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blogs/blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="img/blogs/author3.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blogs/blog-detail.html"><img alt="" src="img/places/dd1.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blogs/blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="img/blogs/author3.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blogs/blog-detail.html"><img alt="" src="img/places/dd2.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blogs/blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="img/blogs/author2.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blogs/blog-detail.html"><img alt="" src="img/places/dd3.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blogs/blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="img/blogs/author1.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="blogs/blogs.html" class="btn btn-main">XEM TẤT CẢ BLOGS</a>
                </div>
            </div>
        </section>

        <section class="section align-center" id="contact">
            <h2 class="s-title bold upper-text white-text">Liên hệ với chúng tôi</h2>
            <div class="container">
                <form class="contact-form">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Title" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message" rows="8"></textarea>
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
    {!! Html::script('js/owl.carousel.min.js') !!}
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

        $('#header-video').get(0).play();
    </script>
@endsection