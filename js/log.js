var validar = function(e){
	var formulario = document.getElementById("sesion");
	if(formulario.correo.value=="" || formulario.contraseña.value==""){
		alert("Todos lso campos son obligatorios.");
		e.preventDefault();
	}
}


document.addEventListener("submit",validar);