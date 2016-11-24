<div class="modal" id="detailModal">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <h4 class="modal-title">Detail image&nbsp;&nbsp;&nbsp;<strong><span id="show_title"></span></strong></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Uploaded</label>
          <span id="show_dateCreated"></span>
        </div>
        <div class="form-group label-floating">
          {!! Form::hidden(null,null,['id'=>'imgId']) !!}
          <label class="control-label" for="img_nameEdt"><span id="show_title"></span></label>
          {!! Form::text('img_name',null,['class'=>'form-control','id'=>'img_nameEdt']) !!}
           <span class="help-block">Update image name</span>  
        </div>
        <div class="form-group label-folating">
          <div class="input-group">
                {!! Form::text(null,null,['class'=>'form-control','readonly'=>'', 'id'=>'img', 'placeholder'=>'File chooser']) !!}
                 <span class="help-block">Update image</span>
                  <span class="input-group-btn input-group-sm">
                     <button type="button" class="btn btn-fab btn-fab-mini">
                      <i class="material-icons">attach_file</i>
                    </button>
                  </span>
              </div>
        </div>
        <div class="form-group">
           <img id="show_img" class="img-responsive" src="">
        </div>
        <div class="form-group">
          {!! Form::textarea('content',null,['class'=>'form-control','id'=>'content'])!!}
        </div>
      </div> <!-- modal body -->
         <input name="_token" type="hidden" value="{{ csrf_token() }}">
      <div class="modal-footer">
        <button type="button" id="deleteBtn" class="btn btn-raised btn-danger" data-dismiss="modal">Delete</button>
        <button type="button" id="updateBtn" class="btn btn-raised btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
