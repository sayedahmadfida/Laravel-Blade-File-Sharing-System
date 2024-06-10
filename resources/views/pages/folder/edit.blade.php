<div class="modal fade show" id="edit-folder-modal{{$folder->id}}"  aria-modal="true" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">New Folder</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{route('folder.update', $folder->id)}}" method="post" id="folder-edit-form">
        @csrf
        @method('PATCH')
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" value="{{$folder->folder_name}}" placeholder="Folder Name" name="folder_name" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <select name="privacy" class="form-control">
                  <option selected disabled>Select Privacy</option>
                  <option value="PRIVATE" {{$folder->privacy == 'PRIVATE' ? 'selected' : null}}>Private</option>
                  <option value="PUBLIC" {{$folder->privacy == 'PUBLIC' ? 'selected' : null}}>Public</option>
                </select>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>