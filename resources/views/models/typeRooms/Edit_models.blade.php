<!-- notice modal -->
<div class="modal fade" id="EditRoomTypeModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-notice">
        <div class="modal-content">
            <div class="modal-body">
                @if (DB::table('room_types')->count() > 0)
                    <form id="form_unit" action="{{ route('roomType.update', $type->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Edit Room Forms</h4>

                            <div class="form-group label-floating">
                                <input class="form-control" name="RoomPrice" type="number"
                                    value="{{ $type->RoomPrice }}" required="true" autocomplete="off" />
                            </div>
                            <div class="form-group label-floating">
                                <select name="DefaultRoomPrice" id="" class="form-control">
                                    <option value="{{ $type->DefaultRoomPrice }}">{{ $type->DefaultRoomPrice }}</option>
                                    <option value="100">100$ -- 300$</option>
                                    <option value="400">400$ -- 500$</option>
                                    <option value="600">600$ -- 900$</option>
                                    <option value="1000">1000$ -- 1500$</option>
                                    <option value="2000">2000$</option>
                                </select>
                            </div>
                            <div class="form-group label-floating">
                                <label class="control-label">
                                    Room Image
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="RoomImage" type="file" required="true"
                                    autocomplete="off" value="{{ $type->RoomImage }}" />
                            </div>
                            <div class="form-group label-floating mt-3">
                                <input class="form-control" name="RoomDesc" id="registerPassword" type="text"
                                    required="true" autocomplete="off" value="{{ $type->RoomDesc }}" />
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
                                <button type="submit" class="btn btn- btn-fill color-purple">EDIT</button>
                            </div>
                        </div>
                    </form>
                @endif

            </div>
        </div>
    </div>
</div>
<!-- end notice modal -->
