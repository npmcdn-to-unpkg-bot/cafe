@extends('layouts.app')

@section('title')
    | {{ $user->name }}
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
    {!! Html::style('css/profile.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section blogs"  style="background: #f8f8f8; padding-top: 72px;">
            {{-- Profile info --}}
            <div class="profile">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 align-center">
                        <img class="avatar img-circle" src="{{ $user->avatar->url('medium') }}" alt="">
                        <h3 class="username">{{ $user->name }}</h3>
                        <p class="email">{{ $user->email }}</p>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 all-stats ">
                        <div class="text-center stats">
                            <strong class="number">{{ $user->posts->count() }}</strong><br><span>posts</span>
                        </div>
                        <div class="text-center stats">
                            <strong class="number">643</strong><br><span>followers</span>
                        </div>
                    </div>
                </div>
                <ul class="social-links align-center">
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
            {{-- Posts --}}
            @if(count($posts) > 0)
                <div class="user-posts">
                    <h2 class="align-center" style="font-family: 'Poiret One', cursive;">All posts</h2>
                    <hr>
                    <div class="grid">
                        @foreach($posts as $post)
                            <div class="card">
                                <div class="img-container">
                                    <a href="{{ route('posts.show', $post->id) }}"><img alt="" src=" {{ $post->cover->url() }}"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></div>
                                    <div class="description">
                                        {{ $post->summary }}
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="{{ $post->user->avatar->url('thumb') }}">
                                            <span>{{ $post->user->name }}</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>{{ $post->comments->count() }}</li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="no-post">
                    <h2>There are no posts available.</h2>
                    <img src="{{url('img/dinosaur.gif')}}" alt="" class="dinosaur-troll">
                </div>
            @endif
            {{-- Paginate --}}
            @if(count($posts) > 0)
                <div class="paginate align-center">
                    {!! $posts->links() !!}
                </div>
            @endif
        </section>
    </div>
@endsection

@section('script')
    <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
    <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
    <script>
        $('.grid').imagesLoaded(function () {
            $('.grid').masonry({
                itemSelector: '.card',
                isFitWidth: true
            });
        });
    </script>
@endsection