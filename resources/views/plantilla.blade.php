<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IUTIRLA</title>
    {!! Html::style('assets/css/bootstrap.min.united.css') !!}
    <link rel="icon" href="{!! asset('assets/images/logo.jpg') !!}"/>
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
     	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body background="/IUTIRLA/public/assets/images/fondo8.png" class="img-responsive" alt="Responsive image" align="middle" width="3.5%" height="3.5%">    
   <!--  <body background="http://localhost/IUTIRLA/public/assets/images/fondo8.png">     -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			    <span class="sr-only">Toggle Navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">IUTIRLA</a>
		    </div>
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		        <ul class="nav navbar-nav">
			    	<li><a href="{{route('home')}}">Home</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				    @if (Auth::guest())
				        <li><a href="{{route('auth/login')}}">Iniciar Sesión</a></li>
						<li><a href="{{route('auth/register')}}">Registro</a></li>
				    @else
		                <li>
		                    <a href="#">{{ Auth::user()->name }}</a>
		                </li>
		                <li><a href="{{route('auth/logout')}}">Logout</a></li>
		                
			        @endif
				</ul>
			</div>
		</div>
	</nav>
    <div class="container">
               @if (Session::has('errors'))
		    <div class="alert alert-warning" role="alert">
			<ul>
	            <strong>Oops! Something went wrong : </strong>
			    @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
    </div>
    @yield('content')
    <!-- Scripts -->
    {!! Html::script('assets/js/bootstrap.min.js') !!}   
    <a href="https://www.facebook.com/iutirla.web.ve/">
        <img src="/IUTIRLA/public/assets/images/facebook.png" class="img-responsive" alt="Responsive image" align="middle" width="3.5%" height="3.5%">
    </a>
    <a href="https://twitter.com/iutirla_web" >
        <img src="/IUTIRLA/public/assets/images/twitter.png" class="img-responsive" alt="Responsive image" align="middle" width="3.5%" height="3.5%">
    </a>
   <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2014</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>