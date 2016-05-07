@extends('layouts.app')

@section('title')
    | Edit Profile
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
    {!! Html::style('css/profile.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section blogs"  style="background: #f8f8f8; padding-top: 72px; padding-bottom: 20px;">
            <div class="container">
                <h1>Edit profile</h1>
                <img src="{{ $user->avatar->url() }}" alt="">
                {!! Form::model($user, ['route' => ['profile.update', $user->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate' => '']) !!}
                <div class="form-group">
                    {{ Form::label('avatar', 'Avatar:') }}
                    {{ Form::file('avatar', array('class' => 'form-control')) }}
                    @if ($errors->has('cover'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cover') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('name', 'Username:') }}
                    {{ Form::text('name', (old('name') == null)? $user->name : old('name'), array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::email('email', (old('email') == null)? $user->email : old('email'), array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('password', 'Password (leave blank if you don\'t want to change it)') }}
                    {{ Form::password('password', array('class' => 'form-control')) }}
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('password_confirmation', 'Password Confirmation') }}
                    {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('current_password', 'Current Password (we need your current password to confirm your changes)') }}
                    {{ Form::password('current_password', array('class' => 'form-control', 'required' => '')) }}
                    @if ($errors->has('current_password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('current_password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="actions">
                    {{ Form::submit('Save Change', array('class' => 'btn btn-main')) }}
                </div>
                {!! Form::close() !!}
            </div>
        </section>
    </div>
@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection