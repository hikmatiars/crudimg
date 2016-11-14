@extends('admin_page/layout')
@section('content')
<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">Pintereees</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="javascript:void(0)">Active</a></li>
        <li><a href="javascript:void(0)">Home</a></li>
      </ul>
      
    </div>
  </div>
</div>
          @yield('page')
@endsection

