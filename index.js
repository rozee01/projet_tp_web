var nav = document.querySelector("nav");
window.addEventListener("scroll", function () {
  if (window.pageYOffset > 100) {
    nav.classList.add("bg-light", "shadow");
  } else {
    nav.classList.remove("bg-light", "shadow");
  }
});
     // Get the elements
     var heading = document.querySelector('h2');
     var paragraph = document.querySelector('p');
     // Add a listener for window resize
     window.addEventListener('resize', function(event){
       // Get the screen width
       var screenWidth = window.innerWidth;
     
       // Use media queries to set font size based on screen width
       if (screenWidth < 768) { // For screens smaller than 768px
         heading.style.fontSize = "35px";
         paragraph.style.fontSize = "14px";

       } else if (screenWidth >= 768 && screenWidth < 992) { // For screens between 768px and 992px
         heading.style.fontSize = "40px";
         paragraph.style.fontSize = "20px";

       } else { // For screens larger than 992px
         heading.style.fontSize = "48px";
         paragraph.style.fontSize = "20px";
       }
     });