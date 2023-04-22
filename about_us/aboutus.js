// -----------------------div appears right start--------------------------

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
// -----------------------div appears from right end--------------------------
// -----------------------back to top btn start--------------------------
// Get the button
let backToTopBtn = document.querySelector("#backToTopBtn");

// When the user scrolls down 1900px from the top of the document, show the button
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
// -----------------------back to top btn end--------------------------