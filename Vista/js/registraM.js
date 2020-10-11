
function validar(){
    var dPadre = document.getElementById('dni_padre').value;
    var nHijo = document.getElementById('nombre_hijo').value;
    var aPhijo = document.getElementById('appat_hijo').value;
    var aMhijo = document.getElementById('apmat_hijo').value;
    var dHijo = document.getElementById('dni_hijo').value;
    var error = document.getElementById('error').value;
    var expresion = /\w+@\w+\.+[a-z]/;
    var letras = /[a-zA-ZÀ-ÿ\s]/;
    var numero = /[0-9]/;
   
    if (dPadre ===""||nHijo ===""||aPhijo ===""||aMhijo ===""||dHijo ==="") {
        document.getElementById("error").innerHTML = "Todos los campos son obligatorios";
        return false;
        
    } 
    /*Dni padre*/
    else if(!numero.test(dPadre)){        
        document.getElementById("error").innerHTML = "El Dni solo debe contener numeros";
        return false;
    }
    else if((dPadre.length!=8)){
        document.getElementById("error").innerHTML = "El dni debe tener 8 digitos";
        return false;
    }

    /*Nombre hijo*/
    else if(nHijo.length>15){
         document.getElementById("error").innerHTML = "El nombre es muy largo";
        return false;
    }
    else if(!letras.test(nHijo)){      
        document.getElementById("error").innerHTML = "El nombre solo debe ser letras";
        return false;
    }
    /*apellido  paterno hijo appat_hijo*/
    else if(aPhijo.length>15){
        document.getElementById("error").innerHTML = "El apellido paterno del hijo es muy largo";
        return false;
    }
    else if(!letras.test(aPhijo)){
        document.getElementById("error").innerHTML = "El apellido paterno del hijo debe ser solo letras";
        return false;
    }

    /*apellido  materno hijo apmat_hijo*/
    else if(aMhijo.length>15){
        document.getElementById("error").innerHTML = "El apellido materno del hijo es muy largo";
        return false;
    }
    else if(!letras.test(aMhijo)){
        document.getElementById("error").innerHTML = "El apellido materno del hijo debe ser solo letras";
        return false;
    }

    /*Dni hijo*/
    else if(!numero.test(dHijo)){        
        document.getElementById("error").innerHTML = "El Dni solo debe contener numeros";
        return false;
    }
    else if((dHijo.length!=8)){
        document.getElementById("error").innerHTML = "El dni debe tener 8 digitos";
        return false;
    }

      
    
    }