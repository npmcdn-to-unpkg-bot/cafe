@extends('layouts.app')

@section('style')
    {!! Html::style('libs/fancybox/source/jquery.fancybox.css') !!}
    {!! Html::style('libs/fancybox/source/helpers/jquery.fancybox-buttons.css') !!}
    {!! Html::style('libs/fancybox/source/helpers/jquery.fancybox-thumbs.css') !!}
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
    {!! Html::style('css/place.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section blogs-wrapper" id="places">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 place-details" id="left-panel">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-4" id="place-thumb">
                                <a href="../place/place_detail.html">
                                    <div class="place-details-thumbnail"></div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8 place-details-text" id="place-full-info">
                                <div class="place-details-title">
                                    <span><i class="fa fa-check-circle"></i>S'morin Coffee - Cao Thắng</span>
                                </div>
                                <div class="place-details-des">
                                    Café/Kem - Việt Nam - Sinh viên, Cặp đôi, Nhóm hội, Giới văn phòng
                                </div>
                                <div class="place-details-rating">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score">8.4</div>
                                            <div class="rating-content">Không gian</div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score">7.9</div>
                                            <div class="rating-content">Phục vụ</div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score">7.8</div>
                                            <div class="rating-content">Chất lượng</div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score">7.5</div>
                                            <div class="rating-content">Vị trí</div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score">6.9</div>
                                            <div class="rating-content">Giá cả</div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score" id="rating-comment">53</div>
                                            <div class="rating-content">Bình luận</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-details-address">
                                    <span><i class="fa fa-location-arrow"></i> 2D Nguyễn Thành Ý, P. Đa Kao, Quận 1, TPHCM</span>
                                </div>
                                <div class="place-details-address">
                                    <span><i class="fa fa-phone"></i> +84-1675444899</span>
                                </div>
                                <div class="place-details-time">
                                    <span class="place-details-time-status"><i class="fa fa-clock-o"></i> Đang mở cửa</span>
                                    <span>07:00 AM - 11:00 PM</span>
                                </div>
                                <div class="place-details-price">
                                    <span><i class="fa fa-tag"></i> 30.000đ - 55.000đ</span>
                                </div>
                                <div class="review-gallery">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-4">
                                            <a class="fancybox" rel="lightbox" href="../img/places/detail/dt1.jpg">
                                                <div class="review-gallery-item">
                                                    <img alt="" src="../img/places/detail/dt1.jpg">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-4">
                                            <a class="fancybox" rel="lightbox" href="../img/places/detail/dt2.jpg">
                                                <div class="review-gallery-item">
                                                    <img alt="" src="../img/places/detail/dt2.jpg">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-4">
                                            <a class="fancybox" rel="lightbox" href="../img/places/detail/dt3.jpg">
                                                <div class="review-gallery-item">
                                                    <img alt="" src="../img/places/detail/dt3.jpg">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-4">
                                            <a class="fancybox" rel="lightbox" href="../img/places/detail/dt4.jpg">
                                                <div class="review-gallery-item">
                                                    <img alt="" src="../img/places/detail/dt4.jpg">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-4">
                                            <a class="fancybox" rel="lightbox" href="../img/places/detail/dt5.jpg">
                                                <div class="review-gallery-item">
                                                    <img alt="" src="../img/places/detail/dt5.jpg">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-4">
                                            <a class="fancybox" rel="lightbox" href="../img/places/detail/dt6.jpg">
                                                <div class="review-gallery-item">
                                                    <img alt="" src="../img/places/detail/dt6.jpg">
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="infomation-map">
                            <h2 class="place-detail-title">Thông tin & Bản đồ</h2>
                            <div id="map"></div>
                            <ul class="list-unstyled place-info">
                                <li><i class="fa fa-plus-circle"></i> Quán thiết kế cổ điển xen lẫn những nét hiện đại, nổi bật với gam màu nâu</li>
                                <li><i class="fa fa-plus-circle"></i> Menu đa dạng với nhiều loại thức uống pha chế thơm ngon hấp dẫn</li>
                                <li><i class="fa fa-plus-circle"></i> Có chương trình acoustic với âm thanh chất lượng</li>
                                <li><i class="fa fa-plus-circle"></i> Cafe pha chế hương vị thơm ngon, hấp dẫn</li>
                            </ul>
                        </div>
                        <div class="screenshots-gallery">
                            <h2 class="place-detail-title">
                                Hình ảnh từ cộng đồng
                            </h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="../img/places/detail/dtfc1.jpg" class="fancybox" rel="lightbox">
                                        <div class="screenshots-gallery-item">
                                            <img alt="" src="../img/places/detail/dtfc1.jpg">
                                        </div>
                                    </a>
                                    <p class="status">Lorem Ipsum is simply dummy text</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="../img/places/detail/dtfc2.jpg" class="fancybox" rel="lightbox">
                                        <div class="screenshots-gallery-item">
                                            <img alt="" src="../img/places/detail/dtfc2.jpg">
                                        </div>
                                    </a>
                                    <p class="status">Lorem Ipsum is simply dummy text</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="../img/places/detail/dtfc3.jpg" class="fancybox" rel="lightbox">
                                        <div class="screenshots-gallery-item">
                                            <img alt="" src="../img/places/detail/dtfc3.jpg">
                                        </div>
                                    </a>
                                    <p class="status">Lorem Ipsum is simply dummy text</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="../img/places/detail/dtfc4.jpg" class="fancybox" rel="lightbox">
                                        <div class="screenshots-gallery-item">
                                            <img alt="" src="../img/places/detail/dtfc4.jpg">
                                        </div>
                                    </a>
                                    <p class="status">Lorem Ipsum is simply dummy text</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="../img/places/detail/dtfc5.jpg" class="fancybox" rel="lightbox">
                                        <div class="screenshots-gallery-item">
                                            <img alt="" src="../img/places/detail/dtfc5.jpg">
                                        </div>
                                    </a>
                                    <p class="status">Lorem Ipsum is simply dummy text</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <a href="../img/places/detail/dtfc6.jpg" class="fancybox" rel="lightbox">
                                        <div class="screenshots-gallery-item">
                                            <img alt="" src="../img/places/detail/dtfc6.jpg">
                                        </div>
                                    </a>
                                    <p class="status">Lorem Ipsum is simply dummy text</p>
                                </div>
                            </div>
                        </div>

                        <div class="social" style="text-align: left; margin-top: 20px; margin-bottom: 20px;">
                            <h2 class="place-detail-title">
                                Bình luận từ khách hàng
                            </h2>
                            <ul class="like-comment" style="padding: 0;">
                                <li class="liked"><i class="fa fa-heart fa-mg-right"></i>30</li>
                                <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                            </ul>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <input type="text" id="comment" placeholder="Viết Bình Luận...">
                            <div class="comment">
                                <div class="wrapper">
                                    <div class="avatar-comment">
                                        <a href="#"><img alt="" src="../img/comments/commenter10.jpg"></a>
                                    </div>
                                    <div class="cmt-wrapper">
                                        <div class="name">
                                            <h5 class="bold" style="text-align: left;"><a href="#">Yoona</a></h5>
                                        </div>
                                        <div class="cmt-content" style="text-align: left;">
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="avatar-comment">
                                        <a href="#"><img alt="" src="../img/comments/commenter11.jpg"></a>
                                    </div>
                                    <div class="cmt-wrapper">
                                        <div class="name">
                                            <h5 class="bold" style="text-align: left;"><a href="#">Park So-yeon</a></h5>
                                        </div>
                                        <div class="cmt-content" style="text-align: left;">
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="wrapper">
                                    <div class="avatar-comment">
                                        <a href="#"><img alt="" src="../img/comments/commenter12.jpg"></a>
                                    </div>
                                    <div class="cmt-wrapper">
                                        <div class="name">
                                            <h5 class="bold" style="text-align: left;"><a href="#">Hyomin</a></h5>
                                        </div>
                                        <div class="cmt-content" style="text-align: left;">
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" id="right-panel">
                        <div class="comments">
                            <div class="comments-title">
                                <span>Bình luận <span class="comments-point">+4.00</span> Điểm</span>
                            </div>
                            <div class="comments-item">
                                <a href="#">
                                    <span><i class="fa fa-comment"></i>Viết bình luận</span>
                                    <div class="comments-item-number">533</div>
                                </a>
                            </div>
                            <div class="comments-item">
                                <a href="#">
                                    <span><i class="fa fa-camera"></i>Đăng hình ảnh</span>
                                    <div class="comments-item-number">3373</div>
                                </a>
                            </div>
                            <div class="comments-item">
                                <a href="#">
                                    <span><i class="fa fa-check-square"></i>Check-in</span>
                                    <div class="comments-item-number">312</div>
                                </a>
                            </div>
                            <div class="comments-item">
                                <a href="#">
                                    <span><i class="fa fa-heart"></i>Lưu vào yêu thích</span>
                                    <div class="comments-item-number">1184</div>
                                </a>
                            </div>
                            <div class="comments-item">
                                <a href="#">
                                    <span><i class="fa fa-star"></i>Lưu vào muốn đến</span>
                                    <div class="comments-item-number">1646</div>
                                </a>
                            </div>
                            <div class="comments-item">
                                <a href="#">
                                    <span><i class="fa fa-share-alt"></i>Chia sẻ</span>
                                    <div class="comments-item-number comments-item-number-empty"></div>
                                </a>
                            </div>
                            <div class="comments-item">
                                <a href="#">
                                    <span><i class="fa fa-map-marker"></i>Địa điểm lân cận</span>
                                    <div class="comments-item-number comments-item-number-empty"></div>
                                </a>
                            </div>
                            <div class="comments-item">
                                <a href="#">
                                    <span><i class="fa fa-map-marker"></i>Địa điểm tương tự</span>
                                    <div class="comments-item-number comments-item-number-empty"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    {!! Html::script('libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js') !!}
    {!! Html::script('libs/fancybox/source/jquery.fancybox.pack.js') !!}
    {!! Html::script('libs/fancybox/source/helpers/jquery.fancybox-buttons.js') !!}
    {!! Html::script('libs/fancybox/source/helpers/jquery.fancybox-media.js') !!}
    {!! Html::script('libs/fancybox/source/helpers/jquery.fancybox-thumbs.js') !!}
    {!! Html::script('http://maps.googleapis.com/maps/api/js') !!}
    <script>
        var myCenter = new google.maps.LatLng(10.77191, 106.65774);
        var marker;

        function initialize(){
            var mapProp = {
                center:myCenter,
                zoom: 17,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("map"), mapProp);

            var marker = new google.maps.Marker({
                position:myCenter
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script>
@endsection