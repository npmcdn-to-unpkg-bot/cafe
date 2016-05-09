@extends('layouts.auth')

<!-- Main Content -->
@section('content')
    <div class="sform" style="margin-top: 70px;">
        <h1>Forgot password</h1>
        <form role="form" method="POST" action="{{ url('/password/email') }}" data-parsley-validate>
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="actions" style="text-align: right;">
                <input type="submit" value="Send Password Reset Link" class="btn btn-main" style="margin-bottom: 10px;" />
                <a href="{{ url('/register') }}">Create a account</a>
                |
                <a href="{{ url('/login') }}">Login</a>
            </div>
        </form>
    </div>
@endsection
