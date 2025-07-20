<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- in this section css call from the home/css.blade.php -->
    @include('home.css')
</head>

<!-- .....................body .......................-->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->

    <!-- header -->
    <header>
        @include('home.header')
    </header>
    <!-- end header -->


    <!--  footer -->
    @include('home.footer')
    <!--end footer -->

</body>

</html>