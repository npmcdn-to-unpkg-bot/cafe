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
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item1.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe mở cửa 24h</h4>
                                <div class="item-amount italic">14 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item4.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe giường nằm</h4>
                                <div class="item-amount italic">10 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item5.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe sân vườn</h4>
                                <div class="item-amount italic">21 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item6.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Vintage cafe</h4>
                                <div class="item-amount italic">14 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item7.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe Acoustic</h4>
                                <div class="item-amount italic">10 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item8.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe Sách</h4>
                                <div class="item-amount italic">21 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item9.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe biệt thự sân vườn</h4>
                                <div class="item-amount italic">12 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item10.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe chụp hình cưới</h4>
                                <div class="item-amount italic">19 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item11.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe bói bài Tarot</h4>
                                <div class="item-amount italic">12 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item4.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe biệt thự sân vườn</h4>
                                <div class="item-amount italic">12 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item5.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe chụp hình cưới</h4>
                                <div class="item-amount italic">19 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="./gallery_detail.html" class="item">
                            <div class="img-container">
                                <img alt="" src="../img/items/item6.jpg">
                            </div>
                            <div class="info">
                                <h4 class="item-name bold">Cafe bói bài Tarot</h4>
                                <div class="item-amount italic">12 Địa điểm</div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <a href="#" class="btn btn-main">XEM THÊM...</a>
        </section>
    </div>
@endsection

@section('script')
@endsection
