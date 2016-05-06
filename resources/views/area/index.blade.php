@extends('layouts.app')

@section('title')
    | Areas
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/gallery.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section align-center gallery-wrapper" style="background: #fff; padding-bottom: 2px;">
            <h2 class="s-title bold upper-text">TẤT CẢ KHU VỰC</h2>
            <p class="s-intro">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
            </p>
            <div class="row">
                @foreach($areas as $area)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 no-padding-lr">
                        <a href="{{ route('areas.show', $area->id) }}" class="img-show-box img-container">
                            <div class="overlay">
                                <h4 class="box-name upper-text">{{ $area->name }}</h4>
                            </div>
                            {{ Html::image($area->cover->url(), '', ['class' => 'area-cover']) }}
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        var area_cover_min_height = 259;
        $('.area-cover').each(function(index){
            if($(this).height < area_cover_min_height) { area_cover_min_height = $(this).height }
        });
        $(document).find('.area-cover').height(area_cover_min_height);
    </script>
@endsection
