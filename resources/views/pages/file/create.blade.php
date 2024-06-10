<div class="modal fade show" id="new-file-modal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Uplaod Files</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="#" class="dropzone" id="my-dropzone">
                @csrf
                <input type="hidden" name="folder_id" value="{{ $folder->id }}">
            </form>
            <div class="modal-footer ">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" onclick="test()">Save</button>
            </div>
            </form>
        </div>
    
    </div>
</div>
