<html>
<head>
	<title> @section('title') @show</title>

	<!-- css -->
	<link rel="stylesheet" href="/styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- fav-icon -->
	<link rel="icon" href="/logo.png">

	<!-- meta data -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contetnt="IE=edge">

</head>
<body>
<nav class="nav">
	<a href="/"><img class="logo" src="/logo.png"></a>
	<ul>
		<a href="/"><li>HOME</li></a>
		<a href="/about"><li>ABOUT</li></a>
		<a href="/product"><li>PRODUCT</li></a>
		<a href="/login"><li>LOGIN</li></a>
	</ul>
</nav>

<div class="body">@section('content')
@show</div>

<footer>©copyright {{date('Y')}} </footer>
</body>
</html>