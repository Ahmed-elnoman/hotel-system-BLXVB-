<div class="modal fade" id="softDeleteGuestModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-small ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
            </div>
            <div class="modal-body text-center">
                <h5>Are you sure to Archives this? </h5>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-success">
                    @if (DB::table('guests')->count() > 0)
                    <a href="{{ route('guests_destroy', $guest->id) }}" style="color:#fff">Yes</a>
                    @endif
                </button>
            </div>
        </div>
    </div>
</div>
