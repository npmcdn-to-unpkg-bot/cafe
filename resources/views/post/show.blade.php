@extends('layouts.app')

@section('title')
    | Post
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="blogs blogs-wrapper" id="blogs">
            <div class="container">
                <div class="col-lg-8 col-md-8 col-sm-8 blog-area-left">
                    <div class="blog-detail-content">
                        <div class="owners">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                <a href="#" class="author_avatar">
                                    <img alt="" src="../img/blogs/author2.jpg">
                                </a>
                            </div>
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                <a href="#" class="author_name">{{ $post->user->name }}</a>
                                <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                            </div>
                        </div>
                        <div class="image-cover">
                            <img src="{{ $post->cover->url() }}" >
                        </div>
                        <h1 class="blog-title">{{ $post->title }}</h1>
                        <div class="content">
                            <div class="content-main">
                                <p class="summary">
                                    {{ $post->summary }}
                                </p>
                                {!! $post->body !!}
                            </div>

                            <div class="social">
                                <ul class="like-comment">
                                    <li id="likes-count"><i class="fa fa-heart fa-mg-right"></i><span>30</span></li>
                                    <li id="comments-count"><i class="fa fa-comments fa-mg-right"></i><span>{{ $post->comments->count() }}</span></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <div class="comments">
                                    <div class="comment-input">
                                        {!! Form::open(array('route' => array('posts.storeComment', $post->id), 'id' => 'new-comment-form')) !!}
                                            {{ Form::text('body', null, array('id' => 'comment-body', 'placeholder' => 'Write your comment....')) }}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="all-comments" id="all-comments">
                                        @foreach($post->comments->reverse() as $comment)
                                            <div class="wrapper">
                                                <div class="avatar-comment">
                                                    <a href="#"><img alt="" src="../img/comments/commenter10.jpg"></a>
                                                </div>
                                                <div class="cmt-wrapper">
                                                    <div class="name">
                                                        <h5 class="bold"><a href="#">{{ $comment->user->name }}</a></h5>
                                                    </div>
                                                    <div class="cmt-content">
                                                        <span>{{ $comment->body }}</span>
                                                    </div>
                                                    @if(Auth::user())
                                                        @if ($comment->user_id == Auth::user()->id)
                                                            <a href=" {{ route('posts.destroyComments', [$post->id, $comment->id]) }}" class="comment-destroy"><i class="fa fa-trash"></i></a>
                                                        @endif
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 blog-area-right">
                    <div id="chuyen-de-right">
                        <div class="tabs-box">
                            <ul class="clearfix">
                                <li class="active"><a href="#topnew">Mới nhất</a></li>
                                <li class=""><a href="#topview">Hot nhất</a></li>
                            </ul>

                            <div id="topnew" class="build-tab">
                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an1.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời">Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời</a>
                                        </div>
                                        <div class="article-new-description">
                                            Thức uống cũng sành điệu quá nè.
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an2.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Các món ăn vặt đang sốt rần rần ở Hà Nội">Các món ăn vặt đang "sốt rần rần" ở Hà Nội</a>
                                        </div>
                                        <div class="article-new-description">
                                            Hà Nội truyền thống dần nhường chỗ cho hàng trăm món ăn vặt mới lạ, update mỗi ngày. Các bạn đã thử hết
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an3.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7">Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7</a>
                                        </div>
                                        <div class="article-new-description">
                                            Nam Du (Kiên Giang) hứa hẹn sẽ là điểm đến cực “hot” mùa hè này bởi làn nước trong xanh, hàng dừa rợp bóng
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an4.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời">Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời</a>
                                        </div>
                                        <div class="article-new-description">
                                            Thức uống cũng sành điệu quá nè.
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an5.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Các món ăn vặt đang sốt rần rần ở Hà Nội">Các món ăn vặt đang "sốt rần rần" ở Hà Nội</a>
                                        </div>
                                        <div class="article-new-description">
                                            Hà Nội truyền thống dần nhường chỗ cho hàng trăm món ăn vặt mới lạ, update mỗi ngày. Các bạn đã thử hết
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an6.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7">Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7</a>
                                        </div>
                                        <div class="article-new-description">
                                            Nam Du (Kiên Giang) hứa hẹn sẽ là điểm đến cực “hot” mùa hè này bởi làn nước trong xanh, hàng dừa rợp bóng
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="topview" class="build-tab" style="display: none;">
                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an6.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời">Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời</a>
                                        </div>
                                        <div class="article-new-description">
                                            Thức uống cũng sành điệu quá nè.
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an5.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Các món ăn vặt đang sốt rần rần ở Hà Nội">Các món ăn vặt đang "sốt rần rần" ở Hà Nội</a>
                                        </div>
                                        <div class="article-new-description">
                                            Hà Nội truyền thống dần nhường chỗ cho hàng trăm món ăn vặt mới lạ, update mỗi ngày. Các bạn đã thử hết
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an4.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7">Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7</a>
                                        </div>
                                        <div class="article-new-description">
                                            Nam Du (Kiên Giang) hứa hẹn sẽ là điểm đến cực “hot” mùa hè này bởi làn nước trong xanh, hàng dừa rợp bóng
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an3.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời">Cuộc đua giành quán quân của các thức uống trên cả tuyệt vời</a>
                                        </div>
                                        <div class="article-new-description">
                                            Thức uống cũng sành điệu quá nè.
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an2.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Các món ăn vặt đang sốt rần rần ở Hà Nội">Các món ăn vặt đang "sốt rần rần" ở Hà Nội</a>
                                        </div>
                                        <div class="article-new-description">
                                            Hà Nội truyền thống dần nhường chỗ cho hàng trăm món ăn vặt mới lạ, update mỗi ngày. Các bạn đã thử hết
                                        </div>
                                    </div>
                                </div>

                                <div class="article-new clearfix">
                                    <a href="blog-detail.html">
                                        <img alt="" src="../img/blogs-connect/anothers/an1.jpg">
                                    </a>
                                    <div class="article-new-content">
                                        <div class="article-new-title">
                                            <a href="blog-detail.html" title="Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7">Bí kíp du lịch đảo Nam Du chỉ 1 triệu 7</a>
                                        </div>
                                        <div class="article-new-description">
                                            Nam Du (Kiên Giang) hứa hẹn sẽ là điểm đến cực “hot” mùa hè này bởi làn nước trong xanh, hàng dừa rợp bóng
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="row">
        <div class="col-md-6">
            {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
        </div>
        <div class="col-md-6">
            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('script')
    <script>
        {{-- Create comment handle by ajax--}}
        $('#new-comment-form').submit(function(e){
            e.preventDefault();

            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(data){
                    // clear comment-body input
                    $('#comment-body').val('');

                    // init appended html code
                    var htmlCode = '';
                    data.comments.forEach(function (comment) {
                        htmlCode += '<div class="wrapper">';
                        htmlCode += '<div class="avatar-comment">';
                        htmlCode += '<a href="#"><img alt="" src="../img/comments/commenter10.jpg"></a>';
                        htmlCode += '</div>';
                        htmlCode += '<div class="cmt-wrapper">';
                        htmlCode += '<div class="name">';
                        htmlCode += '<h5 class="bold"><a href="#">' + comment.username + '</a></h5>';
                        htmlCode += '</div>';
                        htmlCode += '<div class="cmt-content">';
                        htmlCode += '<span>' + comment.body + '</span>';
                        htmlCode += '</div>';
                        if (data.current_user_id){
                            if (comment.user_id == data.current_user_id){
                                htmlCode += '<a href="{{ url('/posts') }}' + '/' + comment.post_id + '/comments/' + comment.id + '" class="comment-destroy"><i class="fa fa-trash"></i></a>';
                            }
                        }
                        htmlCode += '</div>';
                        htmlCode += '</div>';
                    });

                    // update all-comments view
                    $('#all-comments').html(htmlCode);

                    // update comments count
                    $('#comments-count span').text(data.comments.length);
                },
                error: function(err){
                    if(err.status){
                        window.location.href = "{{ url('/login') }}";
                    }
                }
            });
        });

        {{-- Delete comment handle by ajax--}}
        $(document).on('click', '.comment-destroy', function(e){
            e.preventDefault();

            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                type: 'DELETE',
                url: $(this).attr('href'),
                success: function(data){
                    var htmlCode = '';
                    data.comments.forEach(function (comment) {
                        htmlCode += '<div class="wrapper">';
                        htmlCode += '<div class="avatar-comment">';
                        htmlCode += '<a href="#"><img alt="" src="../img/comments/commenter10.jpg"></a>';
                        htmlCode += '</div>';
                        htmlCode += '<div class="cmt-wrapper">';
                        htmlCode += '<div class="name">';
                        htmlCode += '<h5 class="bold"><a href="#">' + comment.username + '</a></h5>';
                        htmlCode += '</div>';
                        htmlCode += '<div class="cmt-content">';
                        htmlCode += '<span>' + comment.body + '</span>';
                        htmlCode += '</div>';
                        if (data.current_user_id){
                            if (comment.user_id == data.current_user_id){
                                htmlCode += '<a href="{{ url('/posts') }}' + '/' + comment.post_id + '/comments/' + comment.id + '" class="comment-destroy"><i class="fa fa-trash"></i></a>';
                            }
                        }
                        htmlCode += '</div>';
                        htmlCode += '</div>';
                    });

                    // update all-comments view
                    $('#all-comments').html(htmlCode);

                    // update comments count
                    $('#comments-count span').text(data.comments.length);
                },
                error: function(err){
                    console.log('Error when create comment: ' + err);
                }
            });
        });

        //  Tab init
        $(".tabs-box li").click(function() {
            $(".tabs-box li").removeClass('active');
            $(this).addClass("active");
            $(".build-tab").hide();
            var selected_tab = $(this).find("a").attr("href");
            $(selected_tab).fadeIn();
            return false;
        });
    </script>
@endsection