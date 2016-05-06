@extends('layouts.app')

@section('title')
    | Area
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/gallery.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section align-center blogs gallery-wrapper">
            <h2 class="s-title bold upper-text">KHU VỰC {{ $area->name }}</h2>
            @if(count($places) > 0)
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
            @else
                <div class="no-places" style="padding: 135px 0;">
                    <p class="s-intro">Không có địa điểm nào trong khu vực này...</p>
                    <img src="{{url('img/dinosaur.gif')}}" alt="" class="dinosaur-troll">
                </div>
            @endif
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
