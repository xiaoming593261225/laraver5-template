<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edgars Vylcāns</title>

	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/vylcans.css') }}" rel="stylesheet">
    @yield('stylesheets')
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400&subset=latin-ext,latin' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <div class="background">
    </div>
    @yield('login_form')
    <div class="container">
        @include('header')
        @yield('content')
    </div>
    <div class="thumbnail-container">
        <div class="container">
            @for($i = 0; $i < 18; $i++)
                <a href="#" class="thumbnail">
                    <img src="{{ asset('/images/gallery/portrait/' . $i . '.jpg') }}">
                </a>
            @endfor
        </div>
    </div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{{ asset('/js/vylcans.js') }}"></script>
	<script src="{{ asset('/js/imaginizer.js') }}"></script>
</body>
</html>
