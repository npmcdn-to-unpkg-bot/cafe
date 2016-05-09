@extends('layouts.auth')

@section('content')
    <div class="sform" style="margin-top: 70px;">
        <h1>Login</h1>
        <form role="form" method="POST" action="{{ url('/login') }}" data-parsley-validate>
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group remember-me">
                <input type="checkbox" name="remember" id="remember_me">
                <label for="remember_me">Remember me</label>
            </div>
            <div class="actions">
                <input type="submit" name="commit" value="Login" class="btn btn-main" style="margin-bottom: 25px;" />
                <div class="not-registerd">
                    Not registered? <a href="{{ url('/register') }}">Create an account</a>
                </div>
                <a href="{{ url('/password/reset') }}">Forgot password</a>
            </div>
        </form>
    </div>
@endsection
