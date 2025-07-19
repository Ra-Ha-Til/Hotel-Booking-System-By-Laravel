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

        <!-- body-->
        @include('admin.body')
        <!-- end body-->

        <!-- footer-->
        @include('admin.footer')
        <!-- end footer-->
</body>

</html>