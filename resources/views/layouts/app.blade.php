<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Cafe @yield('title')</title>

    {{-- Favicon --}}
    <link href="{{ url('img/favicon.png') }}" rel="shortcut icon"/>

    {{-- Styles --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    @yield('style')
</head>
<body>
    {{-- Nav bar --}}
    <nav class="navbar top-bar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}"><img alt="" src="{{ url('img/logo.png') }}"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse align-right">
                <ul class="nav navbar-nav bold">
                    <li class="{{ $controller == 'HomeController'? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ $controller == 'PlaceController'? 'active' : '' }}"><a href="{{ url('/places') }}">Địa điểm</a></li>
                    <li class="{{ $controller == 'GalleryController'? 'active' : '' }}"><a href="{{ url('/galleries') }}">Bộ sưu tập</a></li>
                    <li class="{{ $controller == 'PostController'? 'active' : '' }}"><a href="{{ url('/posts') }}">Blogs</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right bold">
                    <!-- Authentication Links -->
                    @if(Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle current-user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="normal-text name">Ben</span>
                                <img alt="" src="{{ url('img/user.jpg') }}" class="avatar">
                            </a>
                            <ul class="dropdown-menu align-right">
                                <li><a href="#">Your profile<i class="fa fa-reddit-alien fa-mg-left"></i></a></li>
                                <li><a href="#">Edit<i class="fa fa-pencil-square fa-mg-left"></i></a></li>
                                <li><a href="{{ url('/logout') }}">Logout<i class="fa fa-sign-out fa-mg-left"></i></a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="search">
                        <form class="navbar-form" role="search" action="/" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm..."/>
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <span class="fa fa-search"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Flash message --}}
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{ Session::get('success') }}
        </div>
    @endif

    {{-- Main content --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="footer align-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    Copyright &copy; 2014 Ben template. All rights reserved.
                </div>
            </div>
        </div>
        <a class="scroll-btn" href="#"></a>
    </footer>

    {{-- JavaScripts --}}
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {!! Html::script('js/app.js') !!}
    @yield('script')
</body>
</html>
