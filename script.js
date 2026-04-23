// ANIMASI SCROLL
const cards = document.querySelectorAll(".card");

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateX(0)";
        }
    });
});

cards.forEach((card) => {
    card.style.opacity = "0";
    card.style.transform = "translateX(200px) scale(0.95)";
    card.style.transition = "0.8s cubic-bezier(0.25, 1, 0.5, 1)";
    observer.observe(card);
});


// TYPING EFFECT
const title = document.querySelector(".header h1");
const text = title.textContent;
title.textContent = "";

let i = 0;
function typing() {
    if (i < text.length) {
        title.textContent += text.charAt(i);
        i++;
        setTimeout(typing, 60);
    }
}
typing();


// EFEK KLIK CARD
cards.forEach(card => {
    card.addEventListener("click", function() {
        this.style.transform = "scale(1.05)";
        setTimeout(() => {
            this.style.transform = "scale(1)";
        }, 300);
    });
});


// BACKGROUND COLOR PICKER
const colorInput = document.querySelector('input[type="color"]');
document.body.style.transition = "background 0.5s";

colorInput.addEventListener("input", function() {
    document.body.style.background = this.value;
});