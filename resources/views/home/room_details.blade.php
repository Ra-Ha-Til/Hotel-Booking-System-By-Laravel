<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }

        input {
            width: 100%;
        }
    </style>
</head>

<body class="main-layout">
    <!-- Loader -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>

    <!-- Header -->
    <header>
        @include('home.header')
    </header>

    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Room Details -->
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

                <!-- Booking Form -->
                <div class="col-md-4">
                    <h1 style="font-size: 40px !important">Book Room</h1>


                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>

                    @endif

                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <li style="color:red">{{ $error }}</li>
                        @endforeach
                    @endif

                    <form action="{{ url('add_booking', $room->id) }}" method="POST">
                        @csrf
                        <div>
                            <label>Name</label>
                            <input type="text" name="name" required @if(Auth::id()) value="{{ Auth::user()->name }}"
                            @endif>
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" required @if(Auth::id()) value="{{ Auth::user()->email }}"
                            @endif>
                        </div>
                        <div>
                            <label>Phone</label>
                            <input type="number" name="phone" required @if(Auth::id()) value="{{ Auth::user()->phone }}"
                            @endif>
                        </div>
                        <div>
                            <label>Start Date</label>
                            <input type="date" name="start_date" id="start_date" required>
                        </div>
                        <div>
                            <label>End Date</label>
                            <input type="date" name="end_date" id="end_date">
                        </div>

                        <div style="padding-top: 20px">
                            <input type="submit" class="btn btn-primary" value="Book Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('home.footer')

    <script type="text/javascript">
        $(function () {
            var dtToday = new Date();
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();

            if (month < 10) month = '0' + month;
            if (day < 10) day = '0' + day;

            var today = `${year}-${month}-${day}`;
            $('#start_date').attr('min', today);
            $('#end_date').attr('min', today);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>