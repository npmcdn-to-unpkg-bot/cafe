@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1>Area: {{ $area->name }}</h1>

    <table id="places-table" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone number</th>
            <th>Point</th>
            <th>Open time</th>
            <th>Close time</th>
            <th>Start price</th>
            <th>End price</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone number</th>
            <th>Point</th>
            <th>Open time</th>
            <th>Close time</th>
            <th>Start price</th>
            <th>End price</th>
            <th>Actions</th>
        </tr>
        </tfoot>

        <tbody>
        @foreach($area->places as $place)
            <tr>
                <th><a href="{{ route('places.show', $place->id) }}">{{ $place->id }}</a></th>
                <th><a href="{{ route('places.show', $place->id) }}">{{ $place->name }}</a></th>
                <th>{{ $place->address }}</th>
                <th>{{ $place->phone_number }}</th>
                <th>{{ number_format(($place->space_point + $place->service_point + $place->quality_point + $place->address_point + $place->price_point)/5, 1, '.', ',') }}</th>
                <th>{{ $place->price_point }}</th>
                <th>{{ $place->open_time }}</th>
                <th>{{ $place->close_time }}</th>
                <th>{{ number_format($place->start_price, 0, '.', ',') }}</th>
                <th>{{ number_format($place->end_price, 0, '.', ',') }}</th>
                <th>
                    <div class="edit">
                        <a href="{{ route('admin.places.edit', $place->id) }}">Edit</a>
                    </div>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection
