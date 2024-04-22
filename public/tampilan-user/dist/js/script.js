const header = document.querySelector("nav");

window.addEventListener ("scroll", function(){
    header.classList.toggle ("sticky" ,window.scrollY > 0);
});

