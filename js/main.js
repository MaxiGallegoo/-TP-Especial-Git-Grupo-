//SECCION DE PARTIAL RENDER
let direcciones = {
  "home": "http://localhost/proyectos/sitio/docs/ajax_home.html",
  "menu": "http://localhost/proyectos/sitio/docs/ajax_menu.html",
  "promociones": "http://localhost/proyectos/sitio/docs/ajax_promotions.html",
  "contacto": "http://localhost/proyectos/sitio/docs/ajax_contact.html",
}
function loadHome(event) {
  cargaDeContenido(direcciones.home);
}
loadHome(); //Esto hace que al entrar al sitio automaticamente cargue el "home"
let navbar = document.getElementsByClassName("nav-link");
navbar[1].addEventListener("click",menu); //De acá para abajo son 4 codigos iguales, seguramente se podrían comprimir
function menu(e) {
  cargaDeContenido(direcciones.menu);
}
navbar[0].addEventListener("click",loadHome);
navbar[2].addEventListener("click",promociones);
function promociones(e) {
  cargaDeContenido(direcciones.promociones);
}
navbar[3].addEventListener("click",contacto);
function contacto(e) {
  cargaDeContenido(direcciones.contacto);
}

function cargaDeContenido(direccion) {
  fetch(direccion).then(
    function(respuesta){
        let container = document.getElementsByClassName("container");
        container[0].innerHTML = "El contenido se está cargando...";
        respuesta.text().then(t=>
          container[0].innerHTML = t);
    });
}
// SECCION DE REST, incompleta, no fuimos capaces de manipular correctamente la tabla
let url = {
  "server": "http://web-unicen.herokuapp.com/api/groups/",
  "grupo": "12MSMG/",
  "coleccion": "menusDeComidasAlaCarta/",
}
document.addEventListener('click',subirPedido);
function subirPedido(e) { //Equivalente al método on() de jquery pero en js puro
  if (e.target.id == 'enviar') {
      //subirPedido(producto,unidades,precio);
      let elementos = document.getElementsByClassName("form-control");
      let productoBruto = {
        "producto": elementos[0].value,
        "unidades": elementos[1].value,
        "precio": elementos[2].value,
      }
      let productoNeto = {
        "thing": productoBruto,
      }
      fetch(url.server+url.grupo+url.coleccion,{
        "method": "POST",
        "headers": {"content-type": "application/json"},
        "body": JSON.stringify(productoNeto),
      }).then(function(r){
        return r.json()
      })
  }
}
