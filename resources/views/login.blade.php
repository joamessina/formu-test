<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario de sesion</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/v4-shims.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/styles.css')}}">
</head>
<body>

<div id="form">
	<div id="content">
	 <center>
		<div class="icon">
			<i class="material-icons">account_circle</i>
			<h4>LOGIN IN</h4>
		</div>
	  </center>

		<form action="" method="POST" id="formu">
			
			<span><i class="fas fa-user"></i> <input type="text" name="user" placeholder="Usuario" required/></span><br>
			<input type="password" name="pass" placeholder="Password" required/>
			<center><button type="button" class="btn btn-primary" onclick="window.location='{{ route('formulario') }}'">Ir al formulario</button></center>

		</form>
		
	</div>
</div>





</body>
</html>