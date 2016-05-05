@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1>All posts</h1>

    <a href="{{ route('posts.create') }}" target="_blank">New Post</a>
    <table id="posts-table" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Summary</th>
                <th>Author</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Summary</th>
                <th>Author</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
        </tfoot>

        <tbody>
            @foreach($posts as $post)
                <tr>
                    <th><a href="{{ route('posts.show', $post->id) }}" target="_blank">{{ $post->id }}</a></th>
                    <th><a href="{{ route('posts.show', $post->id) }}" target="_blank">{{ $post->title }}</a></th>
                    <th>{{ $post->summary }}</th>
                    <th><a href="{{ route('profile.show', $post->user->id) }}" target="_blank">{{ $post->user->name }}</a></th>
                    <th>{{ $post->updated_at }}</th>
                    <th>
                        <div class="edit">
                            <a href="{{ route('posts.edit', $post->id) }} " target="_blank">Edit</a>
                        </div>
                        <div class="delete">
                            {!! Form::open(['route' => ['admin.posts.destroy', $post->id], 'method' => 'DELETE']) !!}
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