@extends('layouts.admin')

@section('style')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <h1>Edit post</h1>
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'data-parsley-validate' => '']) !!}
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
            {{ Form::label('body', "Post body:") }}
            {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
            @if ($errors->has('body'))
                <span class="help-block">
                    <strong>{{ $errors->first('body') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-action">
            {{ Form::submit('Update Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
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
