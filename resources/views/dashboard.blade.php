<html lang="rtl">


@extends('layouts.heade')
<title>Dashboard</title>

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
                        <a class="navbar-brand"> DASHBOARD </a>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="green">
                                    <i class="material-icons">language</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Top Guests Countrys</h4>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="table-responsive table-sales">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="assets/img/flags/US.png">
                                                                </div>
                                                            </td>
                                                            <td>USA</td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'USA')->count() }}
                                                            </td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'USA')->count() / 100}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="assets/img/flags/DE.png">
                                                                </div>
                                                            </td>
                                                            <td>Germany</td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'Germany')->count() }}
                                                            </td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'Germany')->count() / 100 }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="assets/img/flags/AU.png">
                                                                </div>
                                                            </td>
                                                            <td>Australia</td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'Australia')->count() }}
                                                            </td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'Australia')->count()  / 100}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="assets/img/flags/GB.png">
                                                                </div>
                                                            </td>
                                                            <td>United Kingdom</td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'United Kingdom')->count() }}
                                                            </td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'United Kingdom')->count() / 100}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="{{ asset('sudan.png') }}">
                                                                </div>
                                                            </td>
                                                            <td>Sudan</td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'sudan')->count() }}
                                                            </td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'Sudan')->count() / 100 }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="flag">
                                                                    <img src="assets/img/flags/BR.png">
                                                                </div>
                                                            </td>
                                                            <td>Brasil</td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'Brazil')->count() }}
                                                            </td>
                                                            <td class="text-right">
                                                                {{ DB::table('guests')->where('conutry' , 'Brazil')->count() / 100}}
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-md-offset-1">
                                            <div id="worldMap" class="map">
                                                <div class="card card-stats">
                                                    <div class="card-header" data-background-color="blue">
                                                        <i class="material-icons">equalizer</i>
                                                    </div>
                                                    <div class="card-content">
                                                        <p class="category">Total Visits (Guests)</p>
                                                        <h3 class="card-title">+{{ DB::table('guests')->count() }}</h3>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="stats">
                                                            <i class="material-icons">update</i> Just Updated
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">weekend</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Bookings</p>
                                    <h3 class="card-title">{{ DB::table('bookings')->count() }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> <a href="{{ url('bookings') }}">Tracked all bookings </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="rose">
                                    <i class="material-icons">apps</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Emplyoees</p>
                                    <h3 class="card-title">{{ DB::table('employees')->count() }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> <a href="{{ url('employees') }}">Tracked Emplyoees</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="fa fa-paypal" aria-hidden="true"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total <br> Bills</p>
                                    <h3 class="card-title">{{ DB::table('bills')->count() }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">date_range</i> <a href="{{ url('bills') }}">Tracked Bills</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-hotel"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category"> Total <br> Rooms</p>
                                    <h3 class="card-title">{{ DB::table('romms')->count() }}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">local_offer</i> <a href="{{ url('rooms') }}">Tracked Rooms</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">

                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Ahmed Etijani</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>




    @include('sweetalert::alert')

    {{-- @extends('layouts.footer') --}}

    @extends('layouts.min-scripat')
</body>

</html>
