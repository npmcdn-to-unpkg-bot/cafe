@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1 class="text-xxxl text-light">All Areas</h1>
    <div class="table-responsive">
        <table id="areas-table" class="table table-striped table-hover">
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
                @foreach($areas as $area)
                    <tr>
                        <td class="align-center"><a href="{{ route('admin.areas.show', $area->id) }}">{{ $area->id }}</a></td>
                        <td><a href="{{ route('admin.areas.show', $area->id) }}">{{ $area->name }}</a></td>
                        <td>{{ $area->created_at }}</td>
                        <td>{{ $area->updated_at }}</td>
                        <td class="align-center">{{ $area->places->count() }}</td>
                        <td class="table-action">
                            <div class="edit">
                                <a href="{{ route('admin.areas.edit', $area->id) }}" class="btn-circle"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="delete">
                                {!! Form::open(['route' => ['admin.areas.destroy', $area->id], 'method' => 'DELETE']) !!}
                                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn-circle']) !!}
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('admin.areas.create') }}" class="btn ink-reaction btn-raised btn-primary">New area <i class="md md-send"></i></a>
@endsection

@section('script')
    <script>
        $('#areas-table').DataTable({
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
