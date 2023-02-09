

document.addEventListener("DOMContentLoaded", function() {

    const slidesContainer = document.getElementById("slides-container");
    const slide = document.querySelector(".slide");
    const prevButton = document.getElementById("slide-arrow-prev");
    const nextButton = document.getElementById("slide-arrow-next");
    nextButton.addEventListener("click", () => {
    const slideWidth = slide.clientWidth;
    slidesContainer.scrollLeft += slideWidth;
    console.log(slidesContainer.scrollLeft)
    console.log(slideWidth)
    if (slidesContainer.scrollLeft==slideWidth*4)
        slidesContainer.scrollLeft=0
    
    });
    
    prevButton.addEventListener("click", () => {
    const slideWidth = slide.clientWidth;
    slidesContainer.scrollLeft -= slideWidth;
    });

    click_event = new CustomEvent('click');
    setInterval(() => {
        nextButton.dispatchEvent(click_event)
    }, 7000);

});