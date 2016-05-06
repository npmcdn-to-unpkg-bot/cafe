@extends('layouts.app')

@section('title')
    | Gallery
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/gallery.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section gallery-wrapper" id="best-gallery">
            <h2 class="s-title bold upper-text align-center" style="margin-bottom: 25px;">BỘ SƯU TẬP {{ $gallery->name }}</h2>
            @if(count($places) > 0)
                <div class="container">
                    <div class="row">
                        @foreach($places as $place)
                            <div class="col-lg-6 col-md-6 col-sm-6 sol-xs-12 ldc-item">
                                <div class="item-header">
                                    <div class="rating align-center">{{ number_format(($place->space_point + $place->service_point + $place->quality_point + $place->address_point + $place->price_point)/5, 1, '.', ',') }}</div>
                                    <div class="title">
                                        <h5><a href="{{ route('places.show', $place->id) }}" class="bold">{{ $place->name }}</a></h5>
                                        <span>{{ $place->address }}</span>
                                    </div>
                                </div>
                                <div class="image">
                                    <a href="{{ route('places.show', $place->id) }}"><img alt="" src="{{ $place->cover->url() }}" class="place-cover"></a>
                                </div>
                                <div class="pg-bottom">
                                    <ul class="left">
                                        <li><i class="fa fa-heart fa-mg-right"></i>{{ $place->likeCount }}</li>
                                        <li><i class="fa fa-comments fa-mg-right"></i>{{ $place->comments->count() }}</li>
                                    </ul>
                                    <ul class="right">
                                        <li><i class="fa fa-clock-o fa-mg-right"></i>{{ $place->open_time }} - {{ $place->close_time }}</li>
                                        <li><i class="fa fa-mobile fa-mg-right"></i>{{ $place->phone_number }}</li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                        <div class="paginate">
                            {!! $places->links() !!}
                        </div>
                    </div>
                </div>
            @else
                <div class="no-places align-center" style="padding: 122.5px 0;">
                    <p class="s-intro">Không có địa điểm nào trong bộ sưu tập này...</p>
                    <img src="{{url('img/dinosaur.gif')}}" alt="" class="dinosaur-troll">
                </div>
            @endif
        </section>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var min_height = 312;
            $('.gallery-wrapper .place-cover').each(function(index){
                if($(this).height < min_height) { min_height = $(this).height }
            });

            $('.gallery-wrapper .place-cover').each(function(index){
                $(this).height(min_height);
            });
        });
    </script>
@endsection
