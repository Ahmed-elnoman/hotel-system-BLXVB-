<!-- notice modal -->
<div class="modal fade" id="editPositionModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notice">
        <div class="modal-content">
            <div class="modal-body">
                @if (DB::table('employees_statuses')->count() > 0)
                <form id="form_unit" action="{{ route('position.update' , $position->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">person</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Edit Position Forms</h4>

                        <div class="form-group label-floating">
                            <input class="form-control" name="position_name" type="text" autocomplete="off"
                                required="true" value="{{ $position->roleTitle }}" />
                            @error('department_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group label-floating mt-3">
                            <input class="form-control" name="position_description" id="registerPassword"
                                type="text" autocomplete="off" required="true" value="{{ $position->roleDecs }}"/>
                            @error('department_description')
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
                @endif
            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->
