let i = 0;
let intervalId = null;

const images = document.querySelectorAll(".slider-container img")

function sliderFunction(){
    images[i].classList.add("displayImg")
    intervalId = setInterval(nextSlide, 5000);
    console.log("test");
}

function showSlide(index){
    images.forEach(slide => {
        slide.classList.remove("displayImg");
    });
    images[index].classList.add("displayImg");

}

function prevSlide(){
    if(i-1 < 0){
        i = images.length-1;
        showSlide(i);
    }
    else{
        i--;
        showSlide(i);
    }
}

function nextSlide(){
    if(i+1 < images.length){
        i++;
        showSlide(i);
    }
    else{
        i = 0
        showSlide(i);
    }
}

const button = document.querySelectorAll(".button")
button.forEach(b => {
    b.addEventListener("click", function(){
        if(b.id == "prev-button"){
            prevSlide();
        }
        else{
            nextSlide();
        }
    })
})

window.addEventListener('load', sliderFunction)
