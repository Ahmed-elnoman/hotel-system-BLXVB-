@extends('layouts.heade')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form id="form_unit" action="#" method="#">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="fa fa-hotel"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Black Bee HOTEL</h4>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group label-floating">
                                    <P>HI {{ $bookings->getGuests->FallNameGuests()  }} </P>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group label-floating">
                                   <p>Thank You for Booking For Black bee hotel</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group label-floating">
                                   <p>Your Room Number is {{ $bookings->room_id }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group label-floating">
                                   <p>And Your Booking Data is {{ $bookings->bookingDate }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group label-floating">
                                   <p>And Your Arrive Data is {{ $bookings->arrivelDate }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group label-floating">
                                   <p>And Your Departure Data is {{ $bookings->departureDate }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-right">
                            <img src="{{ asset('imas.black.png') }}" width="50px" alt="BLXVB">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
