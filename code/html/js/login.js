const info = document.querySelector("#info");
const iniciar = document.querySelector("#iniciar");
const registro = document.querySelector("#registro");
const conten1 = document.querySelector("#conten1");
const conten2 = document.querySelector("#conten2");

registro.addEventListener("click", () => {
    info.classList.add("moved");
})
iniciar.addEventListener("click", () => {
    info.classList.remove("moved");
})
registro.addEventListener("click", () => {
    conten1.classList.add("invisible");
})
registro.addEventListener("click", () => {
    conten2.classList.add("ver");
})
iniciar.addEventListener("click", () => {
    conten1.classList.remove("invisible");
})
iniciar.addEventListener("click", () => {
    conten2.classList.remove("ver");
})