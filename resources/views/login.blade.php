<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name=“viewport” content=“width=device-width”>
	<title></title>
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
</head>
<body>
	<div class="container">
		<div class="row" id="login">
			<div class="col-offset-6 col-xs-6">
				<label>Usuario:</label>
				<input id="user" class="form-control" type="text" placeholder="{{$usuario}}">
				<span class="fa fa-user fa-2x" aria-hidden="true"></span>
				<label>Password:</label>
				<input id="password" type="password" placeholder="{{$pass}}">
				<span class="fa fa-lock fa-2x" aria-hidden="true"></span>
				<button id="enviar" type='submit'>Login!</button>
			</div>
		</div>
	</div>	
</body>
</html>