<!-- notice modal -->
<div class="modal fade" id="createDeparModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notice">
        <div class="modal-content">
            <div class="modal-body">
                <form id="form_unit" action="{{ route('departments.store') }}" method="Post">
                    @csrf
                    @method('POST')
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">person</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Add Room Forms</h4>

                        <div class="form-group label-floating">
                            <label class="control-label">
                                Department Name
                                <small>*</small>
                            </label>
                            <input class="form-control" name="department_name" type="text" autocomplete="off"
                                required="true" />
                            @error('department_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group label-floating mt-3">
                            <label class="control-label">
                                Department Description
                                <small>*</small>
                            </label>
                            <input class="form-control" name="department_description" id="registerPassword"
                                type="text" autocomplete="off" required="true" />
                            @error('department_description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group label-floating mt-3">
                            <label class="control-label">
                                Total Emplyoees
                                <small>*</small>
                            </label>
                            <input class="form-control" name="total_employees" id="registerPassword" type="number"
                                autocomplete="off" required="true" />
                            @error('total_employees')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
                            <button type="submit" class="btn btn- color-purple btn-fill">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->
