<!-- notice modal -->
<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notice">
        <div class="modal-content">
            <div class="modal-body">
                <form id="form_unit" action="{{ route('users.update' , $user->id) }}" method="Post">
                    @csrf
                    @method('PUT')
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">person</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Edit User Forms</h4>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Email Address
                                <small>*</small>
                            </label>
                            <input class="form-control" name="email" type="email" required="true" autocomplete="off" placeholder="{{$user->email}}"/>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                User Name
                                <small>*</small>
                            </label>
                            <input class="form-control" name="name" type="text" required="true" autocomplete="off" placeholder="{{$user->name}}"/>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Password
                                <small>*</small>
                            </label>
                            <input class="form-control" name="password" id="registerPassword" type="password"
                            placeholder="{{ $user->password }}"
                                required="true" autocomplete="off"/>
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">
                                Confirm Password
                                <small>*</small>
                            </label>
                            <input class="form-control" name="password_confirmation" id="registerPasswordConfirmation"
                                type="password" required="true" equalTo="#registerPassword" autocomplete="off"/>
                        </div>
                        <div class="category form-category">
                            <small>*</small> Required fields
                        </div>
                        <div class="form-footer text-right">
                            <div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes"> Subscribe to newsletter
                                </label>
                            </div>
                            <button type="submit" class="btn btn-rose btn-fill">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->

