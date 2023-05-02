@extends('layouts.heade')

<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="http://www.creative-tim.com/" class="simple-text">
            BLACK BEE HOTEL
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="http://www.creative-tim.com/" class="simple-text">
            BLXVB
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('imgs/6.jpg') }}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        {{ Auth::User()->name }}
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('users.edit', Auth::User()->id) }}">My Profile</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-"
                                    style="margin-left:76px;background:#000">logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ url('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ url('users') }}">
                    <i class="material-icons">person</i>
                    <p>Users</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p>Emplyoees
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('employees') }}">All Emplyoee</a>
                        </li>
                        <li>
                            <a href="{{ url('position') }}">Position</a>
                        </li>
                        <li>
                            <a href="{{ url('showArchivesEmployees') }}">Archives</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">weekend</i>
                    <p>Bookings
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('bookings') }}">All Bookings</a>
                        </li>
                        <li>
                            <a href="forms/extended.html">Extended Forms</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#tablesExamples">
                    <i class="fa fa-suitcase"></i>
                    <p>Guests
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('guests') }}">All Guests</a>
                        </li>
                        <li>
                            <a href="{{ url('archiverGuest') }}">Archives Guest</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="fa fa-money"></i>
                    <p>Bills
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ url('bills') }}">All Bills</a>
                        </li>
                        <li>
                            <a href="{{ url('viewArchive') }}">Archives Bills</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ url('rooms') }}">
                    <i class="fa fa-hotel"></i>
                    <p>Rooms</p>
                </a>
            </li>
            <li>
                <a href="{{ url('roomType') }}">
                    <i class="material-icons">timeline</i>
                    <p>Type Of Rooms</p>
                </a>
            </li>
            <li class="">
                <a href="{{ url('departments') }}" class="color-purple">
                    <i class="material-icons">date_range</i>
                    <p>Departments</p>
                </a>
            </li>
        </ul>
    </div>
</div>
