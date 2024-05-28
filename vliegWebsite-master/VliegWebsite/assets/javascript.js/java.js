let slideIndex = 0;
const slides = document.querySelectorAll('.slide');

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.style.transform = `translateX(${(i - index) * 100}%)`;
    });
}

function changeSlide(n) {
    slideIndex = (slideIndex + n + slides.length) % slides.length;
    showSlide(slideIndex);
}

function autoSlide() {
    changeSlide(1);
    setTimeout(autoSlide, 4000);
}

document.addEventListener('DOMContentLoaded', () => {
    showSlide(slideIndex);
    autoSlide();
});
