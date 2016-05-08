@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1 class="text-xxxl text-light">All Place</h1>
    <div class="table-responsive">
        <table id="places-table" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="no-sort">Address</th>
                    <th class="align-center">Space</th>
                    <th class="align-center">Service</th>
                    <th class="align-center">Quality</th>
                    <th class="align-center">Address</th>
                    <th class="align-center">Price</th>
                    <th>Open</th>
                    <th>Close</th>
                    <th class="align-center">S.Price</th>
                    <th class="align-center">E.Price</th>
                    <th class="no-sort">Actions</th>
                </tr>
            </thead>

            <tbody>
            @foreach($places as $place)
                <tr>
                    <td><a href="{{ route('places.show', $place->id) }}" target="_blank">{{ $place->name }}</a></td>
                    <td>{{ substr($place->address, 0, 30) }}{{ strlen($place->address) > 30 ? "..." : "" }}</td>
                    <td class="align-center">{{ number_format($place->space_point, '1', '.', ',') }}</td>
                    <td class="align-center">{{ number_format($place->service_point, '1', '.', ',') }}</td>
                    <td class="align-center">{{ number_format($place->quality_point, '1', '.', ',') }}</td>
                    <td class="align-center">{{ number_format($place->address_point, '1', '.', ',') }}</td>
                    <td class="align-center">{{ number_format($place->price_point, '1', '.', ',') }}</td>
                    <td>{{ $place->open_time }}</td>
                    <td>{{ $place->close_time }}</td>
                    <td class="align-center">{{ number_format($place->start_price, 0, '.', ',') }}</td>
                    <td class="align-center">{{ number_format($place->end_price, 0, '.', ',') }}</td>
                    <td class="table-action" width="9%">
                        <div class="edit">
                            <a href="{{ route('admin.places.edit', $place->id) }}" class="btn-circle"><i class="fa fa-pencil"></i></a>
                        </div>
                        <div class="delete">
                            {!! Form::open(['route' => ['admin.places.destroy', $place->id], 'method' => 'DELETE']) !!}
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn-circle']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('admin.places.create') }}" class="btn ink-reaction btn-raised btn-primary">New place <i class="md md-send"></i></a>
@endsection

@section('script')
    <script>
        $('#places-table').DataTable({
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