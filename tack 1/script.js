const text = document.querySelector(".center-text");
const firstButton = document.querySelector(".btn1");
const secondButton = document.querySelector(".btn2");

let isClicked = false;

firstButton.addEventListener("click", () => {
    isClicked = true;
});

secondButton.addEventListener("click", () => {
    if (isClicked == true) {
        text.classList.toggle('hide');
    }
    isClicked = false;
});