var validar = function(e){
	var formulario = document.getElementById("producto");
	if(formulario.nombre.value=="" || formulario.consola.value=="" || formulario.price.value=="" || formulario.type.value=="" ||
		formulario.pic.value=="" || formulario.descripcion.value==""){
		alert("Todos los campos son necesarios.");
		e.preventDefault();
	}else{
		if(/\d/.test(formulario.nombre.value)){
			alert("Nombre inválido.");
			e.preventDefault();
		}
		else{
			if(isNaN(formulario.price.value)){
				alert("precio inválido.");
				e.preventDefault();
			}	
		}
	}
}

document.addEventListener("submit",validar);