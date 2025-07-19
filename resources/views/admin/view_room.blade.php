<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style type="text/css">
        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        .table_deg {
            min-width: 1000px;
            border: 5px solid white;
            text-align: center;
        }

        .th_deg {
            background-color: skyblue;
            padding: 10px;
        }

        tr {
            border: 3px solid white;
        }

        td {
            padding: 12px;
            vertical-align: middle;
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        img {
            max-width: 50px;
            height: auto;
        }
    </style>
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">

        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">

                    <div class="table-wrapper">
                        <table class="table_deg">
                            <tr>
                                <th class="th_deg">Room Title</th>
                                <th class="th_deg">Description</th>
                                <th class="th_deg">Price</th>
                                <th class="th_deg">Wifi</th>
                                <th class="th_deg">Room Type</th>
                                <th class="th_deg">Image</th>
                                <th class="th_deg">Delete</th>
                            </tr>

                            @foreach($data as $data)
                                <tr>
                                    <td>{{ $data->room_title }}</td>
                                    <td title="{{ $data->description }}">
                                        {!! Str::limit($data->description, 100) !!}
                                    </td>
                                    <td>{{ $data->price }}$</td>
                                    <td>{{ $data->wifi }}</td>
                                    <td>{{ $data->room_type }}</td>
                                    <td>
                                        <img src="room/{{ $data->image }}" alt="Room Image">
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger"
                                            href="{{ url('room_delete', $data->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!-- footer-->
        @include('admin.footer')
        <!-- end footer-->
    </div>
</body>

</html>