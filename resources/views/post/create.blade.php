@extends('layouts.admin')

@section('style')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <h1>Create new post.</h1>
    {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('summary', "Summary:") }}
            {{ Form::textarea('summary', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
            @if ($errors->has('summary'))
                <span class="help-block">
                    <strong>{{ $errors->first('summary') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('body', "Body:") }}
            {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
            @if ($errors->has('body'))
                <span class="help-block">
                    <strong>{{ $errors->first('body') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-action">
            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
        </div>
    {!! Form::close() !!}
@endsection

@section('script')
    {!! Html::script('/vendor/unisharp/laravel-ckeditor/ckeditor.js') !!}
    {!! Html::script('js/parsley.min.js') !!}
    <script>
        CKEDITOR.replace('body', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
        });
    </script>
@endsection
