const select = document.querySelector("#catego");
const pan = document.getElementsByClassName("panaderia");
const pastel = document.getElementsByClassName("pasteleria");
const galleta = document.getElementsByClassName("galleteria");
const tostado = document.getElementsByClassName("tostados");

const resultado = {
    valor: ''
};

catego.addEventListener("change", e => {
    resultado.valor = e.target.value;

    if (resultado.valor === 'tostados') {
        pan.classList.add("invisible");
        galleta.classList.add("invisible");
        pastel.classList.add("invisible");
        tostado.classList.remove("invisible");
    } if (resultado.valor === 'panaderia') {
        tostados.classList.add("invisible");
        galleta.classList.add("invisible");
        pastel.classList.add("invisible");
        pan.classList.remove("invisible");
    } if (resultado.valor === 'pasteleria') {
        pan.classList.add("invisible");
        tostado.classList.add("invisible");
        galleta.classList.add("invisible");
        pastel.classList.remove("invisible");
    } if (resultado.valor === 'galleteria') {
        pan.classList.add("invisible");
        tostado.classList.add("invisible");
        pastel.classList.add("invisible");
        galleta.classList.remove("invisible");
    } if (resultado.valor === 'todos') {
        tostados.classList.remove("invisible");
        galleta.classList.remove("invisible");
        pastel.classList.remove("invisible");
        pan.classList.remove("invisible");
    };
});
