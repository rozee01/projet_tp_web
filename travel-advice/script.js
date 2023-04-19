  // Get all the "Learn More" buttons
  var buttons = document.querySelectorAll('[data-target]');

  // Loop through the buttons and add a click event listener to each one
  buttons.forEach(function(button) {
    button.addEventListener('click', function() {
      // Get the target text container
      var targetId = button.getAttribute('data-target');
      var target = document.querySelector(targetId);

      // Toggle the display of the target container
      target.classList.toggle('d-none');
    });
  });

