// -----------------------div appears start--------------------------

// Call the addHtml function to add your HTML code to the target div
const box = document.querySelector(".ourmission-col2");
const text = document.querySelector("#capteur");
function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.bottom >= 0 &&
    rect.top <= (window.innerHeight || document.documentElement.clientHeight)
  );
}

function handleScroll() {
  if (isElementInViewport(text)) {
    box.classList.add("show-img");
  } else {
    box.classList.remove("show-img");
  }
}

window.addEventListener("scroll", handleScroll);
// -----------------------div appears end--------------------------
// -----------------------back to top btn appears start--------------------------
// Get the button
let backToTopBtn = document.querySelector("#backToTopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 1900 ||
    document.documentElement.scrollTop > 1900
  ) {
    backToTopBtn.style.display = "block";
  } else {
    backToTopBtn.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
// -----------------------back to top btn appears end--------------------------
const slideInDiv = document.querySelector(".slide-in");

function debounce(func, wait = 20, immediate = true) {
  let timeout;
  return function () {
    const context = this,
      args = arguments;
    const later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

function checkSlide() {
  const slideInAt =
    window.scrollY + window.innerHeight - slideInDiv.offsetHeight / 2;
  const isHalfShown = slideInAt > slideInDiv.offsetTop;
  if (isHalfShown) {
    slideInDiv.classList.add("active");
  } else {
    slideInDiv.classList.remove("active");
  }
}

window.addEventListener("scroll", debounce(checkSlide));
