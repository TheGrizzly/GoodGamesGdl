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
  <style type="text/css">
  	.barra{
  		background-color: #1229A2;
  	}
  	.navbar .container-fluid .nav li .blanco{
  		color: white;../
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
	<?php session_start(); ?>
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
		      		<li><a href="../index4.php?consola=1">Switch</a></li>
		      		<li><a href="../index4.php?consola=2">Wii U</a></li>
		      		<li><a href="../index4.php?consola=3">Wii</a></li>
		      		<li><a href="../index4.php?consola=4">Gamecube</a></li>
		      		<li><a href="../index4.php?consola=5">N64</a></li>
		      		<li><a href="../index4.php?consola=6">SNES</a></li>
		      		<li><a href="../index4.php?consola=7">NES</a></li>
		      		<li><a href="../index4.php?consola=8">New 3DS</a></li>
		      		<li><a href="../index4.php?consola=9">3DS</a></li>
		      		<li><a href="../index4.php?consola=10">DS</a></li>
		      		<li><a href="../index4.php?consola=11">GBA</a></li>
		      		<li><a href="../index4.php?consola=12">Game Boy</a></li>
		      	</ul>
		      </li>
		      <li class="dropdown"><a class="dropdown-toggle blanco" data-toggle="dropdown" href="#">Sony<span class="caret"></span></a>
		      	<ul class="dropdown-menu">
		      		<li><a href="../index4.php?consola=13">PS4</a></li>
		      		<li><a href="../index4.php?consola=14">PS3</a></li>
		      		<li><a href="../index4.php?consola=15">PS2</a></li>
		      		<li><a href="../index4.php?consola=16">PS1</a></li>
		      		<li><a href="../index4.php?consola=17">PS VITA</a></li>
		      		<li><a href="../index4.php?consola=18">PSP</a></li>
		      	</ul>
		      </li>
		      <li class="dropdown"><a class="dropdown-toggle blanco" data-toggle="dropdown" href="#">XBOX<span class="caret"></span></a>
		      	<ul class="dropdown-menu">
		      		<li><a href="../index4.php?consola=19">XBOX ONE</a></li>
		      		<li><a href="../index4.php?consola=20">XBOX 360</a></li>
		      		<li><a href="../index4.php?consola=21">XBOX</a></li>
		      	</ul>
		      </li>
		      <li ><a class="blanco" href="../index4.php?consola=22">PC</a></li>
		      <li ><a class="blanco" href="../index4.php?consola=23">Other</a></li>
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
		    <?php 
			error_reporting(0);
				if($_SESSION['activo']==""){
					echo"<li><a class='blanco' href='../paginas/sign.php'><span class='glyphicon glyphicon-user'></span> Sign In</a></li>";
		      		echo"<li><a class='blanco' href='../paginas/log.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
				}else{
					echo"<li><a class='blanco' href='../paginas/usuario.php'><span class='glyphicon glyphicon-user'></span>".$_SESSION['activo']."</a></li>";
					echo"<li><a class='blanco' href='../paginas/logout.php'><span class='glyphicon glyphicon-log-out'></span>  Log Out</a></li>";
				}
			?>
		      
		    </ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="well well-sm">
					<h1>Configuraciones:</h1>
					<div class="sidebar-nav">
						<div class="navbar navbar-default">
							<div class="navbar-collapse collapse sidebar-nav-collapse">
								<ul class="nav navbar-nav">
									<li><a href="addproduct.php">Añadir Producto</a></li>
									<li><a href="editarcuenta.php">Configuracion de Usuario</a></li>
									<li><a href="historial.php">Productos Comprados</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-9">
				<h2>Compras</h2>
				<table class="table table-striped">
					<tr>
						<th>Vendedor</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Fecha</th>
					</tr>
				<?php
					session_start();
					error_reporting(0);
					$host="localhost";
					$user="root";
					$password="";
					$NombreBD="gg";
					$conn = new mysqli($host, $user, $password, $NombreBD);
					if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
					} 
					$sql = "SELECT p.nombre as Producto, u.nombre as Vendedor, p.precio as Precio, v.fecha as Fecha from producto as p, usuario as u, venta as v where u.id_usuario=v.id_vendedor and p.id_usuario=v.id_comprador and v.id_comprador=".$_SESSION["id_u"];
					$result = $conn->query($sql);
					if(($result->num_rows) > 0){
						while($fila = $result->fetch_assoc()){
							echo "<tr>
									<td>".$fila["Vendedor"]."</td>
									<td>".$fila["Producto"]."</td>
									<td>$".$fila["Precio"]." MXN</td>
									<td>".$fila["Fecha"]."</td>
								</tr>";	
						}
					}
					$conn->close();
				?>
				</table>
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