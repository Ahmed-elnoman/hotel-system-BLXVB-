<!-- notice modal -->
<div class="modal fade" id="editDeparModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notice">
        <div class="modal-content">
            <div class="modal-body">
                @if (DB::table('departments')->count() > 0)
                    <form id="form_unit" action="{{ route('departments.update', $department->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Edit Department Forms</h4>

                            <div class="form-group label-floating">
                                <label>
                                    Department Name
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="department_name" type="text" required="true"
                                    autocomplete="off" value="{{ $department->name_department }}" />
                            </div>
                            <div class="form-group label-floating mt-3">
                                <label>
                                    Department Description
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="department_description" id="registerPassword"
                                    type="text" required="true" autocomplete="off"
                                    value="{{ $department->description_de }}" />
                            </div>
                            <div class="form-group label-floating mt-3">
                                <label>
                                    Total Emplyoees
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="total_employees" id="registerPassword" type="number"
                                    required="true" autocomplete="off" value="{{ $department->total_conut }}" />
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
                @endif
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->
