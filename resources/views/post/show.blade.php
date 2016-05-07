@extends('layouts.app')

@section('title')
    | {{ $post->title }}
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="blogs blogs-wrapper" id="blogs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 blog-area-left">
                        <div class="blog-detail-content">
                            <div class="owners">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <a href="{{ route('profile.show', $post->user->id) }}" class="author_avatar">
                                        <img alt="" src="{{ $post->user->avatar->url('thumb') }}">
                                    </a>
                                </div>
                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <a href="{{ route('profile.show', $post->user->id) }}" class="author_name">{{ $post->user->name }}</a>
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
                                    @if(Auth::user())
                                        <ul id="likeable">
                                            @if($post->liked())
                                                <li>
                                                    <a href="#" id="unlike-post">
                                                        <i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Unlike
                                                    </a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="#" id="like-post">
                                                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Like
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    @endif
                                    <ul class="like-comment" style="padding-left: 0;">
                                        <li class="{{ $post->likeCount > 0 ? '' : 'hide' }}" id="liked-users">
                                            <a href="#" data-toggle="modal" data-target="#likedUsers">
                                                <i class="fa fa-heartbeat" aria-hidden="true"></i> Liked
                                            </a>
                                        </li>
                                        <li id="likes-count"><i class="fa fa-heart fa-mg-right"></i><span>{{ $post->likeCount }}</span></li>
                                        <li id="comments-count"><i class="fa fa-comments fa-mg-right"></i><span>{{ $post->comments->count() }}</span></li>
                                    </ul>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <div class="comments">
                                        <div class="comment-input">
                                            {!! Form::open(array('route' => array('posts.storeComment', $post->id), 'id' => 'new-comment-form', 'autocomplete' => 'off')) !!}
                                                {{ Form::text('body', null, array('id' => 'comment-body', 'placeholder' => 'Write your comment....')) }}
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="all-comments" id="all-comments">
                                            @foreach($post->comments->reverse() as $comment)
                                                <div class="wrapper">
                                                    <div class="avatar-comment">
                                                        <a href="{{ route('profile.show', $comment->user->id) }}"><img alt="" src="{{ $comment->user->avatar->url('thumb') }}"></a>
                                                    </div>
                                                    <div class="cmt-wrapper">
                                                        <div class="name">
                                                            <h5 class="bold"><a href="{{ route('profile.show', $comment->user->id) }}">{{ $comment->user->name }}</a></h5>
                                                        </div>
                                                        <div class="cmt-content">
                                                            <span>{{ $comment->body }}</span>
                                                        </div>
                                                        @if(Auth::user())
                                                            @if ($comment->user_id == Auth::user()->id || Auth::user()->is_admin)
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
                                    @foreach($latestPosts as $lp)
                                        <div class="article-new clearfix">
                                            <a href="{{ route('posts.show', $lp->id) }}">
                                                <img alt="" src="{{ $lp->cover->url('thumb') }}">
                                            </a>
                                            <div class="article-new-content">
                                                <div class="article-new-title">
                                                    <a href="{{ route('posts.show', $lp->id) }}" title="{{ $lp->title }}">{{ $lp->title }}</a>
                                                </div>
                                                <div class="article-new-description">
                                                    {{ $lp->summary }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div id="topview" class="build-tab" style="display: none;">
                                    @foreach($bestPosts as $bp)
                                        <div class="article-new clearfix">
                                            <a href="{{ route('posts.show', $bp->id) }}">
                                                <img alt="" src="{{ $bp->cover->url('thumb') }}">
                                            </a>
                                            <div class="article-new-content">
                                                <div class="article-new-title">
                                                    <a href="{{ route('posts.show', $bp->id) }}" title="{{ $bp->title }}">{{ $bp->title }}</a>
                                                </div>
                                                <div class="article-new-description">
                                                    {{ $bp->summary }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="likedUsers" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Liked Users</h4>
                            </div>
                            <div class="modal-body">
                                @foreach($likedUsers as $user)
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="{{ route('profile.show', $user->id) }}">
                                                <img class="media-object" src="{{ $user->avatar->url('thumb') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href="{{ route('profile.show', $user->id) }}">{{ $user->name }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @if (Auth::user() && (Auth::user()->id == $post->user->id || Auth::user()->is_admin))
        <div class="row post-actions">
            <div class="col-md-6">
                {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
            </div>
            <div class="col-md-6">
                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    @endif
@endsection

@section('script')
    <script>
        // Create comment handle by ajax
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
                        htmlCode += '<a href="{{ url('profile') }}' + '/' + comment.user_id + '"><img alt="" src="' + comment.user_avatar_url + '"></a>';
                        htmlCode += '</div>';
                        htmlCode += '<div class="cmt-wrapper">';
                        htmlCode += '<div class="name">';
                        htmlCode += '<h5 class="bold"><a href="{{ url('profile') }}' + '/' + comment.user_id + '">' + comment.username + '</a></h5>';
                        htmlCode += '</div>';
                        htmlCode += '<div class="cmt-content">';
                        htmlCode += '<span>' + comment.body + '</span>';
                        htmlCode += '</div>';
                        if (comment.user_id == data.current_user_id || data.user_is_admin == true){
                            htmlCode += '<a href="{{ url('/posts') }}' + '/' + comment.post_id + '/comments/' + comment.id + '" class="comment-destroy"><i class="fa fa-trash"></i></a>';
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

        // Delete comment handle by ajax
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
                        htmlCode += '<a href="{{ url('profile') }}' + '/' + comment.user_id + '"><img alt="" src="' + comment.user_avatar_url + '"></a>';
                        htmlCode += '</div>';
                        htmlCode += '<div class="cmt-wrapper">';
                        htmlCode += '<div class="name">';
                        htmlCode += '<h5 class="bold"><a href="{{ url('profile') }}' + '/' + comment.user_id + '">' + comment.username + '</a></h5>';
                        htmlCode += '</div>';
                        htmlCode += '<div class="cmt-content">';
                        htmlCode += '<span>' + comment.body + '</span>';
                        htmlCode += '</div>';
                        if (comment.user_id == data.current_user_id || data.user_is_admin == true){
                            htmlCode += '<a href="{{ url('/posts') }}' + '/' + comment.post_id + '/comments/' + comment.id + '" class="comment-destroy"><i class="fa fa-trash"></i></a>';
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
                    console.log('Error when destroy comment: ' + err);
                }
            });
        });

        $(document).on('click', '#like-post', function(e) {
            e.preventDefault();

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: "{{ route('posts.like', $post->id) }}",
                success: function (data) {
                    var unlikeHtml = '',
                        likedUsersHtml = '';

                    // update likeable action
                    unlikeHtml += '<li>';
                    unlikeHtml += '<a href="#" id="unlike-post">'
                    unlikeHtml += '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Unlike';
                    unlikeHtml += '</a>';
                    unlikeHtml += '</li>';
                    $('#likeable').html(unlikeHtml);

                    // update liked users list
                    data.liked_users.forEach(function (user) {
                        likedUsersHtml += '<div class="media">';
                        likedUsersHtml += '<div class="media-left">';
                        likedUsersHtml += '<a href="{{ url('profile') }}' + '/' + user.user_id + '">';
                        likedUsersHtml += '<img class="media-object" src="' + user.user_avatar_url + '" alt="">';
                        likedUsersHtml += '</a>';
                        likedUsersHtml += '</div>';
                        likedUsersHtml += '<div class="media-body">';
                        likedUsersHtml += '<a href="{{ url('profile') }}' + '/' + user.user_id + '">' + user.username + '</a>';
                        likedUsersHtml += '</div>';
                        likedUsersHtml += '</div>';
                    })
                    $('#likedUsers .modal-body').html(likedUsersHtml);

                    // show #liked-users modal link
                    $('#liked-users').removeClass('hide');

                    // update like count
                    $('#likes-count span').text(data.like_count);
                },
                error: function (err) {
                    console.log('Error when like post: ' + err);
                }
            });
        });

        $(document).on('click', '#unlike-post', function(e) {
            e.preventDefault();

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: "{{ route('posts.unlike', $post->id) }}",
                success: function (data) {
                    var likeHtml = '',
                        likedUsersHtml = '';

                    // update likeable action
                    likeHtml += '<li>';
                    likeHtml += '<a href="#" id="like-post">'
                    likeHtml += '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Like';
                    likeHtml += '</a>';
                    likeHtml += '</li>';
                    $('#likeable').html(likeHtml);

                    // update liked users list
                    data.liked_users.forEach(function (user) {
                        likedUsersHtml += '<div class="media">';
                        likedUsersHtml += '<div class="media-left">';
                        likedUsersHtml += '<a href="{{ url('profile') }}' + '/' + user.user_id + '">';
                        likedUsersHtml += '<img class="media-object" src="' + user.user_avatar_url + '" alt="">';
                        likedUsersHtml += '</a>';
                        likedUsersHtml += '</div>';
                        likedUsersHtml += '<div class="media-body">';
                        likedUsersHtml += '<a href="{{ url('profile') }}' + '/' + user.user_id + '">' + user.username + '</a>';
                        likedUsersHtml += '</div>';
                        likedUsersHtml += '</div>';
                    })
                    $('#likedUsers .modal-body').html(likedUsersHtml);

                    // toggle #liked-users modal link
                    if(data.like_count > 0) {
                        $('#liked-users').removeClass('hide');
                    }
                    else{
                        $('#liked-users').addClass('hide');
                    }

                    // update like count
                    $('#likes-count span').text(data.like_count);
                },
                error: function (err) {
                    console.log('Error when unlike post: ' + err);
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