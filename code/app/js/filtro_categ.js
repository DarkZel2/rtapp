const select = document.querySelector("#catego");
const pan = document.querySelector("#panaderia");
const pastel = document.querySelector("#pasteleria");
const galleta = document.querySelector("#galleteria");
const tostado = document.querySelector("#tostados");

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
    }; 
});

catego.addEventListener("change", e => {
    resultado.valor = e.target.value;

    if (resultado.valor === 'panaderia') {
        tostados.classList.add("invisible");
        galleta.classList.add("invisible");
        pastel.classList.add("invisible");
        pan.classList.remove("invisible");
    };
});

catego.addEventListener("change", e => {
    resultado.valor = e.target.value;

    if (resultado.valor === 'pasteleria') {
        pan.classList.add("invisible");
        tostado.classList.add("invisible");
        galleta.classList.add("invisible");
        pastel.classList.remove("invisible");
    }
});

catego.addEventListener("change", e => {
    resultado.valor = e.target.value;

    if (resultado.valor === 'galleteria') {
        pan.classList.add("invisible");
        tostado.classList.add("invisible");
        pastel.classList.add("invisible");
        galleta.classList.remove("invisible");
    }
});

catego.addEventListener("change", e => {
    resultado.valor = e.target.value;

    if (resultado.valor === 'todos') {
        tostados.classList.remove("invisible");
        galleta.classList.remove("invisible");
        pastel.classList.remove("invisible");
        pan.classList.remove("invisible");
    } 
});