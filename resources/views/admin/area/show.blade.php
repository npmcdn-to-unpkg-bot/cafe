@extends('layouts.admin')

@section('style')
@endsection

@section('content')
    <h1 class="text-xxxl text-light">Area: {{ $area->name }}</h1>
    <div class="table-responsive">
        <table id="places-table" class="table table-striped table-hover">
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
                    <th class="no-sort">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($area->places as $place)
                    <tr>
                        <td><a href="{{ route('places.show', $place->id) }}" target="_blank">{{ $place->id }}</a></td>
                        <td><a href="{{ route('places.show', $place->id) }}" target="_blank">{{ $place->name }}</a></td>
                        <td>{{ $place->address }}</td>
                        <td>{{ $place->phone_number }}</td>
                        <td>{{ number_format(($place->space_point + $place->service_point + $place->quality_point + $place->address_point + $place->price_point)/5, 1, '.', ',') }}</td>
                        <td>{{ $place->open_time }}</td>
                        <td>{{ $place->close_time }}</td>
                        <td>{{ number_format($place->start_price, 0, '.', ',') }}</td>
                        <td>{{ number_format($place->end_price, 0, '.', ',') }}</td>
                        <td class="table-action">
                            <div class="edit">
                                <a href="{{ route('admin.places.edit', $place->id) }}" class="btn-circle"><i class="fa fa-pencil"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
