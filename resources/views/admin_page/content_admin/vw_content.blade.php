@extends('admin_page.side')
	@section('page')
  <style type="text/css">
    #panel-custom{
      margin-left: 50px;
      margin-right: 50px;
    }
    .grid-item{
      float: left;
      width: 200px;
      height: 180px;
    }
    #load { height: 100%; width: 100%; }
    #load {
    position    : fixed;
    z-index     : 99999; /* or higher if necessary */
    top         : 0;
    left        : 0;
    overflow    : hidden;
    text-indent : 100%;
    font-size   : 0;
    opacity     : 0.6;
    background  : #E0E0E0  url('css/load.gif') center no-repeat;
  }
    .grid-item--width2 { width: 160px; }
    .grid-item--height2 { height: 140px; }  
    
  </style>
  <div id="load">waitttt</div>
	<div class="row">

     @if ($errors->count() > 0)
      @foreach($errors->all() as $message)
      <div id="notif">
      <div id="panel-custom" class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Error</strong>
          {{$message}}
      </div>
      </div>
      @endforeach  
  @endif  

  <div class="col-xs-6 col-md-offset-10">
	 <a href="#" data-toggle="modal" data-target="#Mymodal" class="btn btn-raised btn-primary btn-lg"><i class="material-icons">add_box</i></a>
  </div>
    <div class="col-xs-12 col-sm-6  col-md-8">
    <div id="panel-custom" class="panel panel-default">
      <div  class="panel-body">
        <h3>Content</h3>
          
             <div class="grid">
               <div class="grid-sizer"></div>
               @foreach($contents as $row)         
               <div class="grid-item">
                  <a data-toggle="modal" data-target="#detailModal" class="detail" id="{{$row->id}}">
                    <img class="img-responsive img-thumbnail" src="uploads/{{$row->id}}/thumb_{{$row->img}}" alt="">
                  </a>
               </div>
               @endforeach  
             </div>
          
      </div><!-- close panel body-->
    </div><!--close panel pabel default -->
    </div><!-- close col-sm4 -->
  </div><!-- close row -->


<div class="modal" id="Mymodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Post Content</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(['route'=>'content.store', 'files'=>true]) !!}
           	<div class="form-group  label-floating">
              {!! Form::label('Image name',null,['class'=>'control-label','for'=>'img_name'])!!}
           		{!! Form::text('img_name',null,['class'=>'form-control','id'=>'img_name']) !!}
              <span class="help-block">Name image should not exceed 10 character</span>  
           	</div>
            <div class="form-group">
             {!! Form::file('img') !!}
           		<div class="input-group">
                {!! Form::text(null,null,['class'=>'form-control','readonly'=>'', 'placeholder'=>'File chooser']) !!}
                  <span class="input-group-btn input-group-sm">
                     <button type="button" class="btn btn-fab btn-fab-mini">
                      <i class="material-icons">attach_file</i>
                    </button>
                  </span>
              </div>
           	</div>
           		<div class="form-group">
           			{!! Form::textarea('content',null,['placeholder'=>'Silahkan isi content','class'=>'form-control']) !!}
           		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
  @include('admin_page/content_admin/vw_modal_detail')
  @include('admin_page/content_admin/js_content')
	
	@endsection