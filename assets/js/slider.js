document.addEventListener("DOMContentLoaded", () => {
    const btnPrevious = document.querySelector(".prev");
    const btnNext = document.querySelector(".next");
    const slides = document.querySelectorAll(".slider_slide");
    const slidesContainer = document.querySelector(".slider_slides");
    let currentSlideIndex = 0;

    function getVisibleSlidesCount() {
        const containerWidth = slidesContainer.offsetWidth;
        const slideWidth = slides[0].offsetWidth;
        return Math.floor(containerWidth / slideWidth);
    }

    function updateSlidePosition() {
        const slideWidth = slides[0].offsetWidth;
        slidesContainer.scrollTo({
            left: slideWidth * currentSlideIndex,
            behavior: "smooth",
        });
    }

    function changeSlide(direction) {
        const totalSlides = slides.length;
        const visibleSlidesCount = getVisibleSlidesCount();
        const maxSlideIndex = totalSlides - visibleSlidesCount;

        currentSlideIndex = (currentSlideIndex + direction + totalSlides) % totalSlides;

        if (currentSlideIndex > maxSlideIndex) {
            currentSlideIndex = 0;
        }

        updateSlidePosition();
    }

    btnPrevious.addEventListener("click", () => changeSlide(-1));
    btnNext.addEventListener("click", () => changeSlide(1));
    window.addEventListener("resize", updateSlidePosition);

    updateSlidePosition();
});
