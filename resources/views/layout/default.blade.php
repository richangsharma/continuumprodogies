<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->

{!! Html::style('css/bootstrap.css') !!}
<!-- Optional theme
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap-theme.css">
<link rel="stylesheet" href="./css/bootstrap-theme.min.css">-->


{!! Html::script('js/jquery.js') !!}

{!! Html::script('js/bootstrap.js') !!}

{!! Html::script('js/script.js') !!}
<!--<script type="text/javascript" src="./js/bootstrap.min.js"></script>-->

{!! Html::style('css/style.css') !!}
<title>ContinuumProdogies</title>
</head>
<body>
<div class="jumbotron">
<div class="container-fluid" >

	<div class="row">

		<div class="col-md-4"></div>
    <div class="col-md-4 navigation">
		<nav class="navbar navbar-default  navbar-light bg-faded ">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="glyphicon gglyphicon glyphicon-align-justify"></span>
        <!--<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>-->
      </button>
      <!--Brand name -->
      <a class="navbar-brand " href="#">ContinumProdigies</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="home active "><a class="glyphicon glyphicon-home"><span></span></a></li>
        <li class="notification"><a><span class="glyphicon glyphicon-flag "></span></a></li>
        <li class="message "><a><span class="glyphicon glyphicon-envelope"></span></a></li>
        <li class="dropdown account">

          <a href="#" class="dropdown-toggle icon-user glyphicon glyphicon-user " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">Tweaks</a></li>
            
          </ul>
        </li>
      </ul>
     </div><!-- /.navbar-collapse -->
 
</nav>
<img class="img-thumbnail img-responsive dp" src="{{asset('img/dp.png')}}" alt="X("  /> 

		</div>

	</div>
  </div>
</div>


@yield('content')

</body>
</html>