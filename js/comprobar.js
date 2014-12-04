$(document).on("ready",function(){

	$("#formr").submit(function(event){
		mensaje=''
		error = false

		nom = $("#nombre").val()
		if(nom==''){
			error= true
			mensaje="Debe ingresar su nombre"			
		}else{
			mensaje=''
		}

		$("#en").html(mensaje);

		clave =$("#clave").val()
		if(ap==''){
			error = true
			mensaje= "Debe ingresar su clave"
		}else{
			mensaje =''
		}
		$("#ep").html(mensaje)

		rclave = $("#re-clave").val()

		if(clave!=rclave){
			error=true
			mensaje
		}else{
			mensaje="Claves no coinciden"
		}

		$("#re").html(mensaje)

		if (error) {
			event.preventDefault()
		}else{
			return true
		}

		
	})
	

});