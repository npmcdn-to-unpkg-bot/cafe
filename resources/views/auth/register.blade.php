@extends('layouts.auth')

@section('content')
    <div class="sform">
        <h1>Sign up</h1>
        <form role="form" method="POST" action="{{ url('/register') }}" data-parsley-validate>
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username" required maxlength="25">
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required maxlength="255">
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
            <div class="actions row">
                <div class="col-md-6">
                    <input type="submit" value="Sign up now!" class="btn btn-main" style="margin-bottom: 20px;" />
                </div>
                <div class="col-md-6">
                    <a class="btn btn-main" href="{{ url('/login') }}" style="margin-bottom: 20px;">Log in</a>
                </div>
            </div>
        </form>
    </div>
@endsection
