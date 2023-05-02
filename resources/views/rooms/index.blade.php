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
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <button class="btn btn- color-purple">
                                    <a href="{{ route('rooms.create') }}" style="color: #fff"><i
                                            class="material-icons">person add</i>
                                    </a>
                                </button>
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="purple">
                                        <i class="material-icons">assignment</i>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title">Rooms Table</h4>
                                        <div class="toolbar">
                                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                                        </div>
                                        <div class="material-datatables">
                                            <table id="datatables"
                                                class="table table-striped table-no-bordered table-hover"
                                                cellspacing="0" width="100%" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th>Room Number</th>
                                                        <th>If Room Uccupancy(status)</th>
                                                        <th class="text-right">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($rooms as $index => $room)
                                                        <tr>

                                                            <td class="text-center">{{ $index + 1 }}</td>
                                                            <td>{{ $room->roomType->id }}</td>
                                                            @if ($room->status == 1)
                                                                <td class="text-success">Booked by</td>
                                                            @else
                                                                <td class="text-danger">Availble</td>
                                                            @endif
                                                            <td class="td-actions text-right">
                                                                {{-- update --- edit  --}}
                                                                <button type="button" rel="tooltip"
                                                                    class="btn btn-success">
                                                                    <a href="{{ route('rooms.edit', $room->id) }}"
                                                                        style="color:#fff"><i
                                                                            class="material-icons">edit</i></a>
                                                                </button>
                                                                {{-- delete  --}}
                                                                <button class="btn btn-rose btn-fill"
                                                                    data-toggle="modal" data-target="#deleteRoommodel">
                                                                    <i class="material-icons">delete</i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <!-- end content-->
                                </div>
                                <!--  end card  -->
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
                                    Rooms
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Ahmed Eljani</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>




    @include('sweetalert::alert')
    @extends('models/rooms.deleteRoommodel')

    {{-- @extends('layouts.footer') --}}
    @extends('layouts.min-scripat')

</body>

</html>
