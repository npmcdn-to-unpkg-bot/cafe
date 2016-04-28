@extends('layouts.app')

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section blogs blogs-wrapper">
            <h1>Edit post</h1>
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate' => '']) !!}
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
                {{ Form::label('cover', 'Image Cover:') }}
                {{ Form::file('cover', array('class' => 'form-control')) }}
                @if ($errors->has('cover'))
                    <span class="help-block">
                            <strong>{{ $errors->first('cover') }}</strong>
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
        </section>
    </div>
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
