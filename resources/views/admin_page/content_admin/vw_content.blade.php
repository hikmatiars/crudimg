@extends('admin_page.side')
	@section('page')
  <style type="text/css">
    #panel-custom{
      margin-top: 70px;
      margin-left: 50px;
      margin-right: 50px;
    }
    .grid-item{
      float: left;
      width: 200px;
      height: 180px;
      
    }

    .grid-item--width2 { width: 160px; }
    .grid-item--height2 { height: 140px; }  
    
  </style>
	<div class="row">
  <div class="col-xs-6 col-md-offset-10">
	 <a href="#" data-toggle="modal" data-target="#Mymodal" class="btn btn-primary btn-fab"></a>
  </div>
  
  @if ($errors->count() > 0)
      @foreach($errors->all() as $message)
      <div id="panel-custom" class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Error</strong>
          {{$message}}
      </div>
      @endforeach  
  @endif 


    <div id="panel-custom" class="panel panel-default">
      <div  class="panel-body">
        <h3>Content</h3>
          <!-- <div class="col-xs-12 col-sm-6 col-md-8"> -->
             <div class="grid">
               <div class="grid-sizer"></div>
               @foreach($contents as $row)         
               <div class="grid-item">
                  <img class="img-responsive img-thumbnail" src="uploads/{{$row->id}}/{{$row->img}}" alt="">
               </div>
               @endforeach  
             </div>
          </div><!-- close col-sm4 -->
        
      </div><!-- close panel body-->
    </div><!--close panel pabel default -->
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
           		<div class="form-group">
           			{!! Form::text('img_name',null,['placeholder'=>'Image name','class'=>'form-control']) !!}
           		</div>
           		<div class="form-group">
           			{!! Form::label('image','Image') !!}
           			{!! Form::file('img') !!}
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

	<script type="text/javascript">
		$(function(){
			$('.grid').masonry({
        columnWidth: 200,
        itemSelector: '.grid-item'
      });	
		});
	</script>
	@endsection