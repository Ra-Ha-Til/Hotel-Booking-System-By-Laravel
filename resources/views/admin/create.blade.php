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


                    <div>
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
                                <input type="number" name="price">
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