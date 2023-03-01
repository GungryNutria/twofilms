let current = 0;
const right = document.getElementById("right-arrow");
const left = document.getElementById("left-arrow");
const carrusel = document.querySelector(".carrusel");
let imagenes = document.getElementsByClassName("product").length;

let width = 353;
let imaganesVisibles = 3;

let position = 0;

function imagen() {
    if (imagenes <= 3) {
        right.style.display = "none";
        left.style.display = "none";
    }
}

left.addEventListener("click", function(){
    console.log("hola mundo");
    position += width * imaganesVisibles;
    position = Math.min(position, 0);
    carrusel.style.marginLeft = position + 'px';
});
right.addEventListener("click", function(){
    position -= width * imaganesVisibles;
    position = Math.max(position, -width * (imagenes - imaganesVisibles));
    carrusel.style.marginLeft = position + 'px';
})