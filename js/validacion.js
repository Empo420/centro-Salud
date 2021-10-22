
const boton1=document.getElementById('ver_contrasena');
boton1.addEventListener('click',mostrar);

function mostrar(){
    let contrasena = document.getElementById('contrasena');
    if (contrasena.type==="password"){
        contrasena.type="text";
    } else {
        contrasena.type="password";
    }
}