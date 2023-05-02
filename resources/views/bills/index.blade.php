<html lang="rtl">


@extends('layouts.heade')
<title>Bills</title>

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
                        <a class="navbar-brand"> BILLS </a>
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
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row" style="margin-top:-44px">
                        <div class="col-md-12">
                            <button class="btn btn- color-purple" data-toggle="modal"
                                data-target="#searchBookingModels" data-action="{{ route('bills.create') }}"><i class="fa fa-paypal" aria-hidden="true"></i>
                            </button>
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="purple">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title">Bills</h4>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                            cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Guest Name</th>
                                                    <th>Booking Number</th>
                                                    <th>Room Charge</th>
                                                    <th>Room Service</th>
                                                    <th>Mices Charge</th>
                                                    <th>Restaurant Charge</th>
                                                    <th>CheckOut</th>
                                                    <th>Payment</th>
                                                    <th>CreditCardNo</th>
                                                    <th>Total</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($bills as $index => $bill)
                                                    <tr>

                                                        <td class="text-center">{{ $index + 1 }}</td>
                                                        <td>{{ $bill->guests->FallNameGuests() }}</td>
                                                        <td>{{ $bill->booking_id }}</td>
                                                        <td>{{ $bill->roomCharge }}</td>
                                                        <td>{{ $bill->roomService }}</td>
                                                        <td>{{ $bill->micsCharge }}</td>
                                                        <td>{{ $bill->restaurantCharge }}</td>
                                                        <td>{{ $bill->ifLateCheckout }}</td>
                                                        <td>{{ $bill->paymentMode }}</td>
                                                        <td>{{ $bill->creditCardNo }}</td>
                                                        <td class="text-success">
                                                            {{ $bill->micsCharge + $bill->restaurantCharge + $bill->roomService + $bill->roomCharge }}
                                                        </td>
                                                        <td class="td-actions text-right">
                                                            {{-- update --- edit  --}}
                                                            {{-- <button type="button" class="btn btn-success">
                                                                <a href="{{ route('bills.edit', $booking->id) }}"
                                                                    style="color:#fff"><i
                                                                        class="material-icons">edit</i></a>
                                                            </button> --}}
                                                            {{-- delete  --}}
                                                            <button class="btn btn-danger btn-fill">
                                                                <a href="{{ url('printBooking', $bill->id) }}"
                                                                    style="color:#fff"><i
                                                                        class="material-icons">print</i></a>
                                                            </button>
                                                            <button class="btn btn-rose btn-fill" data-toggle="modal"
                                                                data-target="#softDeleteBillModel">
                                                                <i class="material-icons">archive</i>
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
    @extends('models/bills.searchBookingModels')
    @extends('models/bills.softDeleteBillModel')

    {{-- @extends('layouts.footer') --}}
    @extends('layouts.min-scripat')

</body>

</html>
