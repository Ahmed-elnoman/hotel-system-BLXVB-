<div class="modal fade" id="unAcrhiveBillModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-small ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
            </div>
            <div class="modal-body text-center">
                <h5>Are you sure to UnArchives this? </h5>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-success">
                    @if (!$bill->id)
                    <a href="#" style="color:#fff">Yes</a>
                    @else
                    <a href="{{ url('unArchiveBill', $bill->id) }}" style="color:#fff">Yes</a>
                    @endif
                </button>
            </div>
        </div>
    </div>
</div>
