<html>
<head>
	<title> @section('title') @show</title>

	<!-- css -->
	<link rel="stylesheet" href="/styles.css">
	 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- fav-icon -->
	<link rel="icon" href="/logo.png">

	<!-- meta data -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contetnt="IE=edge">

	<!-- scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
@include('nav')

<div class="body">@section('content')
@show</div>

<footer class="blockquote-footer">©copyright {{date('Y')}} </footer>
</body>
</html>