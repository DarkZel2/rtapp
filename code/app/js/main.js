const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready();
}
abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})
cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})

function ready() { 
    //Agregamos funcionalidad al boton Agregar al carrito
    var botonesAgregarAlCarrito = document.getElementsByClassName('boton-item');
    for(var i=0; i<botonesAgregarAlCarrito.length;i++){
        var button = botonesAgregarAlCarrito[i];
        button.addEventListener('click', agregarAlCarritoClicked);
        }

}

function agregarAlCarritoClicked(event) {
    var button = event.target;
    var item = button.parentElement;
    var titulo = item.getElementsByClassName('titulo-item')[0].innerText;
    var precio = item.getElementsByClassName('precio-item')[0].innerText;
    var imagenSrc;

    // Corrección del selector para obtener la fuente de la imagen
    if (item.classList.contains('img-panaderia')) {
        imagenSrc = item.getElementsByClassName('img-panaderia')[0].src;
    } else if (item.classList.contains('img-tostados')) {
        imagenSrc = item.getElementsByClassName('img-tostados')[0].src;
    } else if (item.classList.contains('img-galleteria')) {
        imagenSrc = item.getElementsByClassName('img-galleteria')[0].src;
    } else if (item.classList.contains('img-pasteleria')) {
        imagenSrc = item.getElementsByClassName('img-pasteleria')[0].src;
    }

    console.log(imagenSrc);
    agregarItemAlCarrito(titulo, precio, imagenSrc);
    hacerVisibleCarrito();
}
