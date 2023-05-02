<!-- notice modal -->
<div class="modal fade" id="searchBookingModels" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notice">
        <div class="modal-content">
            <div class="modal-body">
                <form id="form_unit" action="{{ url('searchBooking') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="fa fa-paypal" aria-hidden="true"></i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Search Booking</h4>
                        <div class="row form-group label-floating">
                            <div class="col-sm-9">
                                <div class="form-group label-floating">
                                    <label class="control-label"></label>
                                    <input class="form-control" type="text" name="bookingid" autocomplete="off" placeholder="add booking number"/>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn- color-purple btn-fill"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->
