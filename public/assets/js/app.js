"use strict"

let hero = document.querySelectorAll(".hero")[0]
const imagens = [
    "./assets/img/Benguela-20141218-195607-00322-HIRES-2-2048x1367.jpg",
    "./assets/img/OIP (1).webp",
    "./assets/img/OIP (2).webp",
    "./assets/img/OIP (3).webp",
    "./assets/img/OIP (4).webp",
    "./assets/img/OIP (6).webp",
    "./assets/img/OIP (7).webp"
]

let cont = 0;

setInterval(() => {
    
    hero.style = `background: url('${imagens[cont]}') center/cover no-repeat;transition: background 1.8s linear`
    
    cont < imagens.length - 1 ? cont++ :  cont = 0

}, 3000);