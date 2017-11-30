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
		$linck = mysqli_connect ($host,$user,$password) or die ("No se puede conectar a la base de datos");
		mysqli_select_db($linck,$NombreBD);

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
			$producto = "2";
			///////////////////////////////////////////
			
			
			
			
		mysqli_query($linck,"UPDATE `gg`.`producto` SET `id_consola`='$id_consola', `precio`='$Price', `descripcion`='$Des', `tipo`='$Tipo', `nombre`='$Nombre' WHERE `id_producto`='$producto';");
			
			if($nombreArchivo!="") {
							unlink("../img/productos/".$producto.".jpg");
							$target_path = "../img/productos/";
							$target_path = $target_path . basename( $nombreArchivo); 
							move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path);
							rename("../img/productos/".$nombreArchivo, "../img/productos/".$producto.".jpg");
						}
			//header("Location:usuario.php");
		}
		$producto = "2";
			$consulta=mysqli_query($linck,"SELECT * FROM `gg`.`producto` WHERE `id_producto`='$producto';");
			for($i=0;$i<mysqli_num_rows($consulta);$i++){
				$row = mysqli_fetch_array($consulta);
			}
		
		 ?>
	
	<div class='container'>
		<div class='row'>
			<div class='col-sm-3'></div>
			<div class='col-sm-6 text-center'>
				<h3>Nuevo producto</h3>
					<form action='editarproducto.php' id='producto' enctype='multipart/form-data' method='POST'>
						<div class='form-group'>
						    <label for='text'>Nombre del producto:</label>
						   <?php echo"<input type='text' class='form-control' id='nombre' name='nombre' value=".$row['nombre'].">"; ?>
						   
						</div>
						<div class="form-group">
						    <label for="sel1">Consola:</label>
							<?php echo"<select class='form-control' name='consola' id='consola'>";
								if($row['id_consola']=="1")echo"<option selected value='Switch'>Switch</option>";
								else echo"<option value='Switch'>Switch</option>";
								if($row['id_consola']=="2")echo"<option selected value='WiiU'>WiiU</option>";
								else echo"<option value='WiiU'>WiiU</option>";
								if($row['id_consola']=="3")echo"<option selected value='Wii'>Wii</option>";
								else echo"<option value='Wii'>Wii</option>";
								if($row['id_consola']=="4")echo"<option selected value='Gamecube'>Gamecube</option>";
								else echo"<option value='Gamecube'>Gamecube</option>";
								if($row['id_consola']=="5")echo"<option selected value='N64'>N64</option>";
								else echo"<option value='N64'>N64</option>";
								if($row['id_consola']=="6")echo"<option selected value='SNES'>SNES</option>";
								else echo"<option value='SNES'>SNES</option>";
								if($row['id_consola']=="7")echo"<option selected value='NES'>NES</option>";
								else echo"<option value='NES'>NES</option>";
								if($row['id_consola']=="8")echo"<option selected value='New3DS'>New 3Ds</option>";
								else echo"<option value='New3DS'>New 3Ds</option>";
								if($row['id_consola']=="9")echo"<option selected value='3DS'>3Ds</option>";
								else echo"<option value='3DS'>3Ds</option>";
								if($row['id_consola']=="10")echo"<option selected value='DS'>DS</option>";
								else echo"<option value='DS'>DS</option>";
								if($row['id_consola']=="11")echo"<option selected value='GBA'>GBA</option>";
								else echo"<option value='GBA'>GBA</option>";
								if($row['id_consola']=="12")echo"<option selected value='GB'>GB</option>";
								else echo"<option value='GB'>GB</option>";
								if($row['id_consola']=="13")echo"<option selected value='PS4'>Play Station 4</option>";
								else echo"<option value='PS4'>Play Station 4</option>";
								if($row['id_consola']=="14")echo"<option selected value='PS3'>Play Station 3</option>";
								else echo"<option value='PS3'>Play Station 3</option>";
								if($row['id_consola']=="15")echo"<option selected value='PS2'>Play Station 2</option>";
								else echo"<option value='PS2'>Play Station 2</option>";
								if($row['id_consola']=="16")echo"<option selected value='PS'>Play Station 1</option>";
								else echo"<option value='PS'>Play Station 1</option>";
								if($row['id_consola']=="17")echo"<option selected value='PSVITA'>PS Vita</option>";
								else echo"<option value='PSVITA'>PS Vita</option>";
								if($row['id_consola']=="18")echo"<option selected value='PSP'>PSP</option>";
								else echo"<option value='PSP'>PSP</option>";
								if($row['id_consola']=="19")echo"<option selected value='XBOXONE'>Xbox One</option>";
								else echo"<option value='XBOXONE'>Xbox One</option>";
								if($row['id_consola']=="20")echo"<option selected value='XBOX360'>Xbox 360</option>";
								else echo"<option value='XBOX360'>Xbox 360</option>";
								if($row['id_consola']=="21")echo"<option selected value='XBOX'>Xbox</option>";
								else echo"<option value='XBOX'>Xbox</option>";
								if($row['id_consola']=="22")echo"<option selected value='PC'>PC</option>";
								else echo"<option value='PC'>PC</option>";
								if($row['id_consola']=="23")echo"<option selected value='Other'>Otro</option>";
								else echo"<option value='Other'>Otro</option>";
							echo"</select>";
							  
							?>
						</div>
						<div class="form-group">
						    <label for="text">Precio</label>
						    <?php echo"<input type='text' class='form-control' id='price' name='price' placeholder='Ej: 1000.00' value=".$row['precio'].">"; ?>
						</div>
						<div class="form-group">
						    <label for="sel1">Tipo de juego</label>
						    <select class="form-control" name="type" id="type">
						    	<?php 
						    	if($row['tipo']=="Nuevo")echo"<option selected value='Nuevo'>Nuevo</option>";
								else echo"<option value='Nuevo'>Nuevo</option>";
								if($row['tipo']=="Usado")echo"<option selected value='Usado'>Usado</option>";
								else echo"<option value='Usado'>Usado</option>"; ?>
						    </select>
						</div><br><br>
						<div class="form-group">
							<label for="file">Imagen del producto</label><br>
							<?php echo"<img src='../img/productos/".$row['id_producto'].".jpg' id='img-producto' style='width:50%' alt='Image'>"; ?>
							<br><br><br><input  type="file" name="imagen" id="imagen" accept="imagen/.jpg">
						</div>
						<div class="form-group">
							<label for="file">Descripción del producto</label>
							<?php echo"<textarea class='form-control' name='descripcion' maxlength='200' id='descripcion'>".$row['descripcion']."</textarea>";
							 mysqli_close($linck); ?>
						</div>
						
					<input type="submit" class="btn btn-default" name="registrar" value="Guardar cambios" >
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