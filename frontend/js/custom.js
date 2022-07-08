
// =====SWIPER======

$(document).ready(()=>{
 
 // navigation active elemnt
 $(".nav-item .nav-link").on("click"||"hover", function(){
  $(".nav-item").find(".active").removeClass("active");
  $(this).addClass("active");
});
//  year change in copyright

document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()));

  var mySwiper = new Swiper ('.swiper-container', {
      effect: 'cube',
      grabCursor: false,
      cubeEffect: {
          shadow: true,
          slideShadows: true,
          shadowOffset: 20,
          shadowScale: 0.94,
      },
      autoplay: {
          delay: 6000,
          disableOnInteraction: false,
      },
      speed: 1500,
      pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },

  })
 
//=====dropdown on hover
$('.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
});  
//=====JS Collapse naviagtion links==
$('.js-scroll-trigger').click(function() {
  $('.navbar-collapse').collapse('hide');
});
const counters = document.querySelectorAll('.counter');
const speed=9000;

counters.forEach(counter => {
  counter.innerHTML="0"
	const updateCount = () => {
		const target = +counter.getAttribute('data-target');
		const count = +counter.innerText;

		// Lower inc to slow and higher to slow
		const inc = target/speed;

		// console.log(inc);
		// console.log(count);

		// Check if target is reached
		if (count < target) {
			// Add inc to count and output in counter
			counter.innerText =`${Math.ceil(count + inc)}`;
			// Call function every ms
			setTimeout(updateCount, 20);
		} else {
			counter.innerText = target;
		}
	};

	updateCount();
});

});




// ====BACK TO TOP BTN=====


const backToTopButton = document.querySelector("#back-to-top-btn");

window.addEventListener("scroll", scrollFunction);

function scrollFunction() {
  if (window.pageYOffset > 300) { // Show backToTopButton
    if(!backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnExit");
      backToTopButton.classList.add("btnEntrance");
      backToTopButton.style.display = "inline-flex";
    }
  }
  else { // Hide backToTopButton
    if(backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnEntrance");
      backToTopButton.classList.add("btnExit");
      setTimeout(function() {
        backToTopButton.style.display = "none";
      }, 250);
    }
  }
}

backToTopButton.addEventListener("click", smoothScrollBackToTop);

// function backToTop() {
//   window.scrollTo(0, 0);
// }

function smoothScrollBackToTop() {
  const targetPosition = 0;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  const duration = 750;
  let start = null;

  window.requestAnimationFrame(step);

  function step(timestamp) {
    if (!start) start = timestamp;
    const progress = timestamp - start;
    window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
    if (progress < duration) window.requestAnimationFrame(step);
  }
}

function easeInOutCubic(t, b, c, d) {
	t /= d/2;
	if (t < 1) return c/2*t*t*t + b;
	t -= 2;
	return c/2*(t*t*t + 2) + b;
};
