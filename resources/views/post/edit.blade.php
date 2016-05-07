@extends('layouts.app')

@section('title')
    | Edit Post
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section blogs blogs-wrapper" style="background: #E6E6E6;">
            <div class="post-creating-header">
                <h1 >UPDATE POST</h1>
                <h3>Fill out the form below to update post!</h3>
            </div>
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate' => '', 'class' => 'creating-post-form']) !!}
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
                            {{ Form::textarea('summary', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'minlength' => '50', 'rows' => '3')) }}
                            @if ($errors->has('summary'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('summary') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <div id="dropzone">
                                <div class="dropzone-content">
                                    <img src="{{ $post->cover->url() }}" alt="" style="display: inline;">
                                </div>
                                {{ Form::file('cover', array('class' => '')) }}
                            </div>
                            @if ($errors->has('cover'))
                                <span class="help-block">
                                <strong>{{ $errors->first('cover') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
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
                    {{ Form::submit('Update Post', array('class' => 'btn btn-main')) }}
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
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            height: '250'
        });
    </script>
@endsection
