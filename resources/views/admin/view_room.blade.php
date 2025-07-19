<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .table_deg {
            border: 2px solid white;
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg {
            background-color: skyblue;
            padding: 15px;
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
                            <th class="th_deg">Room Title</th>
                            <th class="th_deg">Description</th>
                            <th class="th_deg">Price</th>
                            <th class="th_deg">Wifi</th>
                            <th class="th_deg">Room Type</th>
                            <th class="th_deg">Image</th>
                        </tr>

                        <tr>
                            <td>dfasf</td>
                            <td>sdfsdf</td>
                            <td>fdg</td>
                            <td>zxcc</td>
                            <td>wqrew</td>
                            <td>zxcv</td>

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