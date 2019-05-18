(function(){

	var formulario = document.formulario_registro,
	elementos = formulario.elements;


	// funciones
	
	var validarInputs  = function(){
     
        for (var i = 0; i <elementos.length; i++) {

        		if (elementos[i].type == "number" || elementos[i].type == "text" || elementos[i].type == "email"){

					if (elementos[i].value == 0){

						console.log('El Campo '+elementos[i].name+' Esta Incompleto');

						elementos[i].className = elementos[i].className + ' error'; 

						return false;	
					}else{

						elementos[i].className = elementos[i].className.replace(" error", "");
					}

				}			
        }
        return true;
	};

	var validarRadios  = function(){

		var opciones = document.getElementsByName('Genero'),
		resultado = false; 

		for (var i = 0; i < elementos.length; i++) {
			if(elementos[i].type == "radio" && elementos[i].name == "Genero"){
				for (var j = 0; j < opciones.length; j++) {
					if(opciones[j].checked){
						resultado = true; 
						break;
					}
				}
				if (resultado == false){

					elementos[i].parentNode.className = elementos[i].parentNode.className + " error";
					console.log('El Campo Genero Esta Incorrecto');
					return false;
				}else{

					elementos[i].parentNode.className = elementos[i].parentNode.className.replace(" error", "");
					return true;
				}
			} 
			
		} 


	};

	var validarCheckbox  = function(){

		var opciones = document.getElementsByName('terminos'),
		resultado = false; 

		for (var i = 0; i < elementos.length; i++) {
			if(elementos[i].type == "checkbox"){
				for (var j = 0; j < opciones.length; j++) {
					if(opciones[j].checked){
						resultado = true; 
						break;
					}
				}
				if (resultado == false){

					elementos[i].parentNode.className = elementos[i].parentNode.className + " error";
					console.log('Acepte Terminos y Condiciones');
					return false;
				}else{

					elementos[i].parentNode.className = elementos[i].parentNode.className.replace(" error", "");
					return true;
				}
			} 
			
		} 


	};

	
	var enviar = function(e){

		if (!validarInputs()){

			console.log('falto validar los Inputs');
			e.preventDefault();

		}else if (!validarRadios()){

			console.log('falto validar los Radios');
			e.preventDefault();

		}else if (!validarCheckbox()){

			console.log('falto validar los Checkbox');
			e.preventDefault();

		}else{

			console.log('Envia Correctamente');
			//e.preventDefault();
		}

	};

	// funcion Blur y Focus 
	
	var focusInput = function(){

		this.parentElement.children[1].className = "label active";
		this.parentElement.children[0].className = this.parentElement.children[0].className.replace("error", "");	
	}

	var blurInput = function(){

		if (this.value <= 0) {

			this.parentElement.children[1].className = "label";
			this.parentElement.children[0].className = this.parentElement.children[0].className + " error";		
		}

	}
	// eventos
	
	formulario.addEventListener("submit",enviar);

	for (var i=0; i<elementos.length; i++){
		
		if (elementos[i].type == "number" || elementos[i].type == "text" || elementos[i].type == "email"){

			elementos[i].addEventListener("focus",focusInput);
			elementos[i].addEventListener("blur",blurInput);


		}



	};

}())