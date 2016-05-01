@extends('layouts.app')

@section('title')
    | Blog
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section align-center blogs blogs-wrapper">
            <h2 class="s-title bold upper-text">Blogs</h2>
            <p class="s-intro">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
            </p>
            <div class="container">
                <div class="grid align-left">
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
                                    <a href="{{ route('profile.show', $post->user->id) }}" class="author">
                                        <img alt="" src="../img/blogs/author1.jpg">
                                        <span>{{ $post->user->name }}</span>
                                    </a>
                                </li>
                                <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                <li><i class="fa fa-comments fa-mg-right"></i>{{ $post->comments->count() }}</li>
                            </ul>
                        </div>
                    @endforeach
                </div>
                <div class="paginate">
                    {!! $posts->links() !!}
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
    <script>
        $('.grid').masonry({
            itemSelector: '.card',
            isFitWidth: true
        });
    </script>
@endsection