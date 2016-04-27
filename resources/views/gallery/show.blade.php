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
            <div class="container">
                <div class="row">

                    <!-- gallery detail 1 -->
                    <div class="col-lg-6 col-md-6 col-sm-6 sol-xs-12 ldc-item">
                        <div class="item-header">
                            <div class="rating align-center">7.4</div>
                            <div class="title">
                                <h5><a href="#" class="bold">Hawaii kìa</a></h5>
                                <span>401 Sư Vạn Hạnh, Quận 10, TP. HCM</span>
                            </div>
                        </div>
                        <div class="image">
                            <a href="../place/place_detail.html"><img alt="" src="../img/gallery/gallery01.jpg"></a>
                        </div>
                        <div class="comment">
                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter10.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">Yoona</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter11.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">Park So-yeon</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter12.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">Hyomin</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery detail 2 -->
                    <div class="col-lg-6 col-md-6 col-sm-6 sol-xs-12 ldc-item">
                        <div class="item-header">
                            <div class="rating align-center">8.4</div>
                            <div class="title">
                                <h5><a href="#" class="bold">Huyền Thoại - Legend Cafe</a></h5>
                                <span>39 Nhất Chi Mai, P. 13, Quận Tân Bình, TP. HCM</span>
                            </div>
                        </div>
                        <div class="image">
                            <a href="../place/place_detail.html"><img alt="" src="../img/gallery/san_vuon01.jpg"></a>
                        </div>
                        <div class="comment">
                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter4.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">John Smith</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter5.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">Mờ Naive</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter6.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">Maria Huyền Nhi</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery detail 3 -->
                    <div class="col-lg-6 col-md-6 col-sm-6 sol-xs-12 ldc-item">
                        <div class="item-header">
                            <div class="rating align-center">8.0</div>
                            <div class="title">
                                <h5><a href="#" class="bold">Cafe Mây</a></h5>
                                <span>120/4A Trần Quôc Thảo, Quận 3, TP. HCM</span>
                            </div>
                        </div>
                        <div class="image">
                            <a href="../place/place_detail.html"><img alt="" src="../img/gallery/gallery02.jpg"></a>
                        </div>
                        <div class="comment">
                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter7.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">Anja Mahler</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter8.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">Phương Anh</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter9.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">Hani(Ahn Hee-yeon)</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- gallery detail 4 -->
                    <div class="col-lg-6 col-md-6 col-sm-6 sol-xs-12 ldc-item">
                        <div class="item-header">
                            <div class="rating align-center">8.4</div>
                            <div class="title">
                                <h5><a href="#" class="bold">Q Cafe & Studio</a></h5>
                                <span>99B Võ Thị Sáu, Phường.6, Quận 3, TP. HCM</span>
                            </div>
                        </div>
                        <div class="image">
                            <a href="../place/place_detail.html"><img alt="" src="../img/gallery/gallery03.jpg"></a>
                        </div>
                        <div class="comment">
                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter13.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">Lâm Á Hân</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter14.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">Nam Gyu Ri</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper">
                                <div class="avatar">
                                    <a href="#"><img alt="" src="../img/comments/commenter3.jpg"></a>
                                </div>
                                <div class="cmt-wrapper">
                                    <div class="name">
                                        <h5 class="bold"><a href="#">Helena</a></h5>
                                    </div>
                                    <div class="cmt-content">
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="load-more align-center">
                        <a href="#" class="btn btn-main" style="margin-top: 35px;">XEM THÊM</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
@endsection
