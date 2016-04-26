@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1>Create new post.</h1>

    {!! Form::open(array('route' => 'posts.store')) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}
            @if ($errors->has('title'))
                <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('body', "Post body:") }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}
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
@endsection
