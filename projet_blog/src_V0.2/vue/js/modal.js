//Get the connexion element in the nav
console.log("Hello")
let connexionSelector = document.querySelector(".modal-button-js");
console.log("Hello")

let modalSelector = document.querySelector(".modal-connexion-js");
let navSelector = document.querySelector("nav");
let burgerNavSelector = document.querySelector(".burger-nav-js");

connexionSelector.addEventListener("click", function () {
    if(connexionSelector.childNodes[1].textContent == "Connexion"){
        modalSelector.classList.remove("hidden");
    }
})

modalSelector.addEventListener("click", function (e) {
    if (e.target !== this) {
        return;
    }
    modalSelector.classList.add("hidden");

})


burgerNavSelector.addEventListener("click", function () {
    console.log("Hello");
    navSelector.classList.toggle("h-10");
    navSelector.classList.toggle("h-full");
})