@extends('layouts.app')

@section('title')
    | Galleries
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/gallery.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section align-center gallery-wrapper" id="best-gallery">
            <h2 class="s-title bold upper-text">Bộ sưu tập</h2>
            <p class="s-intro">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
            </p>
            <div class="container align-left">
                <div class="row">
                    @foreach($galleries as $gallery)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <a href="{{ route('galleries.show', $gallery->id) }}" class="item">
                                <div class="img-container">
                                    <img alt="" src="{{ $gallery->cover->url('medium') }}" class="galllery-cover">
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
            <div class="paginate">
                {!! $galleries->links() !!}
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        var gallery_cover_min_height = 225;
        $('.galllery-cover').each(function(index){
            if($(this).height < gallery_cover_min_height) { gallery_cover_min_height = $(this).height }
        });
        $(document).find('.galllery-cover').height(gallery_cover_min_height);
    </script>
@endsection
