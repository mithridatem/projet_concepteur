//Get the connexion element in the nav

let connexionSelector = document.querySelector(".modal-button-js");
let modalSelector = document.querySelector(".modal-connexion-js");

connexionSelector.addEventListener("click", function(){
    console.log("hello");
    modalSelector.classList.remove("hidden");
})

modalSelector.addEventListener("click", function(e){
    if (e.target !== this) {
        return;
    }
    modalSelector.classList.add("hidden");
})

