@extends('layouts.admin')

@section('style')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/admin/select2/select2.css') !!}
    <style>
        body{
            background: #e5e6e6;
        }
    </style>
@endsection

@section('content')
    <div class="card">
        <div class="card-head style-primary">
            <header>Creat place - Fill out the form below to create place</header>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.places.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" data-parsley-validate class="form">
                {!! csrf_field() !!}

                <div class="form-group floating-label">
                    <input type="text" name="name" id="name" class="form-control" required maxlength="255" value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="cover" style="font-size: 13px; font-weight: 500;">Cover</label>
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

                <div class="form-group floating-label">
                    <textarea name="description" id="description" cols="50" rows="3" class="form-control" required maxlength="255" minlength="50">{{ old('description') }}</textarea>
                    <label for="description">Description</label>
                    @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <select name="galleries[]" id="galleries"  multiple="multiple" class="form-control">
                        @foreach($galleries as $gallery)
                            <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
                        @endforeach
                    </select>
                    <label for="galleries" style="font-size: 13px; font-weight: 500;">Galleries</label>
                    @if ($errors->has('galleries'))
                        <span class="help-block">
                            <strong>{{ $errors->first('galleries') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <select name="area_id" id="area_id" required class="form-control">
                        <option value></option>
                        @foreach($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->name }}</option>
                        @endforeach
                    </select>
                    <label for="area_id">Choose an area...</label>
                    @if ($errors->has('area_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('area_id') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="number" step="any" name="space_point" id="space_point" class="form-control" required value="{{ old('space_point') }}">
                    <label for="space_point">Space Point</label>
                    @if ($errors->has('space_point'))
                        <span class="help-block">
                            <strong>{{ $errors->first('space_point') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="number" step="any" name="service_point" id="service_point" class="form-control" required value="{{ old('service_point') }}">
                    <label for="service_point">Service Point</label>
                    @if ($errors->has('service_point'))
                        <span class="help-block">
                            <strong>{{ $errors->first('service_point') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="number" step="any" name="quality_point" id="quality_point" class="form-control" required value="{{ old('quality_point') }}">
                    <label for="quality_point">Quality Point</label>
                    @if ($errors->has('quality_point'))
                        <span class="help-block">
                            <strong>{{ $errors->first('quality_point') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="number" step="any" name="address_point" id="address_point" class="form-control" required value="{{ old('address_point') }}">
                    <label for="address_point">Address Point</label>
                    @if ($errors->has('address_point'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address_point') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="number" step="any" name="price_point" id="price_point" class="form-control" required value="{{ old('price_point') }}">
                    <label for="price_point">Price Point</label>
                    @if ($errors->has('price_point'))
                        <span class="help-block">
                    <strong>{{ $errors->first('price_point') }}</strong>
                </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="text" name="address" id="address" class="form-control" required maxlength="255" value="{{ old('address') }}">
                    <label for="address">Address</label>
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="text" name="phone_number" id="phone_number" class="form-control" required maxlength="255" value="{{ old('phone_number') }}">
                    <label for="phone_number">Phone number</label>
                    @if ($errors->has('phone_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="text" name="open_time" id="open_time" class="form-control" required maxlength="255" value="{{ old('open_time') }}">
                    <label for="open_time">Open time</label>
                    @if ($errors->has('open_time'))
                        <span class="help-block">
                            <strong>{{ $errors->first('open_time') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="text" name="close_time" id="close_time" class="form-control" required maxlength="255" value="{{ old('close_time') }}">
                    <label for="close_time">Close time</label>
                    @if ($errors->has('close_time'))
                        <span class="help-block">
                            <strong>{{ $errors->first('close_time') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="number" name="start_price" id="start_price" class="form-control" required value="{{ old('start_price') }}">
                    <label for="start_price">Start price</label>
                    @if ($errors->has('start_price'))
                        <span class="help-block">
                            <strong>{{ $errors->first('start_price') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="number" name="end_price" id="end_price" class="form-control" required value="{{ old('end_price') }}">
                    <label for="end_price">End price</label>
                    @if ($errors->has('end_price'))
                        <span class="help-block">
                            <strong>{{ $errors->first('end_price') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="number" step="any" name="longitude" id="longitude" class="form-control" required value="{{ old('longitude') }}">
                    <label for="longitude">Longitude</label>
                    @if ($errors->has('longitude'))
                        <span class="help-block">
                            <strong>{{ $errors->first('longitude') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group floating-label">
                    <input type="number" step="any" name="latitude" id="latitude" class="form-control" required value="{{ old('latitude') }}">
                    <label for="latitude">Latitude</label>
                    @if ($errors->has('latitude'))
                        <span class="help-block">
                            <strong>{{ $errors->first('latitude') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="character" style="font-size: 13px; font-weight: 500;">Character</label><br>
                    <textarea name="character" id="character" class="form-control" required>{{ old('character') }}</textarea>
                    @if ($errors->has('character'))
                        <span class="help-block">
                            <strong>{{ $errors->first('character') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="review" style="font-size: 13px; font-weight: 500;">Review</label><br>
                    <textarea name="review" id="review" class="form-control" required>{{ old('review') }}</textarea>
                    @if ($errors->has('review'))
                        <span class="help-block">
                            <strong>{{ $errors->first('review') }}</strong>
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