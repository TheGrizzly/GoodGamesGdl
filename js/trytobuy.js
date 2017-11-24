var boton = document.getElementById("comprar");

var validar = function (e){
	var sesion = document.getElementById("sesion").innerHTML;
	if (sesion == "<span class=\"glyphicon glyphicon-user\"></span> Sign In"){
		alert("tiene que iniciar sesion antes de hacer su compra");
		e.preventDefault();
	}
}

boton.onclick = validar;