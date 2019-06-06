@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table id="photosTable" class="display">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Photo</th>
                        <th>Title</th>
                        <th>Custom title</th>
                        <th>Description</th>
                        <th>Edit</th>

                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready( function () {
            $('#photosTable').DataTable({
                'processing': true,
                "serverSide": true,
                "search": false,
                "ajax": "{{ route('api.photos.index') }}",
                "columns": [
                    { "data": "id" },
                    { "data": "url" },
                    { "data": "title" },
                    { "data": "custom_title" },
                    { "data": "description" },
                    { "data": "id" }
                ],
                "columnDefs": [
                    { targets: 1,
                        render: function(data) {
                            return '<img src="'+data+'" width="64px">'
                        }
                    },
                    { targets: 5,
                        render: function(data) {
                            return '<a href="/photos/'+data+'/edit" id="edit-button">Edit</a>'
                        }
                    }
                ]

            });
        } );
    </script>
@endsection
