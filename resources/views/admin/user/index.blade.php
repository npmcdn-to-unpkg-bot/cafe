@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1>All User</h1>

    <table id="users-table" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Is admin</th>
            <th>Number of post</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Is admin</th>
            <th>Number of post</th>
            <th>Actions</th>
        </tr>
        </tfoot>

        <tbody>
        @foreach($users as $user)
            <tr>
                <th><a href="{{ route('profile.show', $user->id) }}" target="_blank">{{ $user->id }}</a></th>
                <th><a href="{{ route('profile.show', $user->id) }}" target="_blank">{{ $user->name }}</a></th>
                <th>{{ $user->email }}</th>
                <th>{{ $user->is_admin }}</th>
                <th>{{ $user->posts->count() }}</th>
                <th>
                    <div class="delete">
                        {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'DELETE']) !!}
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
