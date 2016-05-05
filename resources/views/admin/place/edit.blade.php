@extends('layouts.admin')

@section('style')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/admin/select2/select2.css') !!}
@endsection

@section('content')
    <h1>Admin Place edit</h1>
    {!! Form::model($place, ['route' => ['admin.places.update', $place->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate' => '']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('cover', 'Cover:') }}
        {{ Form::file('cover', array('class' => 'form-control')) }}
        @if ($errors->has('cover'))
            <span class="help-block">
                <strong>{{ $errors->first('cover') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('description', "Description:") }}
        {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        @if ($errors->has('description'))
            <span class="help-block">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('space_point', "Space Point:") }}
        {{ Form::number('space_point', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
        @if ($errors->has('space_point'))
            <span class="help-block">
                <strong>{{ $errors->first('space_point') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('service_point', "Service Point:") }}
        {{ Form::number('service_point', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
        @if ($errors->has('service_point'))
            <span class="help-block">
                <strong>{{ $errors->first('service_point') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('quality_point', "Quality Point:") }}
        {{ Form::number('quality_point', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
        @if ($errors->has('quality_point'))
            <span class="help-block">
                <strong>{{ $errors->first('quality_point') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('address_point', "Address Point:") }}
        {{ Form::number('address_point', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
        @if ($errors->has('address_point'))
            <span class="help-block">
                <strong>{{ $errors->first('address_point') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('price_point', "Price Point:") }}
        {{ Form::number('price_point', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
        @if ($errors->has('price_point'))
            <span class="help-block">
                <strong>{{ $errors->first('price_point') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('address', 'Address:') }}
        {{ Form::text('address', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('phone_number', 'Address:') }}
        {{ Form::text('phone_number', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        @if ($errors->has('phone_number'))
            <span class="help-block">
                <strong>{{ $errors->first('phone_number') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('open_time', 'Open time:') }}
        {{ Form::text('open_time', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        @if ($errors->has('open_time'))
            <span class="help-block">
                <strong>{{ $errors->first('open_time') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('close_time', 'Close time:') }}
        {{ Form::text('close_time', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
        @if ($errors->has('close_time'))
            <span class="help-block">
                <strong>{{ $errors->first('close_time') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('start_price', "Start Price:") }}
        {{ Form::number('start_price', null, array('class' => 'form-control', 'required' => '')) }}
        @if ($errors->has('start_price'))
            <span class="help-block">
                <strong>{{ $errors->first('start_price') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('end_price', "End Price:") }}
        {{ Form::number('end_price', null, array('class' => 'form-control', 'required' => '')) }}
        @if ($errors->has('end_price'))
            <span class="help-block">
                <strong>{{ $errors->first('end_price') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('longitude', "Longitude:") }}
        {{ Form::number('longitude', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
        @if ($errors->has('longitude'))
            <span class="help-block">
                <strong>{{ $errors->first('longitude') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('latitude', "Longitude:") }}
        {{ Form::number('latitude', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
        @if ($errors->has('latitude'))
            <span class="help-block">
                <strong>{{ $errors->first('latitude') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('character', "Character:") }}
        {{ Form::textarea('character', null, array('class' => 'form-control', 'required' => '')) }}
        @if ($errors->has('character'))
            <span class="help-block">
                <strong>{{ $errors->first('character') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('review', "Review:") }}
        {{ Form::textarea('review', null, array('class' => 'form-control', 'required' => '')) }}
        @if ($errors->has('review'))
            <span class="help-block">
                <strong>{{ $errors->first('review') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('galleries', "Galleries:") }}
        {{ Form::select('galleries[]', $galleriesMap, $selectedGalleriesMap, ['id' => 'galleries', 'multiple' => 'multiple']) }}
        @if ($errors->has('galleries'))
            <span class="help-block">
                <strong>{{ $errors->first('galleries') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-action">
        {{ Form::submit('Update Place', array('class' => 'btn btn-success btn-lg btn-block')) }}
    </div>
    {!! Form::close() !!}
@endsection

@section('script')
    {!! Html::script('/vendor/unisharp/laravel-ckeditor/ckeditor.js') !!}
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/admin/select2/select2.min.js') !!}
    <script>
        CKEDITOR.replace('character', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
        });

        CKEDITOR.replace('review', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
        });

        $('#galleries').select2();
    </script>
@endsection
