@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1 class="text-xxxl text-light">All Post</h1>
    <div class="table-responsive">
        <table id="posts-table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Summary</th>
                    <th>Author</th>
                    <th>Likes</th>
                    <th>Comments</th>
                    <th>Updated at</th>
                    <th class="no-sort">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td><a href="{{ route('posts.show', $post->id) }}" target="_blank">{{ $post->id }}</a></td>
                        <td><a href="{{ route('posts.show', $post->id) }}" target="_blank">{{ $post->title }}</a></td>
                        <td>{{ substr($post->summary, 0, 30) }}{{ strlen($post->summary) > 30 ? "..." : "" }}</td>
                        <td><a href="{{ route('profile.show', $post->user->id) }}" target="_blank">{{ $post->user->name }}</a></td>
                        <td>{{ $post->likeCount }}</td>
                        <td>{{ $post->comments->count() }}</td>
                        <td>{{ $post->updated_at }}</td>
                        <td class="table-action">
                            <div class="edit">
                                <a href="{{ route('posts.edit', $post->id) }} " target="_blank" class="btn-circle"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="delete">
                                {!! Form::open(['route' => ['admin.posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn-circle']) !!}
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('posts.create') }}" target="_blank" class="btn ink-reaction btn-raised btn-primary">New post <i class="md md-send"></i></a>
@endsection

@section('script')
    <script>
        $('#posts-table').DataTable({
            columnDefs: [{ targets: 'no-sort', orderable: false }],
            "dom": 'lCfrtip',
            "order": [],
            "colVis": {
                "buttonText": "Columns",
                "overlayFade": 0,
                "align": "right"
            },
            "language": {
                "lengthMenu": '_MENU_ entries per page',
                "search": '<i class="fa fa-search"></i>',
                "paginate": {
                    "previous": '<i class="fa fa-angle-left"></i>',
                    "next": '<i class="fa fa-angle-right"></i>'
                }
            }
        });
    </script>
@endsection