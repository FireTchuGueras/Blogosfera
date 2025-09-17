
AOS.init({
  offset: 120, 
  delay: 0, 
  duration: 900, 
  easing: 'ease', 
  once: false, 
  mirror: false, 
  anchorPlacement: 'top-bottom', 

});

//Texto da Blogosfera
const text = "Blogosfera";
const textElement = document.querySelector(".typewriter-text");
const cursorElement = document.querySelector(".cursor");

let charIndex = 0;
let speed = 100;

function typeWriter() {
    if (charIndex < text.length) {
        textElement.innerHTML += text.charAt(charIndex);
        charIndex++;
        setTimeout(typeWriter, speed);
    } else {
        setTimeout(eraseText, 1000); // Espera 1s antes de apagar
    }
}

function eraseText() {
    if (textElement.innerHTML.length > 0) {
        textElement.innerHTML = textElement.innerHTML.slice(0, -1);
        setTimeout(eraseText, 50);
    } else {
        charIndex = 0;
        setTimeout(typeWriter, 500); // Espera 0.5s antes de reescrever
    }
}

window.onload = typeWriter;

