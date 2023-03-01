// Menú
const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");
const cuerpo = document.querySelector("#body");
const menu = document.querySelector("#menu");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
    if (nav.classList.contains('visible')) {
        cuerpo.style.overflow = "hidden";
    }
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
    cuerpo.style.overflow = "";
})

window.onscroll = function () {
    const y = window.scrollY;
    console.log(y);
    if(y > 160){
        menu.classList.add("sticky");
        nav.classList.add("sticky-menu");
    }else{
        menu.classList.remove("sticky");
        nav.classList.remove("sticky-menu");
    }
};
