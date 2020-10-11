/*const form=document.getElementById('form');
const usuario=document.getElementById('nombre');
const apepat=document.getElementById('apepat');
const apemat=document.getElementById('apemat');
const correo=document.getElementById('correo');
const contraseña=document.getElementById('contraseña');*/


/*
$(document).ready(function(){
    $("#submit").click(function(){false.
        var nombre = $("#nombre").val();
        var apepat = $("#apepat").val();
        var apemat = $("#apemat").val();
        var correo = $("#correo").val();
        var contraseña = $("#contraseña").val();
        if(nombre == ""){
            $("#mensaje1").fadeIn();
            return false;
        }
    });
})

form.addEventListener('submit',e=>{
    e.preventDefault();
    checkInputs();
});
function checkInputs(){
    
}
*/
function validar() {
var nombre = document.getElementById('nombre').value;
var apepat = document.getElementById('apepat').value;
var apemat = document.getElementById('apemat').value;
var correo = document.getElementById('correo').value;
var contraseña = document.getElementById('contraseña').value;
var error = document.getElementById('error').value;
var expresion = /\w+@\w+\.+[a-z]/;
var letras = /[a-zA-ZÀ-ÿ\s]/;
var numero = /[0-9]/;
error.style.color='red';
var mensajeError=[];
if (nombre ===""||apepat ===""||apemat ===""||correo ===""||contraseña ==="") {
    alert("Todos los campos son obligatorios");
    mensajeError.push('Todos los campos son obligatorios');
    return false;
} 
/*nombre*/
else if(nombre.length>15){
    alert("El nombre es muy largo");
    mensajeError.push('El nombre es muy largo');
    error.innerHTML=mensajeError.join(', ');
    return false;
}
else if(!letras.test(nombre)){    
    mensajeError.push('El nombre solo debe contener letras,,,,,');
    error.innerHTML=mensajeError.join(', ');
    return false;
}
/*apellido paterno*/
else if(apepat.length>15){
    alert("El apellido paterno es muy largo");
    mensajeError.push('El nombre es muy largo');
    error.innerHTML=mensajeError.join(', ');
    return false;
}
else if(!letras.test(apepat)){
    alert("El apellido paterno debe ser solo letras");
    mensajeError.push('El nombre es muy largo');
    error.innerHTML=mensajeError.join(', ');
    return false;
}
/*apellido materno*/
else if(apemat.length>15){
    alert("El apellido paterno es muy largo");
    mensajeError.push('El nombre es muy largo');
    error.innerHTML=mensajeError.join(', ');
    return false;
}
else if(!letras.test(apemat)){
    alert("El apellido materno debe ser solo letras");
    mensajeError.push('El nombre es muy largo');
    error.innerHTML=mensajeError.join(', ');
    return false;
}
/*Correo*/
else if(correo.length>20){
    alert("El correo es muy largo");
    mensajeError.push('El nombre es muy largo');
    return false;
}
else if(!expresion.test(correo)){
    alert("El correo debe tener este formato ejemplo@ejemplo.com");
    mensajeError.push('El nombre es muy largo');
    return false;
}
/*contraseña*/
else if(contraseña.length<8&&contraseña.length<16){
    alert("El contraseña es muy corta minimo 8 caracteres\n");
    mensajeError.push('El nombre es muy largo');
    return false;
}


}