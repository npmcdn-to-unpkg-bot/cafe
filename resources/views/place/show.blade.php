@extends('layouts.app')

@section('title')
    | {{ $place->name }}
@endsection

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
                        <div class="row" style="padding-bottom: 20px;">
                            <div class="col-md-4 col-sm-4 col-xs-4" id="place-thumb">
                                <a href="{{ route('places.show', $place->id) }}">
                                    <div class="place-details-thumbnail"></div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8 place-details-text" id="place-full-info">
                                <div class="place-details-title">
                                    <span><i class="fa fa-check-circle"></i>{{ $place->name }}</span>
                                </div>
                                <div class="place-details-des">
                                    {{ $place->description }}
                                </div>
                                <div class="place-details-rating">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score">{{ number_format($place->space_point, 1, '.', ',') }}</div>
                                            <div class="rating-content">Không gian</div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score">{{ number_format($place->service_point, 1, '.', ',') }}</div>
                                            <div class="rating-content">Phục vụ</div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score">{{ number_format($place->quality_point, 1, '.', ',') }}</div>
                                            <div class="rating-content">Chất lượng</div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score">{{ number_format($place->address_point, 1, '.', ',') }}</div>
                                            <div class="rating-content">Vị trí</div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score">{{ number_format($place->price_point, 1, '.', ',') }}</div>
                                            <div class="rating-content">Giá cả</div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <div class="rating-score" id="rating-comment">{{ $place->comments->count() }}</div>
                                            <div class="rating-content">Bình luận</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="place-details-address">
                                    <span><i class="fa fa-location-arrow"></i>{{ $place->address }}</span>
                                </div>
                                <div class="place-details-address">
                                    <span><i class="fa fa-phone"></i>{{ $place->phone_number }}</span>
                                </div>
                                <div class="place-details-time">
                                    <span class="place-details-time-status"><i class="fa fa-clock-o"></i> Giờ mở cửa</span>
                                    <span>{{ $place->open_time }} - {{ $place->close_time }}</span>
                                </div>
                                <div class="place-details-price">
                                    <span><i class="fa fa-tag"></i> {{ $place->start_price }}đ - {{ $place->end_price }}đ</span>
                                </div>
                            </div>
                        </div>

                        <div class="infomation-map">
                            <h2 class="place-detail-title">Thông tin & Bản đồ</h2>
                            <div id="map"></div>
                            {!! $place->character !!}
                        </div>

                        <div class="review">
                            <h2 class="place-detail-title" style="margin-top: 5px;">
                                Đánh giá từ cộng đồng
                            </h2>
                            {!! $place->review !!}
                        </div>

                        <div class="social">
                            <h2 class="place-detail-title">
                                Bình luận từ khách hàng
                            </h2>
                            @if(Auth::user())
                                <ul id="likeable">
                                    @if($place->liked())
                                        <li>
                                            <a href="#" id="unlike-place">
                                                <i class="fa fa-thumbs-o-down" aria-hidden="true"></i> Unlike
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="#" id="like-place">
                                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Like
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            @endif
                            <ul class="like-comment" style="padding: 0;">
                                <li class="{{ $place->likeCount > 0 ? '' : 'hide' }}" id="liked-users">
                                    <a href="#" id="liked-users" data-toggle="modal" data-target="#likedUsers">
                                        <i class="fa fa-heartbeat" aria-hidden="true"></i> Liked
                                    </a>
                                </li>
                                <li id="likes-count"><i class="fa fa-heart fa-mg-right"></i><span>{{ $place->likeCount }}</span></li>
                                <li id="comments-count"><i class="fa fa-comments fa-mg-right"></i><span>{{ $place->comments->count() }}</span></li>
                            </ul>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <div class="comments">
                                <div class="comment-input">
                                    {!! Form::open(array('route' => array('places.storeComment', $place->id), 'id' => 'new-comment-form', 'autocomplete' => 'off')) !!}
                                        {{ Form::text('body', null, array('id' => 'comment-body', 'placeholder' => 'Write your comment....')) }}
                                    {!! Form::close() !!}
                                </div>
                                <div class="all-comments" id="all-comments">
                                    @foreach($place->comments->reverse() as $comment)
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
                                                        <a href=" {{ route('places.destroyComments', [$place->id, $comment->id]) }}" class="comment-destroy"><i class="fa fa-trash"></i></a>
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

                <div class="modal fade" id="likedUsers" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Liked</h4>
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
                                            <p>{{ $user->email }}</p>
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
@endsection

@section('script')
    {!! Html::script('libs/fancybox/lib/jquery.mousewheel-3.0.6.pack.js') !!}
    {!! Html::script('libs/fancybox/source/jquery.fancybox.pack.js') !!}
    {!! Html::script('libs/fancybox/source/helpers/jquery.fancybox-buttons.js') !!}
    {!! Html::script('libs/fancybox/source/helpers/jquery.fancybox-media.js') !!}
    {!! Html::script('libs/fancybox/source/helpers/jquery.fancybox-thumbs.js') !!}
    {!! Html::script('http://maps.googleapis.com/maps/api/js') !!}
    <script>
        /* google map init */
        var latitude = {{  $place->latitude }};
        var longitude = {{ $place->longitude }}
        var myCenter = new google.maps.LatLng(latitude, longitude);
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

        /* Fancybox init */
        $(".fancybox").fancybox();

        /*  .infomation-map ul li generate */
        $('.infomation-map li').each(function (index) {
            var text = $(this).text();
            $(this).html('<i class="fa fa-plus-circle"></i>' + text);
        });

        /* .review fancybox init */
        $('.review img').each(function(index){
            var wrapper = '<a class="fancybox" rel="lightbox" href="' + $(this).attr('src') + '"></a>';
            $(this).wrap(wrapper);
        });

        $(".fancybox").fancybox();

        /* Comments handle*/
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
                            htmlCode += '<a href="{{ url('/places') }}' + '/' + comment.place_id + '/comments/' + comment.id + '" class="comment-destroy"><i class="fa fa-trash"></i></a>';
                        }
                        htmlCode += '</div>';
                        htmlCode += '</div>';
                    });

                    // update all-comments view
                    $('#all-comments').html(htmlCode);

                    // update comments count
                    $('#comments-count span, #rating-comment').text(data.comments.length);
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
                            htmlCode += '<a href="{{ url('/places') }}' + '/' + comment.place_id + '/comments/' + comment.id + '" class="comment-destroy"><i class="fa fa-trash"></i></a>';
                        }
                        htmlCode += '</div>';
                        htmlCode += '</div>';
                    });

                    // update all-comments view
                    $('#all-comments').html(htmlCode);

                    // update comments count
                    $('#comments-count span, #rating-comment').text(data.comments.length);
                },
                error: function(err){
                    console.log('Error when destroy comment: ' + err);
                }
            });
        });

        $(document).on('click', '#like-place', function(e) {
            e.preventDefault();

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: "{{ route('places.like', $place->id) }}",
                success: function (data) {
                    var unlikeHtml = '',
                        likedUsersHtml = '';

                    // update likeable action
                    unlikeHtml += '<li>';
                    unlikeHtml += '<a href="#" id="unlike-place">'
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

        $(document).on('click', '#unlike-place', function(e) {
            e.preventDefault();

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: "{{ route('places.unlike', $place->id) }}",
                success: function (data) {
                    var likeHtml = '',
                        likedUsersHtml = '';

                    // update likeable action
                    likeHtml += '<li>';
                    likeHtml += '<a href="#" id="like-place">'
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
    </script>
@endsection