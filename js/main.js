// to remove and add active class to nav-links
document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        // Remove 'active' class from all links
        navLinks.forEach(function(navLink) {
          navLink.classList.remove('active');
        });
        
        // Add 'active' class to the clicked link
        this.classList.add('active');
      });
    });
  });
// to Initialize Swiper
const swiper = new Swiper('.slider-wrapper', {
    loop: true,
    grabCursor:true,
    spaceBetween:30,

//pagination
    pagination: {
        el: '.swiper-pagination',
        clickable:true,
        dynamicBullets:true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    //responsive breakpoints
    breakpoints:{
        0:{
            slidesPerView:1
        },
        768:{
            slidesPerView:2
        },
        1024:{
            slidesPerView:3
        }
    }
});