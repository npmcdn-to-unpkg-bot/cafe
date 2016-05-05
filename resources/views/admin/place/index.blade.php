@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1>All places</h1>

    <a href="{{ route('admin.places.create') }}">New Place</a>
    <table id="places-table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone number</th>
                <th>Space point</th>
                <th>Service point</th>
                <th>Quality point</th>
                <th>Address point</th>
                <th>Price point</th>
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
                <th>Space point</th>
                <th>Service point</th>
                <th>Quality point</th>
                <th>Address point</th>
                <th>Price point</th>
                <th>Open time</th>
                <th>Close time</th>
                <th>Start price</th>
                <th>End price</th>
                <th>Actions</th>
            </tr>
        </tfoot>

        <tbody>
            @foreach($places as $place)
                <tr>
                    <th><a href="{{ route('places.show', $place->id) }}" target="_blank">{{ $place->id }}</a></th>
                    <th><a href="{{ route('places.show', $place->id) }}" target="_blank">{{ $place->name }}</a></th>
                    <th>{{ $place->address }}</th>
                    <th>{{ $place->phone_number }}</th>
                    <th>{{ number_format($place->space_point, '1', '.', ',') }}</th>
                    <th>{{ number_format($place->service_point, '1', '.', ',') }}</th>
                    <th>{{ number_format($place->quality_point, '1', '.', ',') }}</th>
                    <th>{{ number_format($place->address_point, '1', '.', ',') }}</th>
                    <th>{{ number_format($place->price_point, '1', '.', ',') }}</th>
                    <th>{{ $place->open_time }}</th>
                    <th>{{ $place->close_time }}</th>
                    <th>{{ number_format($place->start_price, 0, '.', ',') }}</th>
                    <th>{{ number_format($place->end_price, 0, '.', ',') }}</th>
                    <th>
                        <div class="edit">
                            <a href="{{ route('admin.places.edit', $place->id) }}">Edit</a>
                        </div>
                        <div class="delete">
                            {!! Form::open(['route' => ['admin.places.destroy', $place->id], 'method' => 'DELETE']) !!}
                                {!! Form::submit('Delete', ['class' => '']) !!}
                            {!! Form::close() !!}
                        </div>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('script')
@endsection