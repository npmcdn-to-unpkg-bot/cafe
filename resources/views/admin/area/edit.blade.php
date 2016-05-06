@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1>Edit Area</h1>
    {!! Form::model($area, ['route' => ['admin.areas.update', $area->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate' => '']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '20')) }}
        @if ($errors->has('name'))
            <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
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

    <div class="form-action">
        {{ Form::submit('Update Gallery!', array('class' => 'btn btn-success btn-lg btn-block')) }}
    </div>
    {!! Form::close() !!}
@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection
