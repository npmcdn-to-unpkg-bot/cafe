@extends('layouts.auth')

@section('content')
    <div class="sform" style="margin-top: 70px;">
        <h1>Reset Password</h1>
        <form role="form" method="POST" action="{{ url('/password/reset') }}" data-parsley-validate>
            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Email" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required minlength="6">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required minlength="6" data-parsley-equalto="#password">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
            <div class="actions" style="text-align: right;">
                <input type="submit" value="Reset Password" class="btn btn-main" style="margin-bottom: 10px;" />
            </div>
        </form>
    </div>
@endsection
