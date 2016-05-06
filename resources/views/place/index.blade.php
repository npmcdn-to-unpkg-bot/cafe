@extends('layouts.app')

@section('title')
    | Places
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section align-center blogs blogs-wrapper" id="blogs">
            <h2 class="s-title bold upper-text">TẤT CẢ ĐỊA ĐIỂM</h2>
            <p class="s-intro">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
            </p>
            <div class="container">
                <div class="grid align-left">
                    @foreach($places as $place)
                        <div class="card">
                            <div class="img-container">
                                <a href="{{ route('places.show', $place->id) }}"><img alt="" src="{{ $place->cover->url() }}"></a>
                            </div>
                            <div class="info">
                                <div class="name bold"><a href="{{ route('places.show', $place->id) }}">{{ $place->name }}</a></div>
                                <div class="address">{{ $place->address }}</div>
                                <div class="description">
                                    {{ $place->description }}
                                </div>
                            </div>
                            <ul class="card-bottom">
                                <li>
                                    <a href="{{ route('profile.show', $place->user->id) }}" class="author">
                                        <img alt="" src="{{ $place->user->avatar->url() }}">
                                        <span class="bold">{{ $place->user->name }}</span>
                                    </a>
                                </li>
                                <li><i class="fa fa-heart fa-mg-right"></i>{{ $place->likeCount }}</li>
                                <li><i class="fa fa-comments fa-mg-right"></i>{{ $place->comments->count() }}</li>
                            </ul>
                        </div>
                    @endforeach
                </div>
                <div class="paginate">
                    {!! $places->links() !!}
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