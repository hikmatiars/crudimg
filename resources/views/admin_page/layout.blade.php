<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pintereees</title>
        {{HTML::style('//fonts.googleapis.com/css?family=Roboto:300,400,500,700')}}
        {{HTML::style('//fonts.googleapis.com/icon?family=Material+Icons')}}
        {{HTML::style('assets/bootstrap/css/bootstrap.min.css')}}
        {{HTML::style('assets/font-awesome-4.3.0/css/font-awesome.min.css')}}
        {{HTML::style('assets/material-design/css/bootstrap-material-design.min.css')}}
        {{HTML::style('assets/material-design/css/ripples.min.css.map')}}
        
        {{HTML::script('assets/js/jQuery-2.1.4.min.js')}}
        {{HTML::script('assets/bootstrap/js/bootstrap.min.js')}}
        {{HTML::script('assets/material-design/js/material.js')}}
        {{HTML::script('assets/material-design/js/material.min.js')}}
        {{HTML::script('assets/material-design/js/material.min.js')}}
        {{HTML::script('assets/material-design/js/ripples.min.js')}}
        {{HTML::script('assets/masonry/dist/masonry.pkgd.min.js')}}
    </head>
	<body>
		@yield('content')
	</body>
    <footer>
        <div class="row">
            <div class="col-md-8">
                
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        $.material.init();
    </script>
</html>        