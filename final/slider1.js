let slideIndex1 = 0;
showSlides1(slideIndex1);

function changeSlide1(n) {
    showSlides1(slideIndex1 += n);
}

function showSlides1(n) {
    const slides1 = document.getElementsByClassName("slide1");
    const maxSlides1 = slides1.length;
    const slideWidth1 = 25; // Width of each slide in percentage (100% / 5 slides)

    if (n < 0) {
        slideIndex1 = maxSlides1 - 4;
    }
    if (n >= maxSlides1 - 3) {
        slideIndex1 = 0;
    }

    const translateValue1 = -slideIndex1 * slideWidth1;
    document.querySelector(".slider1").style.transform = `translateX(${translateValue1}%)`;
}

