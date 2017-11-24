var validar = function(e){
	var formulario = document.getElementById("registro");
	if(formulario.nombre.value=="" || formulario.apellido.value=="" || formulario.telefono.value=="" || formulario.email.value=="" ||
		formulario.contraseña.value=="" || formulario.emailc.value==""){
		alert("Todos los campos son necesarios.");
		e.preventDefault();
	}
	else{
		if(/\d/.test(formulario.nombre.value)){
			alert("Nombre inválido.");
			e.preventDefault();
		}
		else{
			if(/\d/.test(formulario.apellido.value)){
			alert("Apellido inválido.");
			e.preventDefault();
			}
			else{
				if(/\D/.test(formulario.telefono.value.split("(").join("").split(")").join(""))){
					alert("Teléfono inválido.");
					e.preventDefault();
				}
				else{
					if(/@/.test(formulario.email.value)  && /.com/.test(formulario.email.value) && 
						formulario.email.value.lastIndexOf("@")<formulario.email.value.lastIndexOf(".com") && !/\s/.test(formulario.email.value)){
						if(formulario.contraseña.value != formulario.emailc.value){
							alert("Las contraseñas no coinciden.");
							e.preventDefault();
						}
					}
					else{
						alert("Correo inválido.");
						e.preventDefault();
					}
				}
			}
		}
	}
}

document.addEventListener("submit",validar);