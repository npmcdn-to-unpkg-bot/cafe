@extends('layouts.admin')

@section('style')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/admin/select2/select2.css') !!}
@endsection

@section('content')
    <h1>Create new place</h1>
    <form action="{{ route('admin.places.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" data-parsley-validate>
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required maxlength="255" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="cover">Cover:</label>
            <input type="file" name="cover" id="cover" class="form-control" required >
            @if ($errors->has('cover'))
                <span class="help-block">
                    <strong>{{ $errors->first('cover') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" cols="50" rows="5" class="form-control" required maxlength="255">{{ old('description') }}</textarea>
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="space_point">Space Point:</label>
            <input type="number" step="any" name="space_point" id="space_point" class="form-control" required value="{{ old('space_point') }}">
            @if ($errors->has('space_point'))
                <span class="help-block">
                    <strong>{{ $errors->first('space_point') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="service_point">Service Point:</label>
            <input type="number" step="any" name="service_point" id="service_point" class="form-control" required value="{{ old('service_point') }}">
            @if ($errors->has('service_point'))
                <span class="help-block">
                    <strong>{{ $errors->first('service_point') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="quality_point">Quality Point:</label>
            <input type="number" step="any" name="quality_point" id="quality_point" class="form-control" required value="{{ old('quality_point') }}">
            @if ($errors->has('quality_point'))
                <span class="help-block">
                    <strong>{{ $errors->first('quality_point') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="address_point">Address Point:</label>
            <input type="number" step="any" name="address_point" id="address_point" class="form-control" required value="{{ old('address_point') }}">
            @if ($errors->has('address_point'))
                <span class="help-block">
                    <strong>{{ $errors->first('address_point') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="price_point">Price Point:</label>
            <input type="number" step="any" name="price_point" id="price_point" class="form-control" required value="{{ old('price_point') }}">
            @if ($errors->has('price_point'))
                <span class="help-block">
                    <strong>{{ $errors->first('price_point') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" class="form-control" required maxlength="255" value="{{ old('address') }}">
            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="phone_number">Phone number:</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" required maxlength="255" value="{{ old('phone_number') }}">
            @if ($errors->has('phone_number'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone_number') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="open_time">Open time:</label>
            <input type="text" name="open_time" id="open_time" class="form-control" required maxlength="255" value="{{ old('open_time') }}">
            @if ($errors->has('open_time'))
                <span class="help-block">
                    <strong>{{ $errors->first('open_time') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="close_time">Close time:</label>
            <input type="text" name="close_time" id="close_time" class="form-control" required maxlength="255" value="{{ old('close_time') }}">
            @if ($errors->has('close_time'))
                <span class="help-block">
                    <strong>{{ $errors->first('close_time') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="start_price">Start price:</label>
            <input type="number" name="start_price" id="start_price" class="form-control" required value="{{ old('start_price') }}">
            @if ($errors->has('start_price'))
                <span class="help-block">
                    <strong>{{ $errors->first('start_price') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="end_price">End price:</label>
            <input type="number" name="end_price" id="end_price" class="form-control" required value="{{ old('end_price') }}">
            @if ($errors->has('end_price'))
                <span class="help-block">
                    <strong>{{ $errors->first('end_price') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="longitude">Longitude:</label>
            <input type="number" step="any" name="longitude" id="longitude" class="form-control" required value="{{ old('longitude') }}">
            @if ($errors->has('longitude'))
                <span class="help-block">
                    <strong>{{ $errors->first('longitude') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="latitude">Latitude:</label>
            <input type="number" step="any" name="latitude" id="latitude" class="form-control" required value="{{ old('latitude') }}">
            @if ($errors->has('latitude'))
                <span class="help-block">
                    <strong>{{ $errors->first('latitude') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="character">Character:</label>
            <textarea name="character" id="character" class="form-control" required>{{ old('character') }}</textarea>
            @if ($errors->has('character'))
                <span class="help-block">
                    <strong>{{ $errors->first('character') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="review">Review:</label>
            <textarea name="review" id="review" class="form-control" required>{{ old('review') }}</textarea>
            @if ($errors->has('review'))
                <span class="help-block">
                    <strong>{{ $errors->first('review') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="galleries">Galleries:</label>
            <select name="galleries[]" id="galleries"  multiple="multiple">
                @foreach($galleries as $gallery)
                    <option value="{{ $gallery->id }}">{{ $gallery->name }}</option>
                @endforeach
            </select>
            @if ($errors->has('galleries'))
                <span class="help-block">
                    <strong>{{ $errors->first('galleries') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-action">
            <input type="submit" value="Create Place" class="btn btn-success btn-lg btn-block"/>
        </div>
    </form>
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