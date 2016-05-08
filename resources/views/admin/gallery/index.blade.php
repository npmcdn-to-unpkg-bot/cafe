@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1 class="text-xxxl text-light">All Gallery</h1>
    <div class="table-responsive">
        <table id="galleries-table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="align-center">#</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th class="align-center">NO places</th>
                    <th class="no-sort">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($galleries as $gallery)
                    <tr>
                        <td><a href="{{ route('admin.galleries.show', $gallery->id) }}">{{ $gallery->id }}</a></td>
                        <td><a href="{{ route('admin.galleries.show', $gallery->id) }}">{{ $gallery->name }}</a></td>
                        <td>{{ $gallery->created_at }}</td>
                        <td>{{ $gallery->updated_at }}</td>
                        <td class="align-center">{{ $gallery->places->count() }}</td>
                        <td class="table-action">
                            <div class="edit">
                                <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="btn-circle"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="delete">
                                {!! Form::open(['route' => ['admin.galleries.destroy', $gallery->id], 'method' => 'DELETE']) !!}
                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn-circle']) !!}
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('admin.galleries.create') }}" class="btn ink-reaction btn-raised btn-primary">New Gallery <i class="md md-send"></i></a>
@endsection

@section('script')
    <script>
        $('#galleries-table').DataTable({
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
