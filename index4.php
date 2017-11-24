<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GG Guadalajara</title>
	<link rel="shortcut icon" type="image/ico" href="index.ico">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
<?php
	session_start();
?>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-8">
				<img src="img/logo.png" class="img-responsive" alt="Good Games Guadalajara" style="width:360px">
			</div>
		</div>
	</div>
	<nav class="navbar navbar-inverse barra">
		<div class="container-fluid">
		    <ul class="nav navbar-nav">
		      <li><a class="blanco" href="index4.php">Inicio</a></li>
		      <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggl blanco" href="#"">Nintendo<span class="caret"></span></a>
		      	<ul class="dropdown-menu">
		      		<li><a href="index4.php?consola=1">Switch</a></li>
		      		<li><a href="index4.php?consola=2">Wii U</a></li>
		      		<li><a href="index4.php?consola=3">Wii</a></li>
		      		<li><a href="index4.php?consola=4">Gamecube</a></li>
		      		<li><a href="index4.php?consola=5">N64</a></li>
		      		<li><a href="index4.php?consola=6">SNES</a></li>
		      		<li><a href="index4.php?consola=7">NES</a></li>
		      		<li><a href="index4.php?consola=8">New 3DS</a></li>
		      		<li><a href="index4.php?consola=9">3DS</a></li>
		      		<li><a href="index4.php?consola=10">DS</a></li>
		      		<li><a href="index4.php?consola=11">GBA</a></li>
		      		<li><a href="index4.php?consola=12">Game Boy</a></li>
		      	</ul>
		      </li>
		      <li class="dropdown"><a class="dropdown-toggle blanco" data-toggle="dropdown" href="#">Sony<span class="caret"></span></a>
		      	<ul class="dropdown-menu">
		      		<li><a href="index4.php?consola=13">PS4</a></li>
		      		<li><a href="index4.php?consola=14">PS3</a></li>
		      		<li><a href="index4.php?consola=15">PS2</a></li>
		      		<li><a href="index4.php?consola=16">PS1</a></li>
		      		<li><a href="index4.php?consola=17">PS VITA</a></li>
		      		<li><a href="index4.php?consola=18">PSP</a></li>
		      	</ul>
		      </li>
		      <li class="dropdown"><a class="dropdown-toggle blanco" data-toggle="dropdown" href="#">XBOX<span class="caret"></span></a>
		      	<ul class="dropdown-menu">
		      		<li><a href="index4.php?consola=19">XBOX ONE</a></li>
		      		<li><a href="index4.php?consola=20">XBOX 360</a></li>
		      		<li><a href="index4.php?consola=21">XBOX</a></li>
		      	</ul>
		      </li>
		      <li ><a class="blanco" href="index4.php?consola=22">PC</a></li>
		      <li ><a class="blanco" href="index4.php?consola=23">Other</a></li>
		    </ul>
		    <form class="navbar-form navbar-left" action="index4.php" method="get">
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
				if(!isset($_SESSION['activo'])){
					echo"<li><a class='blanco' href='paginas/sign.php'><span class='glyphicon glyphicon-user'></span> Sign In</a></li>";
		      		echo"<li><a class='blanco' href='paginas/log.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
				}else{
					echo"<li><a class='blanco' href='paginas/usuario.php'><span class='glyphicon glyphicon-user'></span>".$_SESSION['activo']."</a></li>";
					echo"<li><a class='blanco' href='paginas/logout.php'><span class='glyphicon glyphicon-log-out'></span>  Log Out</a></li>";
				}
			?>
		    </ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="well well-sm">
					<h1>Filtros de Búsqueda</h1>
					<form action='index4.php' method='get' id='filtro'>
						<div class="form-group">
							<h3>Estado:</h3>
							<div class="radio">
								<label><input type="radio" value="Nuevo" name="estado">Nuevo</label>
							</div>
							<div class="radio">
								<label><input type="radio" value="Usado" name="estado">Usado</label>
							</div>
							<h3>Precio:</h3>
							<div class="radio">
								<label><input type="radio" value="menor" name="precio">Menor a mayor</label>
							</div>
							<div class="radio">
								<label><input type="radio" value="mayor" name="precio">Mayor a menor</label>
							</div>
							<?php
								if(isset($_GET["consola"])){
									echo "<input type='hidden' name='consola' value='".$_GET["consola"]."'>";
								}
								if(isset($_GET["busqueda"])){
									echo "<input type='hidden' name='busqueda' value='".$_GET["busqueda"]."'>";
								}
							?>
							<button type="submit" class="btn btn-defaul enviar" value="buscar">Buscar</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-sm-9">
				<!--<div class='col-sm-3 col-xs-6'>
					<div class='panel panel-default producto'>
						<div class='panel-body'>
							<a href='#'><img src='img/img1.jpg' class='img-responsive' style='width:100%' alt='Image'></a>
							<h5><b>Uncharted 4</b></h5>
							<p>Costo: $899.99</p>
						</div>
					</div>
				</div>-->

				<?php
					error_reporting(0);
					$host="localhost";
					$user="root";
					$password="";
					$NombreBD="gg";
					$tampag = 8;
					$consolaurl = "";
					$estadourl = "";
					$preciourl = "";
					$busquedaurl = "";

					$conn = new mysqli($host, $user, $password, $NombreBD);
					if ($conn->connect_error) {
		    				die("Connection failed: " . $conn->connect_error);
					} 
					if(isset($_GET["consola"]))
					{
						$consola=$_GET["consola"];
						$consolaurl= "&consola=" . $consola;
						if(isset($_GET["estado"]) || isset($_GET["precio"])){
							$sql = "SELECT * FROM producto WHERE id_consola='$consola' AND disponible='SI' ";

							if(isset($_GET["estado"])){
								$estado = $_GET["estado"];
								$estadourl = "&estado=" . $estado;
								$sql = $sql . "AND tipo='$estado' ";
							}
							if(isset($_GET["precio"])){
								$precio = $_GET["precio"];
								$preciourl = "&precio=" . $precio;
								if($precio=="menor")
									$sql = $sql . "ORDER BY precio ASC ";
								else
									$sql = $sql . "ORDER BY precio DESC ";
							}
							else{
								$sql = $sql . "ORDER BY id_producto DESC ";
							}
						}
						else{
							$sql = "SELECT * FROM producto WHERE id_consola='$consola' AND disponible='SI' ORDER BY id_producto DESC ";
						}
					} 
					else{
						if(isset($_GET["busqueda"])){
							$busqueda = $_GET["busqueda"];
							$busquedaurl = "&busqueda=" . $busqueda;
							if(isset($_GET["estado"]) || isset($_GET["precio"])){
								$sql = "SELECT * FROM producto WHERE disponible='SI' AND nombre LIKE '%". $busqueda . "%' ";

								if(isset($_GET["estado"])){
									$estado = $_GET["estado"];
									$estadourl = "&estado=" . $estado;
									$sql = $sql . "AND tipo='$estado' ";
								}
								if(isset($_GET["precio"])){
									$precio = $_GET["precio"];
									$preciourl = "&precio=" . $precio;
									if($precio=="menor")
										$sql = $sql . "ORDER BY precio ASC ";
									else
										$sql = $sql . "ORDER BY precio DESC ";
								}
								else{
									$sql = $sql . "ORDER BY id_producto DESC ";
								}
							}
							else{
								$sql = "SELECT * FROM producto WHERE disponible='SI' AND nombre LIKE '%".$busqueda."%' ORDER BY id_producto DESC ";
							}
						}

						else{
							if(isset($_GET["estado"]) || isset($_GET["precio"])){
								$sql = "SELECT * FROM producto WHERE disponible='SI' ";

								if(isset($_GET["estado"])){
									$estado = $_GET["estado"];
									$estadourl = "&estado=" . $estado;
									$sql = $sql . "AND tipo='$estado' ";
								}
								if(isset($_GET["precio"])){
									$precio = $_GET["precio"];
									$preciourl = "&precio=" . $precio;
									if($precio=="menor")
										$sql = $sql . "ORDER BY precio ASC ";
									else
										$sql = $sql . "ORDER BY precio DESC ";
								}
								else{
									$sql = $sql . "ORDER BY id_producto DESC ";
								}
							}
							else{
								$sql = "SELECT * FROM producto WHERE disponible='SI' ORDER BY id_producto DESC ";
							}
						}
					}

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
						$sql = $sql . "LIMIT " . $liminf . ", " . $tampag;
						$result = $conn->query($sql);
						while($fila = $result->fetch_assoc()){
							echo "<div class='col-sm-3 col-xs-6'>";
							echo "<div class='panel panel-default producto'>";
							echo "<div class='panel-body'>";
							echo "<a href='paginas/product.php?id=".$fila["id_producto"]."'><img src='img/img".$fila["id_producto"].".jpg' class='img-responsive' style='width:100%' alt='Image'></a>";
							echo "<h5><b>".$fila["nombre"]."</b></h5>";
							echo "<p>Costo: $".$fila["precio"]." MXN</p>";
							echo "</div></div></div>";
						}
						echo "<div class='col-sm-12  text-center'>";
						if($actual>1){
							echo "<a href='".$_SERVER["PHP_SELF"]."?actual=".($actual-1).$consolaurl.$preciourl.$estadourl.$busquedaurl."'>Anterior  </a>";
						}
						for($i=1;$i<=$paginas;$i++){
							if($i==$actual){
								echo "<b><a href='".$_SERVER["PHP_SELF"]."?actual=".($i).$consolaurl.$preciourl.$estadourl.$busquedaurl."'>".$i." </a></b>";
							}
							else{
							echo "<a href='".$_SERVER["PHP_SELF"]."?actual=".($i).$consolaurl.$preciourl.$estadourl.$busquedaurl."'>".$i." </a>";
							}
						}
						if($actual<$paginas){
							echo "<a href='".$_SERVER["PHP_SELF"]."?actual=".($actual+1).$consolaurl.$preciourl.$estadourl.$busquedaurl."'> Siguiente</a>";
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