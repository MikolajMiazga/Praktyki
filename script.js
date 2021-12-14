const languagePL = document.querySelector(".flagpl")
const languageEN = document.querySelector(".flagen")
const languageDE = document.querySelector(".flagde")
const languageButton = document.querySelector(".language-button")
let buttons = Array.from(languageButton.children)
var numberLang = 0;
languageButton.addEventListener("click", () => {
    if(numberLang == 2){
        buttons[2].classList.add("language-active");
        buttons[1].classList.remove("language-active");
        this.numberLang = 0;
    }
    if(numberLang == 1){
        buttons[1].classList.add("language-active");
        buttons[0].classList.remove("language-active");
        this.numberLang = 2;
    }
    if(buttons[0].classList.contains("language-active")){
        if(numberLang == 0){
            buttons[0].classList.add("language-active");
            buttons[2].classList.remove("language-active");
            this.numberLang = 1;
        }
    }
    else{
        if(numberLang == 0){
            buttons[0].classList.add("language-active");
            buttons[2].classList.remove("language-active");
            this.numberLang = 1;
        }
    }



})

