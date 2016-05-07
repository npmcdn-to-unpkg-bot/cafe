@extends('layouts.app')

@section('title')
    | Create Post
@endsection

@section('style')
    {!! Html::style('css/index.css') !!}
    {!! Html::style('css/blog.css') !!}
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div id="content">
        <section class="section blogs blogs-wrapper" style="background: #E6E6E6;">
            <div class="container">
                <div class="post-creating-header">
                    <h1 >NEW POST</h1>
                    <h3>Fill out the form below to create new post!</h3>
                </div>
                <form action="{{ route('posts.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" data-parsley-validate class="creating-post-form">
                    {!! csrf_field() !!}

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" required maxlength="255" value="{{ old('title') }}">
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="summary">Summary</label>
                                <textarea name="summary" id="summary" cols="50" rows="3" class="form-control" required maxlength="255" minlength="50">{{ old('summary') }}</textarea>
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
                                    <div class="dropzone-content">Choose cover</div>
                                    <input type="file" name="cover" id="cover" required >
                                </div>
                                @if ($errors->has('cover'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cover') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea name="body" id="body" class="form-control" required>{{ old('body') }}</textarea>
                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-action">
                        <input type="submit" value="CREATE POST" class="btn btn-main"/>
                    </div>
                </form>
            </div>
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
