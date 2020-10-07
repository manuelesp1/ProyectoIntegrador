function validar() {
    var nombre, apepat, apemat, correo, contraseña;
    nombre = document.getElementById("nombre").Value;
    apepat = document.getElementById("apepat").nodeValue;
    apemat = document.getElementById("apemat").nodeValue;
    correo = document.getElementById("correo").nodeValue;
    contraseña = document.getElementById("contraseña").nodeValue;
  
    if (nombre === "") {
        alert("El campo nombre está vacío");
        return false;
    }
  }
  