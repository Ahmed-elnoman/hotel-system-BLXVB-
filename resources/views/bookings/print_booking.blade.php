<html lang="rtl">
<style>
    @media print {
        #print_Button {
            display: none;
        }
    }

</style>
@extends('layouts.heade')
<title>Booking</title>

<body>
    <div class="g">

        @extends('layouts.sidebar')

        <!-- On tables -->
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand"> EMPLOYEES </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group form-search is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="card" id="print">
                            <div class="card-header card-header-text" data-background-color="purple">
                                <h4 class="card-title">
                                    <img src="{{ asset('imgs/black.png') }}" style="width:30px">
                                </h4>
                            </div>
                            <div class="card-header card-header-text" data-background-color="purple">
                                <h4 class="card-title">Booking in Blxvl Hotel</h4>
                            </div>
                            <div class="card-header card-header-text" data-background-color="purple">
                                <h4 class="card-title">
                                    <script>
                                        document.write(new Date())
                                    </script>
                                </h4>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group label-floating">
                                            <p class="form-control"> Guest Name :
                                                {{ $booking->getGuests->FallNameGuests() }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group label-floating">
                                            <p class="form-control"> Room Number :{{ $booking->room_id }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group label-floating">
                                            <p class="form-control"> Booking Date: {{ $booking->bookingDate }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group label-floating">
                                            <p class="form-control"> Arrive Date : {{ $booking->arrivelDate }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group label-floating">
                                            <p class="form-control">Departure Date : {{ $booking->departureDate }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group label-floating">
                                            <p class="form-control"> Number Children :{{ $booking->numbChildren }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group label-floating">
                                            <p class="form-control"> Special Req :{{ $booking->specialReq }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn btn-fill color-purple" id="print_Button"
                                        onclick="printDiv()">
                                        PRINT</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="pull-left">
                            <ul>
                                <li>
                                    <a href="#">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Blog
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <p class="copyright pull-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                        </p>
                    </div>
                </footer>
            </div>
        </div>




        @include('sweetalert::alert')
        @extends('layouts.footer')
        @extends('layouts.min-scripat')



        <script type="text/javascript">
            function printDiv() {
                var printContents = document.getElementById('print').innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
                location.reload();
            }
        </script>
</body>

</html>
