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