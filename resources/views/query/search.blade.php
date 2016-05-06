@extends('layouts.app')

@section('title')
    | Search
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section" style="background: #fff; padding-top: 100px;">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    @if(!empty($error))
                        <h2 class="s-title bold">Message: </h2>
                        <p style="margin-top: 20px;">{{ $error }}</p>
                        <style>
                            .footer{
                                position: fixed;
                                width: 100%;
                                bottom: 0;
                                left: 0;
                            }
                        </style>
                    @endif

                    @if(!empty($result))
                        <h2 class="s-title bold">Kết quả tìm kiếm từ khóa: <span>{{ $q }}</span></h2>
                        <div class="search-results">
                            @foreach($result as $p)
                                <div class="media">
                                    <div class="media-left">
                                        <a href="{{ route('places.show', $p->id) }}">
                                            <img class="media-object" src="{{ $p->cover->url('thumb') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="{{ route('places.show', $p->id) }}">
                                            <h4 class="media-heading bold">{{ $p->name }}</h4>
                                        </a>
                                        <p>{{ $p->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                                @foreach($result as $p)
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="{{ route('places.show', $p->id) }}">
                                                <img class="media-object" src="{{ $p->cover->url('thumb') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="{{ route('places.show', $p->id) }}">
                                                <h4 class="media-heading bold">{{ $p->name }}</h4>
                                            </a>
                                            <p>{{ $p->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                        <div class="paginate align-center">
                            {!! $result->links() !!}
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
@endsection