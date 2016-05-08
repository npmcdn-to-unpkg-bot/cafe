@extends('layouts.admin')

@section('style')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/admin/select2/select2.css') !!}
@endsection

@section('content')
    <div class="card">
        <div class="card-head style-primary">
            <header>Update place - Fill out the form below to update place</header>
        </div>
        <div class="card-body">
            {!! Form::model($place, ['route' => ['admin.places.update', $place->id], 'method' => 'PUT', 'files' => true, 'data-parsley-validate' => '', 'class' => 'form']) !!}
                <div class="form-group floating-label">
                    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
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
                            <img src="{{ $place->cover->url() }}" alt="" style="display: inline;">
                        </div>
                        {{ Form::file('cover', array('class' => '')) }}
                    </div>
                    @if ($errors->has('cover'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cover') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255', 'minlength' => '50', 'rows' => '3')) }}
                    {{ Form::label('description', "Description") }}
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::select('galleries[]', $galleriesMap, $selectedGalleriesMap, ['id' => 'galleries', 'multiple' => 'multiple', 'class' => 'form-control']) }}
                    {{ Form::label('galleries', "Galleries") }}
                    @if ($errors->has('galleries'))
                        <span class="help-block">
                            <strong>{{ $errors->first('galleries') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::select('area_id', $areasMap, $place->area_id, ['id' => 'area_id', 'placeholder' => 'Choose an area....', 'required' => '', 'class' => 'form-control']) }}
                    {{ Form::label('area_id', "Area") }}
                    @if ($errors->has('area_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('area_id') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::number('space_point', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
                    {{ Form::label('space_point', "Space Point") }}
                    @if ($errors->has('space_point'))
                        <span class="help-block">
                            <strong>{{ $errors->first('space_point') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::number('service_point', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
                    {{ Form::label('service_point', "Service Point") }}
                    @if ($errors->has('service_point'))
                        <span class="help-block">
                            <strong>{{ $errors->first('service_point') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::number('quality_point', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
                    {{ Form::label('quality_point', "Quality Point") }}
                    @if ($errors->has('quality_point'))
                        <span class="help-block">
                            <strong>{{ $errors->first('quality_point') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::number('address_point', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
                    {{ Form::label('address_point', "Address Point") }}
                    @if ($errors->has('address_point'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address_point') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::number('price_point', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
                    {{ Form::label('price_point', "Price Point") }}
                    @if ($errors->has('price_point'))
                        <span class="help-block">
                            <strong>{{ $errors->first('price_point') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::text('address', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    {{ Form::label('address', 'Address') }}
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::text('phone_number', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    {{ Form::label('phone_number', 'Address') }}
                    @if ($errors->has('phone_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::text('open_time', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    {{ Form::label('open_time', 'Open time') }}
                    @if ($errors->has('open_time'))
                        <span class="help-block">
                            <strong>{{ $errors->first('open_time') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::text('close_time', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                    {{ Form::label('close_time', 'Close time') }}
                    @if ($errors->has('close_time'))
                        <span class="help-block">
                            <strong>{{ $errors->first('close_time') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::number('start_price', null, array('class' => 'form-control', 'required' => '')) }}
                    {{ Form::label('start_price', "Start Price") }}
                    @if ($errors->has('start_price'))
                        <span class="help-block">
                            <strong>{{ $errors->first('start_price') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::number('end_price', null, array('class' => 'form-control', 'required' => '')) }}
                    {{ Form::label('end_price', "End Price") }}
                    @if ($errors->has('end_price'))
                        <span class="help-block">
                            <strong>{{ $errors->first('end_price') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::number('longitude', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
                    {{ Form::label('longitude', "Longitude") }}
                    @if ($errors->has('longitude'))
                        <span class="help-block">
                            <strong>{{ $errors->first('longitude') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::number('latitude', null, array('class' => 'form-control', 'required' => '', 'step' => 'any')) }}
                    {{ Form::label('latitude', "Longitude") }}
                    @if ($errors->has('latitude'))
                        <span class="help-block">
                            <strong>{{ $errors->first('latitude') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('character', "Character") }}
                    <br>
                    {{ Form::textarea('character', null, array('class' => 'form-control', 'required' => '')) }}
                    @if ($errors->has('character'))
                        <span class="help-block">
                            <strong>{{ $errors->first('character') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    {{ Form::label('review', "Review") }}
                    <br>
                    {{ Form::textarea('review', null, array('class' => 'form-control', 'required' => '')) }}
                    @if ($errors->has('review'))
                        <span class="help-block">
                            <strong>{{ $errors->first('review') }}</strong>
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
    {!! Html::script('/vendor/unisharp/laravel-ckeditor/ckeditor.js') !!}
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/admin/select2/select2.min.js') !!}
    <script>
        CKEDITOR.replace('character', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            height: '250'
        });

        CKEDITOR.replace('review', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            height: '250'
        });

        $('#galleries').select2();
    </script>
@endsection
