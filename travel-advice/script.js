window.addEventListener('resize', function(){
  var fontSize = window.innerWidth/50; // Set the font size based on the width of the screen
  document.querySelector('body').style.fontSize = fontSize + 'px'; // Change the font size of the body element
});
