{{-- @component('mail::message') --}}
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
                                    <P>HI {{ $guests->FallNameGuests() }} </P>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group label-floating">
                                   <p>Thank You for Registering For Black bee hotel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
BLXVB
{{-- @endcomponent --}}

