 function guardar(){

var nombre = document.getElementById('nombre').value;
var correo = document.getElementById('correo').value;
var contraseña = document.getElementById('contraseña').value;


db.collection("users").add({
    first: nombre,
    last: correo,
    born: contraseña
})
.then(function(docRef) {
    console.log("Document written with ID: ", docRef.id);
})
.catch(function(error) {
    console.error("Error adding document: ", error);
});
}