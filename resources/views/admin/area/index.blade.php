@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1>All Areas</h1>

    <a href="{{ route('admin.areas.create') }}">New Area</a>

    <table id="areas-table" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Created at</th>
            <th>Updated adt</th>
            <th>Number of places</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Created at</th>
            <th>Updated adt</th>
            <th>Number of places</th>
            <th>Actions</th>
        </tr>
        </tfoot>

        <tbody>
        @foreach($areas as $area)
            <tr>
                <th><a href="{{ route('admin.areas.show', $area->id) }}">{{ $area->id }}</a></th>
                <th><a href="{{ route('admin.areas.show', $area->id) }}">{{ $area->name }}</a></th>
                <th>{{ $area->created_at }}</th>
                <th>{{ $area->updated_at }}</th>
                <th>{{ $area->places->count() }}</th>
                <th>
                    <div class="edit">
                        <a href="{{ route('admin.areas.edit', $area->id) }}">Edit</a>
                    </div>
                    <div class="delete">
                        {!! Form::open(['route' => ['admin.areas.destroy', $area->id], 'method' => 'DELETE']) !!}
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
