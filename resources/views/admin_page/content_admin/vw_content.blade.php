@extends('admin_page.side')
	@section('page')
	<div class="row">
	<div style="margin-left: 50px;" class="col-md-4"><a href="javascript:void(0)" data-toggle="modal" data-target="#Mymodal" class="btn btn-primary btn-fab"></a></div><br />
	<div class="col-md-12">
	 <div style="margin-top:30px; margin-left: 50px; margin-right: 50px;" class="panel panel-default">
  		<div class="panel-body">
    		 <h3>Content</h3>
       		 <div class="col-md-4">
       		 	 @foreach($contents as $row)
             <tr>
               <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="uploads/{{$row->img}}" alt="">
                </a>
            </div>
             </tr>
             @endforeach
       		 </div>
  		</div>
	  </div>
	  @yield('modal')
     </div>
	</div>


<div class="modal" id="Mymodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Post Content</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(['route'=>'content.store', 'files'=>true]) !!}
           		<div class="form-group">
           			{!! Form::text('img_name',null,['placeholder'=>'Image name','class'=>'form-control']) !!}
           		</div>
           		<div class="form-group">
           			{!! Form::label('image','Image')!!}
           			{!! Form::file('img') !!}
           		</div>
           		<div class="form-group">
           			{!! Form::textarea('content',null,['placeholder'=>'Silahkan isi content','class'=>'form-control']) !!}
           		</div>
           			{!! Form::submit('save',['class'=>'btn btn-success']) !!}
           		{!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
	<script type="text/javascript">
		$(function(){
			$.material.init();	
		});
	</script>
	@endsection