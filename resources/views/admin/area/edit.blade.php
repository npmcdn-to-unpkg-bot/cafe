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
            <header>Update area - Fill out the form below to update area</header>
        </div>
        <div class="card-body">
            {!! Form::model($area, ['route' => ['admin.areas.update', $area->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate' => '', 'class' => 'form']) !!}
                <div class="form-group floating-label">
                    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '20')) }}
                    {{ Form::label('name', 'Name') }}
                    @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    {{ Form::label('cover', 'Cover - Click on image to choose new cover', ['style' => 'font-size: 13px; font-weight: 500;']) }}
                    <div id="dropzone">
                        <div class="dropzone-content">
                            <img src="{{ $area->cover->url() }}" alt="" style="display: inline;">
                        </div>
                        {{ Form::file('cover', array('class' => '')) }}
                    </div>
                    @if ($errors->has('cover'))
                        <span class="help-block">
                        <strong>{{ $errors->first('cover') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-action">
                    {{ Form::submit('Update', array('class' => 'btn ink-reaction btn-raised btn-lg btn-primary pull-right')) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection
