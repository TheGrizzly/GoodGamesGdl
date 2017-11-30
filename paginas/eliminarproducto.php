<?php 
	error_reporting(0);
	$producto=$_GET['producto'];
	$linck = mysqli_connect ("localhost","root","") or die ("No se puede conectar");
	mysqli_select_db($linck,"gg");
	mysql_query("SET NAMES 'utf8'");
	mysqli_query($linck,"DELETE FROM `producto` WHERE `id_producto`='$producto';");
	unlink("../img/productos/".$producto.".jpg");
	mysqli_close($linck);
	header("Location:usuario.php"); 
?>