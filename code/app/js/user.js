const general = document.getElementById('general');
const datos = document.getElementById('datos');
const house = document.getElementById('home');
const pass = document.getElementById('pass');
const priv = document.getElementById('priv');

const text1 = document.getElementById('1');
const text2 = document.getElementById('2');
const text3 = document.getElementById('3');
const text4 = document.getElementById('4');
const text5 = document.getElementById('5');

text1.addEventListener('click', () => {
    general.classList.remove('invisible');
    datos.classList.add('invisible');
    house.classList.add('invisible');
    pass.classList.add('invisible');
    priv.classList.add('invisible');
})

text2.addEventListener('click', () => {
    general.classList.add('invisible');
    datos.classList.remove('invisible');
    house.classList.add('invisible');
    pass.classList.add('invisible');
    priv.classList.add('invisible');
})

text3.addEventListener('click', () => {
    general.classList.add('invisible');
    datos.classList.add('invisible');
    house.classList.remove('invisible');
    pass.classList.add('invisible');
    priv.classList.add('invisible');
})

text4.addEventListener('click', () => {
    general.classList.add('invisible');
    datos.classList.add('invisible');
    house.classList.add('invisible');
    pass.classList.remove('invisible');
    priv.classList.add('invisible');
})

text5.addEventListener('click', () => {
    general.classList.add('invisible');
    datos.classList.add('invisible');
    house.classList.add('invisible');
    pass.classList.add('invisible');
    priv.classList.remove('invisible');
})


