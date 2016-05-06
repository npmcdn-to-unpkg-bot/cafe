@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1>New Area</h1>
    <form action="{{ route('admin.areas.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" data-parsley-validate>
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" required maxlength="20" value="{{ old('name') }}">
            @if ($errors->has('name'))
                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="cover">Cover Image:</label>
            <input type="file" name="cover" id="cover" class="form-control" required >
            @if ($errors->has('cover'))
                <span class="help-block">
                            <strong>{{ $errors->first('cover') }}</strong>
                        </span>
            @endif
        </div>

        <div class="form-action">
            <input type="submit" value="Create Gallery!" class="btn btn-success btn-lg btn-block"/>
        </div>
    </form>
@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection
