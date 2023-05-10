    <footer>
          <div class="bande-container-ex">
            <div class="row-bottom">
              <div class="footercol col-md-6">
                <h3>About Us</h3>
                <p id="footer-p">
                  We are a group of friends that recommends destinations and
                  best guides to travelers around the world.
                </p>
              </div>
              <div class="footercol col-md-6">
                <h3>Contact Us</h3>
                <p id="footer-p">
                  INSAT Centre Urbain Nord<br />Tunis, TUN 5555<br />Phone:
                  +216-55-666-777<br />Email: TourBuddy@gmail.com <br />
                  <!-- Instagrame: TourBuddy <br />
                  Facebook: TourBuddy -->
                </p>
              </div>
            </div>
          </div>
          <!-- <a href="#" id="back-to-top"><img src="../pics/icons8-facebook-48.png" alt="Back to Top"></a> -->
        </footer>
        <!-- copyright start -->
        <div class="div-copyright">
          <div></div>
          <p class="copyright">
            Copyright © 2023 TourBuddy. All rights reserved.
          </p>
          <div></div>
        </div>
        <!-- copyright end -->
        <!-- backToTopBtn start -->
        <img onclick="topFunction()" id="backToTopBtn" title="Go to top" src="../pics/icons8-airplane2-64.png" alt="Back to Top" /> 
        <style>
          /* backToTopBtn start */
#backToTopBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#backToTopBtn:hover {
  transform: scale(1.05);
  animation: wave 1.3s ease-in-out infinite;
}
/* backToTopBtn end */
        </style>
        <script>
          // -----------------------back to top btn start--------------------------
// Get the button
let backToTopBtn = document.querySelector("#backToTopBtn");

// When the user scrolls down 1000px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 1000 ||
    document.documentElement.scrollTop > 1000
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
        </script>