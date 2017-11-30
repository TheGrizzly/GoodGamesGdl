<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GG Guadalajara</title>
	<link rel="shortcut icon" type="image/ico" href="index.ico">
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
  	.float-right{
  		float: right;
  	}
  	.product{
  		max-width: 100%;
  	}
  	.selled-by{
  		color: #337ab7;
  	}
  	.item-photo{
  		display: flex;
  		justify-content: center;
  		align-items: center;
  		border-right: 1px solid #f6f6f6;
  	}
  	.full-width{
  		width: 100%
  	}
  	.description{
  		width: 100%;
  		border-top: 1px solid silver;
  	}
  	.desc{
  		padding: 15px;
  	}
  	.no-disponible{
  		box-shadow: none;
		cursor: not-allowed;
		color: #474747 !important;
		border-color: #cacccc !important;
		background-image: none !important;
		background-color: #f1f2f2 !important;
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
		    <?php 

			error_reporting(0);
			session_start();
				if($_SESSION['activo']==""){
					echo"<li><a id='sesion' class='blanco' href='../paginas/sign.php'><span class='glyphicon glyphicon-user'></span> Sign In</a></li>";
		      		echo"<li><a class='blanco' href='../paginas/log.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
				}else{
					echo"<li><a id='sesion' class='blanco' href='../paginas/usuario.php'><span class='glyphicon glyphicon-user'></span>".$_SESSION['activo']."</a></li>";
					echo"<li><a class='blanco' href='../paginas/logout.php'><span class='glyphicon glyphicon-log-out'></span>  Log Out</a></li>";
				}
			?>
		      
		    </ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class='row'>
			<div class='container'>
				<div class='text-center'>
					<h1>Gracias por comprar el producto</h1>
				</div>
			</div>
		</div>
				<?php
					// error_reporting(0);
					$idp = $_GET["idp"];
					$idc = $_GET["idc"];
					$idv = $_GET["idv"];
					$pName = $_GET["pName"];
					$pPrice = $_GET["price"];
					$host="localhost";
					$user="root";
					$password="";
					$NombreBD="gg";
					
					$linck = mysqli_connect ($host,$user,$password) or die ("No se puede conectar a la base de datos");
					mysqli_select_db($linck,$NombreBD);
					mysqli_query($linck,"INSERT INTO `gg`.`venta` (`id_venta`, `id_producto`, `id_comprador`, `id_vendedor`, `precio`, `fecha`) VALUES (NULL, $idp, $idc, $idv, $pPrice, (SELECT NOW()) );");
					mysqli_close($linck);	
					
					$linck = mysqli_connect ($host,$user,$password) or die ("No se puede conectar a la base de datos");
					mysqli_select_db($linck,$NombreBD);
					mysqli_query($linck,"UPDATE `gg`.`producto` SET `disponible`='NO' WHERE `id_producto`='$idp';");
					mysqli_close($linck);
					
					/*$conn = new mysqli($host, $user, $password, $NombreBD);

					if ($conn->connect_error) {
    					die("Connection failed: " . $conn->connect_error);
					}

					$sql = "SELECT correo FROM usuario WHERE id_usuario=$idv";

					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
   						$row = $result->fetch_assoc();	
					}

					$correoVendedor = $row["correo"];

					$conn->close();

					$conn2 = new mysqli($host, $user, $password, $NombreBD);

					if ($conn2->connect_error) {
    					die("Connection failed: " . $conn2->connect_error);
					}

					$sql = "SELECT correo FROM usuario WHERE id_usuario=$idc";

					$res = $conn2->query($sql);

					if ($res->num_rows > 0) {
   						$row2 = $res->fetch_assoc();	
					}

					$correoComprador = $row2["correo"];

					$conn2->close();

					use PHPMailer\PHPMailer\PHPMailer;
					
					require '/vendor/autoload.php';

					$mail = new PHPMailer;

					$mail->isSMTP();

					$mail->Host = 'smtp.gmail.com';

					$mail->Port = 587;

					$mail->SMTPSecure = 'tls';

					$mail->SMTPAuth = true;

					$mail->Username = "noreplaygoodgamesgdl@gmail.com";

					$mail->Password = "GoodGamesGdl";

					$mail->setFrom('noreplaygoodgamesgdl@gmail.com','GoodGamesGdl');

					$mail->addReplyTo('supoortggg@gmail.com','GoodGamesGdl');

					$mail->addAddress($correoVendedor,'Vendedor');

					$mail->Subject = 'Compra del producto '.$pName;

					$mail->AltBody = 'Se a comprado el producto '.$pName.', favor de ponerse en contacto con el comprador';


					if(!$mail->send()){
						echo "Mailer Error: ".$mail->ErrorInfo;
					}else{
						echo "Correo mandado correctamente";
					}
					/*echo $subject;

					echo $message;


					$subject = "Confirmacion de compra del producto ".$pName;
					$message = "Gracias por comprar el producto ".$pName.", el vendedor se pondra en contacto con usted.";

					mail($correoComprador, $subject, $message);

					echo $subject;

					echo $message;
					*/
				?>
		
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