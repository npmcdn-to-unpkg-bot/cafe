@extends('layouts.app')

@section('title')
    | Edit Profile
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/profile.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section"  style="background: #E6E6E6; padding-top: 85px; padding-bottom: 20px;">
            <div class="container">
                <div class="profile-updating-header">
                    <h1>UPDATE PROFILE</h1>
                    <h3>Fill out the form below to update your profile!</h3>
                </div>
                {!! Form::model($user, ['route' => ['profile.update', $user->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate' => '', 'class' => 'profile-updating-form']) !!}
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group align-center">
                                <div id="dropzone">
                                    <div class="dropzone-content">
                                        <img src="{{ $user->avatar->url() }}" alt="" style="display: inline;">
                                    </div>
                                    {{ Form::file('avatar', array('class' => '')) }}
                                </div>
                                {{ Form::label('avatar', 'Click on image to choose new avatar') }}
                                @if ($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="form-group">
                                {{ Form::label('name', 'Username') }}
                                {{ Form::text('name', (old('name') == null)? $user->name : old('name'), array('class' => 'form-control', 'required' => '', 'maxlength' => '25')) }}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
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
                            <div class="form-action">
                                {{ Form::submit('Save Change', array('class' => 'btn btn-main')) }}
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </section>
    </div>
@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection