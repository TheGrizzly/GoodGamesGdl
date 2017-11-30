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
  <script type="text/javascript" src="../js/addproduct.js"></script>
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
		    <<ul class="nav navbar-nav navbar-right">
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
	<?php
	session_start();
	error_reporting(0);
		
		$host="localhost";
		$user="root";
		$password="";
		$NombreBD="gg";
		if(isset($_POST["registrar"])){
			$Des = $_POST["descripcion"];
			$Nombre = $_POST["nombre"];
			$Price = $_POST["price"];
			$Consola = $_POST["consola"];
			$Tipo = $_POST["type"];
			$id = $_SESSION['id_u'];
			$nombreArchivo=$_FILES['imagen']['name'];
			if($Consola =="Switch") $id_consola = 1; else
			if($Consola =="WiiU") $id_consola = 2; else
			if($Consola =="Wii") $id_consola = 3; else
			if($Consola =="Gamecube") $id_consola = 4; else
			if($Consola =="N64") $id_consola = 5; else
			if($Consola =="SNES") $id_consola = 6; else
			if($Consola =="NES") $id_consola = 7; else
			if($Consola =="New3DS") $id_consola = 8; else
			if($Consola =="3DS") $id_consola = 9; else
			if($Consola =="DS") $id_consola = 10; else
			if($Consola =="GBA") $id_consola = 11; else
			if($Consola =="GB") $id_consola = 12; else
			if($Consola =="PS4S") $id_consola = 13; else
			if($Consola =="PS3") $id_consola = 14; else
			if($Consola =="PS2") $id_consola = 15; else
			if($Consola =="PS") $id_consola = 16; else
			if($Consola =="PSVITA") $id_consola = 17; else
			if($Consola =="PSP") $id_consola = 18; else
			if($Consola =="XBOXONE") $id_consola = 19; else
			if($Consola =="XBOX360") $id_consola = 20; else
			if($Consola =="XBOX") $id_consola = 21; else
			if($Consola =="PC") $id_consola = 22; else
			if($Consola =="OTRO") $id_consola = 23; 
			///////////////////////////////////////////
			$target_path = "../img/productos/";
			$target_path = $target_path . basename( $nombreArchivo); 
			move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);
			
			
			$linck = mysqli_connect ($host,$user,$password) or die ("No se puede conectar a la base de datos");
			
			mysqli_select_db($linck,$NombreBD);
			mysqli_query($linck,"INSERT INTO `gg`.`producto` (`id_producto`, `id_consola`, `id_usuario`, `precio`, `descripcion`, `tipo`, `disponible`, `nombre`) VALUES ('', '$id_consola', '$id', '$Price', '$Des', '$Tipo', 'SI', '$Nombre');");
			
			$consulta=mysqli_query($linck,"SELECT * FROM `gg`.`producto`;");
			for($i=0;$i<mysqli_num_rows($consulta);$i++){
				$row = mysqli_fetch_array($consulta);
				$nombreImg = $row['id_producto'];
				//echo "nombre ".$nombreImg;
			}
		
			rename("../img/productos/".$nombreArchivo, "../img/productos/".$nombreImg.".jpg");
			header("Location:usuario.php");
		}
		mysqli_close($linck);
		
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 text-center">
				<h3>Nuevo producto</h3>
					<form action="addproduct.php" id="producto" enctype="multipart/form-data" method="POST">
						<div class="form-group">
						    <label for="text">Nombre del producto:</label>
						    <input type="text" class="form-control" id="nombre" name="nombre">
						</div>
						<div class="form-group">
						    <label for="sel1">Consola:</label>
							<select class="form-control" name="consola" id="consola">
								<option value="Switch">Switch</option>
								<option value="WiiU">WiiU</option>
								<option value="Wii">Wii</option>
								<option value="Gamecube">Gamecube</option>
								<option value="N64">N64</option>
								<option value="SNES">SNES</option>
								<option value="NES">NES</option>
								<option value="New3DS">New 3Ds</option>
								<option value="3DS">3Ds</option>
								<option value="DS">DS</option>
								<option value="GBA">GBA</option>
								<option value="GB">Game Boy</option>
								<option value="PS4">Play Station 4</option>
								<option value="PS3">Play Station 3</option>
								<option value="PS2">Play Station 2</option>
								<option value="PS">Play Station 1</option>
								<option value="PSVITA">PS Vita</option>
								<option value="PSP">PSP</option>
								<option value="XBOXONE">Xbox One</option>
								<option value="XBOX360">Xbox 360</option>
								<option value="XBOX">Xbox</option>
								<option value="PC">PC</option>
								<option value="Other">Otro</option>
							</select>
						</div>
						<div class="form-group">
						    <label for="text">Precio</label>
						    <input type="text" class="form-control" id="price" name="price" placeholder="Ej: 1000.00">
						</div>
						<div class="form-group">
						    <label for="sel1">Tipo de juego</label>
						    <select class="form-control" name="type" id="type">
						    	<option value="Nuevo">Nuevo</option>
						    	<option value="Usado">Usado</option>
						    </select>
						</div><br><br>
						<div class="form-group">
							<label for="file">Imagen del producto</label>
							<input  type="file" name="imagen" id="imagen" accept="imagen/.jpg">
						</div>
						<div class="form-group">
							<label for="file">Descripción del producto</label>
							<textarea class="form-control" name="descripcion" maxlength="200" id="descripcion"></textarea>
						</div>
						
					<input type="submit" class="btn btn-default" name="registrar" value="Registrar" >
				</form>
			</div>
		</div>
	</div><br>
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