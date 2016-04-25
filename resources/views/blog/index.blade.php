@extends('layouts.app')

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section align-center blogs blogs-wrapper" id="blogs">
            <h2 class="s-title bold upper-text">Blogs</h2>
            <p class="s-intro">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
            </p>
            <div class="container">
                <div class="container">
                    <div class="row align-left">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd1.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author1.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd2.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author2.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd3.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author3.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd1.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author3.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd2.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author2.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd3.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author1.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd4.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author1.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd2.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author2.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd3.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author3.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd1.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author3.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd2.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Proin eget tortor risus.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author2.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="card">
                                <div class="img-container">
                                    <a href="blog-detail.html"><img alt="" src="../img/places/dd3.jpg"></a>
                                </div>
                                <div class="info">
                                    <div class="name bold"><a href="blog-detail.html">Top 10 Café Biệt Thự sân vườn đẹp nhất Sài Gòn</a></div>
                                    <div class="description">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                                    </div>
                                </div>
                                <ul class="card-bottom">
                                    <li>
                                        <a href="#" class="author">
                                            <img alt="" src="../img/blogs/author1.jpg">
                                            <span class="bold">John Smith</span>
                                        </a>
                                    </li>
                                    <li><i class="fa fa-heart fa-mg-right"></i>30</li>
                                    <li><i class="fa fa-comments fa-mg-right"></i>52</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-main">XEM THÊM...</a>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
@endsection