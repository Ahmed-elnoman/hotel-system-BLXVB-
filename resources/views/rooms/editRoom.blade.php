<html lang="rtl">


@extends('layouts.heade')
<title>Rooms</title>

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
                        <a class="navbar-brand"> ROOMS </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
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
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="form_unit" action="{{ route('rooms.update' , $roomid->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="card-header card-header-icon" data-background-color="purple">
                                    <i class="fa fa-hotel"></i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Edit Room Forms</h4>

                                    <div class="row">
                                        <label class="col-sm-2 label-on-left">Room Number</label>
                                        <div class="col-sm-7">
                                            <div class="form-group label-floating">
                                                <select name="roomType" class="form-control">
                                                    @foreach ($roomTypes as $roomType)
                                                        <option value="{{ $roomType->id }}">{{ $roomType->id }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 label-on-left">Room status</label>
                                        <div class="col-sm-7">
                                            <div class="form-group label-floating">
                                                <select name="status" class="form-control">
                                                    <option value="1">Booked By</option>
                                                    <option value="0">Availble</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer text-right">
                                        <button type="submit" class="btn btn- color-purple btn-fill">Add</button>
                                    </div>
                                </div>
                            </form>

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
                                    ADD NEW ROOM
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="http://www.creative-tim.com/">Ahmed Elijani</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>




    @include('sweetalert::alert')
    {{-- @extends('models/rooms.create_model') --}}
    {{-- @extends('models/users.Edit_models')
    @extends('models/users.delete_model') --}}

    @extends('layouts.footer')

</body>

</html>
