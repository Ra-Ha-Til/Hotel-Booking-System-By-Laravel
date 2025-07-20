<!DOCTYPE html>
<html lang="en">

<head>
    <!-- in this section css call from the home/css.blade.php -->
    <base href="/public">
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
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>


            <div class="row">


                <div class="col-md-8">
                    <div id="serv_hover" class="room">
                        <div style="padding:20px" class="room_img">
                            <img style="height: 300px; width: 800px" src="/room/{{ $room->image }}" alt="#" />
                        </div>
                        <div class="bed_room">
                            <h2>{{ $room->room_title }}</h2>
                            <p style="padding: 12px">{{ $room->description }}</p>
                            <h4 style="padding: 12px">Free Wifi: {{ $room->wifi }}</h4>
                            <h4 style="padding: 12px">Room Type: {{ $room->room_type }}</h4>
                            <h3 style="padding: 12px">Price: {{ $room->price }}</h3>

                        </div>
                    </div>
                </div>

                <div class=" col-md-4">
                    <div>
                        <label>Name</label>
                        <input type="text" nme="name">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" nme="email">
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="number" nme="phone">
                    </div>
                    <div>
                        <label>Start Date</label>
                        <input type="date" nme="startDate">
                    </div>
                    <div>
                        <label>End Date</label>
                        <input type="date" nme="endDate">
                    </div>

                </div>

            </div>
        </div>
    </div>



    <!--  footer -->
    @include('home.footer')
    <!--end footer -->

</body>

</html>