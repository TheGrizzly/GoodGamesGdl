<?php
	error_reporting(0);
	session_start();
	$id_p=$_GET["id_p"];
	$id_u = $_SESSION['id_u'];
	$comentario = $_GET["comentario"];

	echo $id_p;
	echo $id_u;
	echo $comentario;

	$host="localhost";
	$user="root";
	$password="";
	$NombreBD="gg";
	$conn = new mysqli($host, $user, $password, $NombreBD);
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO comentario(id_comentario,id_producto,id_usuario,fecha,comentario) values('','$id_p','$id_u',now(),'$comentario')";
	mysqli_query($conn,$sql);
	$conn->close();
	$location = "Location:product.php?id=".$id_p;
	header($location);
?>