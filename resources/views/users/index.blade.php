<html lang="rtl">


@extends('layouts.heade')
<title>users</title>

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
                        <a class="navbar-brand"> USERS </a>
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
                            <button class="btn btn-rose" data-toggle="modal" data-target="#smallAlertModal">
                                <a href="#" style="color: #fff"><i
                                    class="material-icons">person add</i>
                                </a>
                            </button>
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">person</i>
                                </div>
                                <h4 class="card-title">Users Table</h4>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $index => $user)
                                                    <tr>

                                                        <td class="text-center">{{ $index + 1 }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->email }}</td>
                                                        <td class="td-actions text-right">
                                                            {{-- update --- edit  --}}
                                                            <button type="button" rel="tooltip"
                                                                class="btn btn-success" data-toggle="modal"
                                                                data-action="{{ route('users.edit', $user->id) }}"
                                                                data-name="{{ $user->name }}"
                                                                data-phone="{{ $user->email }}"
                                                                data-trucks="{{ $user->password }}"
                                                                data-target="#noticeModal">
                                                                <a href="#" style="color:#fff"><i
                                                                        class="material-icons">edit</i></a>
                                                            </button>
                                                            {{-- delete  --}}
                                                            <button class="btn btn-rose btn-fill"
                                                            data-toggle="modal" data-target="#deleteModel">
                                                            <i class="material-icons">delete</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
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
    @extends('models/users.create_model')
    @extends('models/users.Edit_models')
    @extends('models/users.delete_model')

    {{-- @extends('layouts.footer') --}}

    @extends('layouts.min-scripat')
</body>

</html>
