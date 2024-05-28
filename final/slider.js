let slideIndex = 0;
showSlides(slideIndex);

function changeSlide(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    const slides = document.getElementsByClassName("slide");
    const maxSlides = slides.length;
    const slideWidth = 20; // Width of each slide in percentage (100% / 5 slides)

    if (n < 0) {
        slideIndex = maxSlides - 5;
    }
    if (n >= maxSlides - 4) {
        slideIndex = 0;
    }

    const translateValue = -slideIndex * slideWidth;
    document.querySelector(".slider").style.transform = `translateX(${translateValue}%)`;
}

