<div class="modal" id="detailModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Detail image&nbsp;&nbsp;&nbsp;<strong><span id="show_title"></span></strong></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Uploaded</label>
          <span id="show_dateCreated"></span>
        </div>
        <div class="form-group label-floating">
          {!! Form::hidden(null,null,['id'=>'imgId']) !!}
          <label class="control-label" for="img_nameEdt"><span id="img_nameEdt"></span></label>
          {!! Form::text('img_name',null,['class'=>'form-control','id'=>'img_nameEdt']) !!}
        </div>
        <div class="form-group">
          <div class="input-group">
                {!! Form::text(null,null,['class'=>'form-control','readonly'=>'', 'placeholder'=>'File chooser']) !!}
                  <span class="input-group-btn input-group-sm">
                     <button type="button" class="btn btn-fab btn-fab-mini">
                      <i class="material-icons">attach_file</i>
                    </button>
                  </span>
              </div>
          <img id="show_img" src="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-raised btn-warning" data-dismiss="modal">Close</button>
        <button type="button" id="deleteBtn" class="btn btn-raised btn-danger" data-dismiss="modal">Delete</button>
        <button type="button" id="updateBtn" class="btn btn-raised btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
