
const expresiones = {
	nombre: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	apepat: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	apemat: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, //etras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,// Correo.
	contraseña: /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // 7 a 14 numeros.
}
function validar() {
	var dni_padre = document.getElementById('dni_padre').value;
	var apepat = document.getElementById('apepat').value;
	var apemat = document.getElementById('apemat').value;
	var correo = document.getElementById('correo').value;
	var contraseña = document.getElementById('contraseña').value;
	var error = document.getElementById('error').value;
	var expresion = /\w+@\w+\.+[a-z]/;
	var letras = /[a-zA-ZÀ-ÿ\s]/;
	var numero = /[0-9]/;
	
	if (dni_padre ===""||apepat ===""||apemat ===""||correo ===""||contraseña ==="") {
		alert("Todos los campos son obligatorios");
		return false;
	} 
	/*dni_padre*/
	else if(!(dni_padre.length===8)){
		alert("El dni debe tener 8 digitos");
		return false;
	}
	else if(!letras.test(dni_padre)){
		alert("El dni solo debe contener numeros");
		return false;
	}
	/*apellido paterno*/
	else if(apepat.length>15){
		alert("El apellido paterno es muy largo");
		return false;
	}
	else if(!letras.test(apepat)){
		alert("El apellido paterno debe ser solo letras");
		return false;
	}
	/*apellido materno*/
	else if(apemat.length>15){
		alert("El apellido paterno es muy largo");
		return false;
	}
	else if(!letras.test(apemat)){
		alert("El apellido materno debe ser solo letras");
		return false;
	}
	/*Correo*/
	else if(correo.length>20){
		alert("El correo es muy largo");
		return false;
	}
	else if(!expresion.test(correo)){
		alert("El correo debe tener este formato ejemplo@ejemplo.com");
		return false;
	}
	/*contraseña*/
	else if(contraseña.length<8&&contraseña.length<16){
		alert("El contraseña es muy corta minimo 8 caracteres");
		return false;
	}
	
	
	}