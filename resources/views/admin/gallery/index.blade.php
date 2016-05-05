@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1>All Gallery</h1>

    <a href="{{ route('admin.galleries.create') }}">New Gallery</a>

    <table id="galleries-table" class="display" cellspacing="0" width="100%">
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
            @foreach($galleries as $gallery)
                <tr>
                    <th><a href="{{ route('admin.galleries.show', $gallery->id) }}">{{ $gallery->id }}</a></th>
                    <th><a href="{{ route('admin.galleries.show', $gallery->id) }}">{{ $gallery->name }}</a></th>
                    <th>{{ $gallery->created_at }}</th>
                    <th>{{ $gallery->updated_at }}</th>
                    <th>{{ $gallery->places->count() }}</th>
                    <th>
                        <div class="edit">
                            <a href="{{ route('admin.galleries.edit', $gallery->id) }}">Edit</a>
                        </div>
                        <div class="delete">
                            {!! Form::open(['route' => ['admin.galleries.destroy', $gallery->id], 'method' => 'DELETE']) !!}
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
