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
function validar(){
var nombre = document.getElementById('nombre').value;
var apepat = document.getElementById('apepat').value;
var apemat = document.getElementById('apemat').value;
var correo = document.getElementById('correo').value;
var contraseña = document.getElementById('contraseña').value;
var error = document.getElementById('error').value;
var expresion = /\w+@\w+\.+[a-z]/;
var letras = /[a-zA-ZÀ-ÿ\s]/;
var numero = /[0-9]/;

var mensajeError=[];
var cont=0;
if (nombre ===""||apepat ===""||apemat ===""||correo ===""||contraseña ==="") {
    mensajeError.push('Todos los campos son obligatorios<br>');
    document.getElementById("error").innerHTML = "Todos los campos son obligatorios<br>";
    return false;
    
} 
/*nombre*/
else if(nombre.length>15){
    document.getElementById("error").innerHTML = "El nombre es muy largo";
    mensajeError[cont]="Todos los campos son obligatorios<br>";
    return false;
}
else if(!letras.test(nombre)){        
    document.getElementById("error").innerHTML = "El nombre solo debe contener letras";
    return false;
}
/*apellido paterno*/
else if(apepat.length>15){
    //alert("El apellido paterno es muy largo");
    document.getElementById("error").innerHTML = "El apellido paterno es muy largo";
    return false;
}
else if(!letras.test(apepat)){
    //alert("El apellido paterno debe ser solo letras");
    document.getElementById("error").innerHTML = "El apellido paterno debe ser solo letras";
    return false;
}
/*apellido materno*/
else if(apemat.length>15){
    document.getElementById("error").innerHTML = "El apellido materno es muy largo";
    return false;
}
else if(!letras.test(apemat)){
    document.getElementById("error").innerHTML = "El apellido materno  debe ser solo letras";
    return false;
}
/*Correo*/
else if(correo.length>20){
    document.getElementById("error").innerHTML = "El correo es muy largo";
    return false;
}
else if(!expresion.test(correo)){
    document.getElementById("error").innerHTML = "El correo debe tener este formato ejemplo@ejemplo.com";
    return false;
}
/*contraseña*/
else if(contraseña.length<8&&contraseña.length<16){
    document.getElementById("error").innerHTML = "El contraseña es muy corta minimo 8 caracteres\n";
    return false;
}


}