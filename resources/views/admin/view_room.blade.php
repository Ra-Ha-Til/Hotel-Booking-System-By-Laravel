<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .table_deg {
            border: 2px solid white;
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

                    <table class="table_deg">
                        <tr>
                            <th>Room Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Wifi</th>
                            <th>Room Type</th>
                            <th>Image</th>
                        </tr>

                        <tr>
                            <td>dfasf</td>
                            <td>sdfsdf</td>
                            <td>fdg</td>
                            <td>zxcc</td>
                            <td>wqrew</td>
                            <td>zxcv</td>
                            <td>weyrtgyhry</td>
                        </tr>
                    </table>


                </div>
            </div>
        </div>






        <!-- footer-->
        @include('admin.footer')
        <!-- end footer-->
</body>

</html>