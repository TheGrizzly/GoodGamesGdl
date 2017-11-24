<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GG Guadalajara</title>
	<link rel="shortcut icon" type="image/ico" href="../index.ico">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-social.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/sign.js"></script>
  <style type="text/css">

  	.barra{
  		background-color: #1229A2;
  	}
  	.navbar .container-fluid .nav li .blanco{
  		color: white;
  	}
  	.navbar .container-fluid .nav li .blanco:hover{
  		color: black;
  	}
  	.well .container-fluid .col-sm-12 .blanco{
  		color: white;
  	}
  	.pie{
  		background-color: #1229A2;
  		color: white;
  	}
  	.enviar{
  		background-color: #1229A2;
  		color: white;
  	}
  	.enviar:hover{
  		color: black;
  	}
  	.producto{
  		border-color: white;
  		box-shadow: none;
  	}
  </style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8">
				<img src="../img/logo.png" class="img-responsive" alt="Good Games Guadalajara" style="width:360px">
			</div>
		</div>
	</div>
	<nav class="navbar navbar-inverse barra">
		<div class="container-fluid">
		    <ul class="nav navbar-nav">
		      <li><a class="blanco" href="../index4.php">Inicio</a></li>
		      <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggl blanco" href="#"">Nintendo<span class="caret"></span></a>
		      	<ul class="dropdown-menu">
		      		<li><a href="">Switch</a></li>
		      		<li><a href="">Wii U</a></li>
		      		<li><a href="">Wii</a></li>
		      		<li><a href="">Gamecube</a></li>
		      		<li><a href="">N64</a></li>
		      		<li><a href="">SNES</a></li>
		      		<li><a href="">NES</a></li>
		      		<li><a href="">New 3DS</a></li>
		      		<li><a href="">3DS</a></li>
		      		<li><a href="">DS</a></li>
		      		<li><a href="">GBA</a></li>
		      		<li><a href="">Game Boy</a></li>
		      	</ul>
		      </li>
		      <li class="dropdown"><a class="dropdown-toggle blanco" data-toggle="dropdown" href="#">Sony<span class="caret"></span></a>
		      	<ul class="dropdown-menu">
		      		<li><a href="">PS4</a></li>
		      		<li><a href="">PS3</a></li>
		      		<li><a href="">PS2</a></li>
		      		<li><a href="">PS1</a></li>
		      		<li><a href="">PS VITA</a></li>
		      		<li><a href="">PSP</a></li>
		      	</ul>
		      </li>
		      <li class="dropdown"><a class="dropdown-toggle blanco" data-toggle="dropdown" href="#">XBOX<span class="caret"></span></a>
		      	<ul class="dropdown-menu">
		      		<li><a href="">XBOX ONE</a></li>
		      		<li><a href="">XBOX 360</a></li>
		      		<li><a href="">XBOX</a></li>
		      	</ul>
		      </li>
		      <li ><a class="blanco" href="#">PC</a></li>
		      <li ><a class="blanco" href="#">Other</a></li>
		    </ul>
		    <form class="navbar-form navbar-left" action="">
		    	<div class="input-group">
		    		<input name="busqueda" type="text" class="form-control" placeholder="Buscar">
		    		<div class="input-group-btn">
		    			<button class="btn btn-default" type="submit">
		    				<i class="glyphicon glyphicon-search"></i>
		    			</button>
		    		</div>
		    	</div>
		    </form>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a class="blanco" href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
		      <li><a class="blanco" href="log.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		    </ul>
		</div>
	</nav>
	<?php
	error_reporting (0);
	$Nombre=$_GET["nombre"];
	$Apellido=$_GET["apellido"];
	$Telefono=$_GET["telefono"];
	$Email=$_GET["email"];
	$Pass=$_GET["contraseña"];
	////////////////////////////////////
	$host="localhost";
	$user="root";
	$password="";
	$linck = mysqli_connect ($host,$user,$password) or die ("No se puede conectar");
	$NombreBD="gg";
	if($Nombre!="" && $Apellido!= "" && $Telefono!="" && $Email!="" && $Pass!=""){
		mysqli_select_db($linck,$NombreBD);
		mysqli_query($linck,"INSERT INTO `gg`.`usuario` (`id_usuario`, `nombre`, `apellido`, `correo`, `telefono`, `pasword`, `tipo`, `profilepic`) VALUES (NULL, '$Nombre', '$Apellido', '$Email', '$Telefono', '$Pass', '1', 'img/default.jpg');");
		$reg=true;
	}else $reg=false;
	mysqli_close($linck);
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 text-center">
				<h3><?php  if($reg) echo "Registro realizado con exito\n"; else echo"Registro de Usuario"; ?></h3>
				<div class="col-sm-6 text-left">
					<form action="sign.php" id="registro">
						<div class="form-group">
						    <label for="text">Nombre:</label>
						    <input type="text" class="form-control" id="nombre" name="nombre">
						</div>
						<div class="form-group">
						    <label for="text">Apellido:</label>
						    <input type="text" class="form-control" id="apellido" name="apellido">
						</div>
						<div class="form-group">
						    <label for="text">Teléfono:</label>
						    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ej: (33)33333333  Sin espacios">
						</div>
				</div>
				<div class="col-sm-6 text-left">
						<div class="form-group">
						    <label for="text">Correo:</label>
						    <input type="text" class="form-control" id="email" name="email" placeholder="Ej: algo@abc.com">
						</div>
						<div class="form-group">
						    <label for="password">Contraseña:</label>
						    <input type="password" class="form-control" id="contraseña" name="contraseña">
						</div>
						<div class="form-group">
						    <label for="password">Confirmar Contraseña:</label>
						    <input type="password" class="form-control" id="emailc" name="emailc">
						</div>
				</div>
					<input type="submit" class="btn btn-default" name="registrar" value="Registrar" >
				</form><br>
				
			</div>
		</div>
	</div>
	<div class="well well-sm pie">
		<div class="container-fluid">
			<div class="col-sm-12 text-center">
				<h3>Conoce más de nosotros!</h3>
				<a class="btn btn-social-icon btn-facebook" href=""><span class="fa fa-facebook"></span></a>
				<a class="btn btn-social-icon btn-twitter" href=""><span class="fa fa-twitter"></span></a>
				<a class="btn btn-social-icon btn-instagram" href=""><span class="fa fa-instagram"></span></a>
			</div>
		</div>
	</div>
</body>
</html>