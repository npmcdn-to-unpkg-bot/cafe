@extends('layouts.admin')

@section('style')
    {!! Html::style('css/parsley.css') !!}
    <style>
        body{
            background: #e5e6e6;
        }
    </style>
@endsection

@section('content')
    <div class="card">
        <div class="card-head style-primary">
            <header>Creat gallery - Fill out the form below to create area</header>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.galleries.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" data-parsley-validate class="form">
                {!! csrf_field() !!}

                <div class="form-group floating-label">
                    <input type="text" name="name" id="name" class="form-control" required maxlength="60" value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="cover">Cover</label>
                    <div id="dropzone">
                        <div class="dropzone-content">
                            <h3>Drop files here or click to upload.</h3>
                            <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                        </div>
                        <input type="file" name="cover" id="cover" required >
                    </div>
                    @if ($errors->has('cover'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cover') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-action">
                    <input type="submit" value="Create" class="btn ink-reaction btn-raised btn-lg btn-primary pull-right"/>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection
