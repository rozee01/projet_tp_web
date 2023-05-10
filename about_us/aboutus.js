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
