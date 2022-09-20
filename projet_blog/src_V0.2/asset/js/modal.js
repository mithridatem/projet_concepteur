/**
 * MODAL
 */
//Get the connexion element in the nav
let connexionSelector = document.querySelector(".modal-button-js");

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



/**
 * GSAP ANIMATION
 */


//Text animation

//Selector 
let sectionPresentationSelector = document.querySelector(".presentation");

function writeText(newText){
    gsap.to(".text-change-js", {repeat: 1, duration: 4, text: newText, ease: "out", yoyo: true});
    


}
if(sectionPresentationSelector !== null){
    setInterval(function(){
        document.querySelector(".clignote").classList.toggle("hidden");
    },500);
    
    sectionPresentationSelector.addEventListener("mouseenter", function(e){
        console.log(e);
    
        writeText("JavaScript");
        setTimeout(function(){
            writeText("PHP");
        },8000);
        setTimeout(function(){
            writeText("Tailwinds");
        },16000);
    
        e.target.removeEventListener(e.type, arguments.callee);
    })
}

/**
 * Fonction qui permet de rendre saine une chaine de caractère
 * Cela permet d'éviter une injection XSS
 * @param {String} text 
 * @returns 
 */
function escapeHtml(text) {
    var map = {
      '&': '&amp;',
      '<': '&lt;',
      '>': '&gt;',
      '"': '&quot;',
      "'": '&#039;'
    };
    
    return text.replace(/[&<>"']/g, function(m) { return map[m]; });
  }