  //slide pic
  document.addEventListener("DOMContentLoaded", function() {
    let slideIndex = 0;
    const slides = document.querySelectorAll(".slide");
  
    showSlide(slideIndex);
  
    function showSlide(index) {
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[index].style.display = "block";
    }
  
    function nextSlide() {
      slideIndex++;
      if (slideIndex >= slides.length) {
        slideIndex = 0;
      }
      showSlide(slideIndex);
    }
  
    setInterval(nextSlide, 3000); // Change the duration here (in milliseconds) to adjust the slide transition time
  });

 //next and prv btn

var slideIndex = 1;
showSlide(slideIndex);

function changeSlide(n) {
  showSlide(slideIndex += n);
}

function showSlide(n) {
  var slides = document.getElementsByClassName("slide");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

 // Quantity
 $('.qty button').on('click', function () {
  var $button = $(this);
  var oldValue = $button.parent().find('input').val();
  if ($button.hasClass('btn-plus')) {
      var newVal = parseFloat(oldValue) + 1;
  } else {
      if (oldValue > 0) {
          var newVal = parseFloat(oldValue) - 1;
      } else {
          newVal = 0;
      }
  }
  $button.parent().find('input').val(newVal);
});

    // Shipping address show hide
    $('.checkout #shipto').change(function () {
      if($(this).is(':checked')) {
          $('.checkout .shipping-address').slideDown();
      } else {
          $('.checkout .shipping-address').slideUp();
      }
  });
  
  
  // Payment methods show hide
  $('.checkout .payment-method .custom-control-input').change(function () {
      if ($(this).prop('checked')) {
          var checkbox_id = $(this).attr('id');
          $('.checkout .payment-method .payment-content').slideUp();
          $('#' + checkbox_id + '-show').slideDown();
      }
  });
(jQuery);

//dropdown

document.addEventListener("DOMContentLoaded", function() {
  const dropdown = document.querySelector(".dropdowni");
  const dropdownIcon = document.getElementById("dropdowni-icon");

  dropdownIcon.addEventListener("click", function() {
    dropdown.classList.toggle("open");
  });

  document.addEventListener("click", function(event) {
    if (!dropdown.contains(event.target)) {
      dropdown.classList.remove("open");
    }
  });
});

//slide dowm to shipping address
(function() {
  var script = document.createElement('script');
  script.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
  document.head.appendChild(script);
})();

$(document).ready(function() {
  $('.shipping #myCheckbox').change(function() {
    if ($(this).is(':checked')) {
      $('.row2').slideDown();
    } else {
      $('.row2').slideUp();
    }
  });
});