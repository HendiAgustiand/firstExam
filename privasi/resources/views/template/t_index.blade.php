<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatimble" content="IE=edge">
	<title>Laravel 5.5</title>
	{!! html::style('assets/css/bootstraps.min.js') !!}
</head>
<body>

	@yield('content')

	{!! html::script('assets/js/jquery.min.js') !!}
	{!! html::script('assets/js/bootstraps.min.js') !!}
</body>
</html>