<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
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

                    <table>
                        <tr>
                            <th>Room Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Wifi</th>
                            <th>Room Type</th>
                            <th>Image</th>
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