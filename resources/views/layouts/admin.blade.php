<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin</title>

    {{-- Favicon --}}
    <link href="{{ url('img/favicon.png') }}" rel="shortcut icon"/>

    {{-- Styles --}}
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    {!! Html::style('css/admin/cover-bootstrap.css') !!}
    {!! Html::style('css/admin/materialadmin.css') !!}
    {!! Html::style('css/admin/material-design-iconic-font.min.css') !!}
    {!! Html::style('css/admin/admin.css') !!}
    @yield('style')
</head>
<body class="menubar-hoverable header-fixed menubar-pin">
    <header id="header" >
        <div class="headerbar">
            <div class="headerbar-left">
                <ul class="header-nav header-nav-options">
                    <li class="header-nav-brand" >
                        <div class="brand-holder">
                            <a href="{{ route('admin.dashboard') }}">
                                <span class="text-lg text-bold text-primary">CAFE ADMIN</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="headerbar-right">
                <ul class="header-nav header-nav-profile">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                            <img src="{{ Auth::user()->avatar->url('thumb') }}" alt="" />
                            <span class="profile-info">
                                {{ Auth::user()->name }}
                                <small>Administrator</small>
                            </span>
                        </a>
                        <ul class="dropdown-menu animation-dock">
                            <li><a href="{{ route('profile.show', Auth::user()->id) }}">My profile</a></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div id="base">
        <div id="content">
            <section>
                <div class="section-body">
                     {{--Flash message--}}
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            {{ Session::get('error') }}
                        </div>
                    @endif

                    @yield('content')
                </div>
            </section>
        </div>

        <div id="menubar" class="menubar-inverse">
            <div class="menubar-fixed-panel">
                <div>
                    <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="expanded">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="text-lg text-bold text-primary ">CAFE ADMIN</span>
                    </a>
                </div>
            </div>
            <div class="menubar-scroll-panel">
                <ul id="main-menu" class="gui-controls">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="{{ $controller == 'DashboardController' ? 'active' : '' }}">
                            <div class="gui-icon"><i class="md md-home"></i></div>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.areas.index') }}" class="{{ $controller == 'AreaController' ? 'active' : '' }}">
                            <div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
                            <span class="title">Areas</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.galleries.index') }}" class="{{ $controller == 'GalleryController' ? 'active' : '' }}">
                            <div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
                            <span class="title">Galleries</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.places.index') }}" class="{{ $controller == 'PlaceController' ? 'active' : '' }}">
                            <div class="gui-icon"><i class="fa fa-map-marker"></i></div>
                            <span class="title">Places</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.posts.index') }}" class="{{ $controller == 'PostController' ? 'active' : '' }}">
                            <div class="gui-icon"><i class="md md-web"></i></div>
                            <span class="title">Posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.index') }}" class="{{ $controller == 'UserController' ? 'active' : '' }}">
                            <div class="gui-icon"><i class="fa fa-user-secret"></i></div>
                            <span class="title">Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.index') }}" class="{{ $controller == 'ContactController' ? 'active' : '' }}">
                            <div class="gui-icon"><i class="md md-email"></i></div>
                            <span class="title">Contacts</span>
                        </a>
                    </li>
                </ul>
                <div class="menubar-foot-panel">
                    <small class="no-linebreak hidden-folded">
                        <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                    </small>
                </div>
            </div>
        </div>
    </div>

    {{-- JavaScripts --}}
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {!! Html::script('js/admin/jquery.nanoscroller.min.js') !!}
    {!! Html::script('js/admin/App.min.js') !!}
    @yield('script')
</body>
</html>
