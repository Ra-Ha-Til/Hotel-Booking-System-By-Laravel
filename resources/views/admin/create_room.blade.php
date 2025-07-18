<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
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

                    <div class="div_center">

                        <h1 style="font-size: 30px; font-weight: bold;"> Add Rooms</h1>
                        <form>
                            <div>
                                <label>Room Title</label>
                                <input type="text" name="title">
                            </div>
                            <div>
                                <label>Description</label>

                                <textarea name="description"></textarea>
                            </div>
                            <div>
                                <label>Price</label>
                                <input type="number" name="price">
                            </div>
                            <div>
                                <label>Room Type</label>

                                <select name="type">

                                    <option selected value="regular"> Regular</option>
                                    <option value="premium"> Premium</option>
                                    <option value="deluxe"> Deluxe</option>

                                </select>
                            </div>

                            <div>
                                <label>Free Wifi</label>

                                <select name="type">

                                    <option selected value="yes"> Yes</option>
                                    <option value="no"> No</option>

                                </select>
                            </div>

                            <div>
                                <label>Upload Image</label>
                                <input type="file" name="image">
                            </div>

                            <div>
                                <input class="btn btn-primary" type="submit" value="Add Room">
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>


        <!-- footer-->
        @include('admin.footer')
        <!-- end footer-->
</body>

</html>