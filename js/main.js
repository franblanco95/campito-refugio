const slideImage = document.querySelectorAll(".slide");
const slidesContainer = document.querySelector(".slides-container");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");
const navigationDots = document.querySelector(".navigation-dots");

let numberOfImages = slideImage.length;
let slideWidth = slideImage[0].clientWidth;
let currentSlide = 0;

function init () {
    slideImage.forEach((img, i) => {
        img.style.left = i * 100 + "%";
    })

    slideImage[0].classList.add("active");

    createNavigationDots ();
}

init();

function createNavigationDots (){
    for (let i = 0; i < numberOfImages; i++){
        const dot = document.createElement("div");
        dot.classList.add("single-dot");
        navigationDots.appendChild(dot);
        dot.addEventListener("click", () => {
            goToSlide(i);
        });
    }
    navigationDots.children[0].classList.add("active");
    
}

nextBtn.addEventListener("click", () => {
    if(currentSlide >= numberOfImages - 1){
        goToSlide(0);
        return;
    }
    currentSlide++;
    goToSlide(currentSlide);
})

prevBtn.addEventListener("click", () => {
    if(currentSlide <= 0){
        goToSlide(numberOfImages - 1);
        return;
    }
    currentSlide--;
    goToSlide(currentSlide);
})

function goToSlide(slideNumber){
    slidesContainer.style.transform = "translateX(-" + slideWidth * slideNumber + "px)";
    currentSlide = slideNumber;
    setActiveClass();
}

function setActiveClass(){
    let currentActive = document.querySelector(".slide.active");
    currentActive.classList.remove("active");
    slideImage[currentSlide].classList.add("active");

    let currentDot = document.querySelector(".single-dot.active");
    currentDot.classList.remove("active");
    navigationDots.children[currentSlide].classList.add("active");
}


// MAPA

      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: -34.890976, lng: -58.432811 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }