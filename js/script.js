//alt fonction

const docP = document.querySelectorAll( "p" );
const docFigcaption = document.querySelectorAll( "figcaption" );

document.addEventListener('keydown', keyDown);
function keyDown(event) {   
    //alt key down
    if(event.keyCode === 18) {
        docP.forEach((e) => {
            e.classList.add("onAltPressed");
        });
        docFigcaption.forEach((e) => {
            e.classList.add("onAltPressed");
        });
    }
}

document.addEventListener('keyup', keyUp);
function keyUp(event) {   
    //alt key up
    if(event.keyCode === 18) {
        docP.forEach((e) => {
            e.classList.remove("onAltPressed");
        });
        docFigcaption.forEach((e) => {
            e.classList.remove("onAltPressed");
        });
    }
}

//test section
const btnTestYes = document.querySelector(".test__btn--yes");
const btnTestNo = document.querySelector(".test__btn--no");
const btnTestContact = document.querySelector(".test__btn--contact");
let testContent = document.querySelector(".test__content");
let yesCount = 1;

btnTestYes.addEventListener("click", function() {
    testContent.innerHTML = "Désolé mais nous ne sommes pas sur la même longueur d'onde !";
    btnTestYes.style.display ="none";
    btnTestNo.style.display ="none";
});

btnTestNo.addEventListener("click", function() {
    testContent.innerHTML = "Souhaitez-vous un site qui ne retransmet pas vos valeurs ?";

    if (yesCount === 2) {
        testContent.innerHTML = "Souhaitez-vous travailler avec des personnes qui ne s’intéressent pas à votre métier ?";
    }
    if (yesCount === 3) {
        testContent.innerHTML = "Nous sommes donc fait pour collaborer ensemble !";
        btnTestYes.style.display ="none";
        btnTestNo.style.display ="none";
        btnTestContact.style.display ="block";
    }
    yesCount++;
});

//test affichage
const test = document.querySelector("#test");
const btnTestShow = document.querySelector(".hero__btn--test");
    btnTestShow.addEventListener("click", function() {
        test.style.display = "block"
})

//close modale
const altModale = document.getElementById("modale--alt");
altModale.addEventListener("click", function() {
    altModale.style.display = "none";
});