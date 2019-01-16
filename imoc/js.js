function guardar(){

var nombre = document.getElementById('nombre').value;
var correo = document.getElementById('correo').value;

var contraseña = document.getElementById('contraseña').value;

firebase.auth().createUserWithEmailAndPassword(correo, contraseña).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
});

}