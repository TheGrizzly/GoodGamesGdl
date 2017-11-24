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
		      <li><a class="blanco" href="../index4.html">Inicio</a></li>
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
		    <?php 
			session_start();
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
									<li><a href="#">Configuracion de Usuario</a></li>
									<li><a href="#">Productos Comprados</a></li>
									<li><a href="#">Mis Productos</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-9">
				<?php
					//error_reporting(0);
					$host="localhost";
					$user="root";
					$password="";
					$NombreBD="gg";
					$tampag = 8;

					$conn = new mysqli($host, $user, $password, $NombreBD);
					if ($conn->connect_error) {
		    				die("Connection failed: " . $conn->connect_error);
					} 
					/*
					$sql = "SELECT * FROM producto";
					$res = $conn->query($sql);

					while($fila = $res->fetch_assoc()){
						echo "<p>".$fila["descripcion"]."</p>";
					}*/

					$
					$sql = "SELECT * FROM producto WHERE id_usuario=".$_SESSION['id_u']." ORDER BY id_producto DESC";
					

					if(isset($_GET["actual"])){
						$actual = $_GET["actual"];
					}
					else{
						$actual = 1;
					}
					$liminf = $tampag*($actual -1);
					$limsup = $tampag * $actual;
					
					$result = $conn->query($sql);
					if(($result->num_rows) > 0){
						$rows = $result->num_rows;
						$paginas = ceil($rows/$tampag);
						$result->close();
						$sql = "SELECT * FROM producto ORDER BY id_producto DESC LIMIT " . $liminf . ", " . $tampag;
						$result = $conn->query($sql);
						while($fila = $result->fetch_assoc()){
							echo "<div class='col-sm-3 col-xs-6'>";
							echo "<div class='panel panel-default producto'>";
							echo "<div class='panel-body'>";
							echo "<a href='#'><img src='img/img".$fila["id_producto"].".jpg' class='img-responsive' style='width:100%' alt='Image'></a>";
							echo "<h5><b>".$fila["descripcion"]."</b></h5>";
							echo "<p>Costo: $".$fila["precio"]." MXN</p>";
							echo "</div></div></div>";
						}
						echo "<div class='col-sm-12  text-center'>";
						if($actual>1){
							echo "<a href='".$_SERVER["PHP_SELF"]."?actual=".($actual-1)."'>Anterior  </a>";
						}
						for($i=1;$i<=$paginas;$i++){
							if($i==$actual){
								echo "<b><a href='".$_SERVER["PHP_SELF"]."?actual=".($i)."'>".$i." </a></b>";
							}
							else{
							echo "<a href='".$_SERVER["PHP_SELF"]."?actual=".($i)."'>".$i." </a>";
							}
						}
						if($actual<$paginas){
							echo "<a href='".$_SERVER["PHP_SELF"]."?actual=".($actual+1)."'> Siguiente</a>";
						}
						echo "</div>";
					}
					$conn->close();
				?>
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