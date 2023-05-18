// let header = document.querySelector('header');
// let menu = document.querySelector('#menu-icon');
// let navbar = document.querySelector('.navbar');

// window.addEventListener('scroll', () => {
//   header.classList.toggle('active', window.scrollY > 0);
// });
// menu.onclick = () => {
//   menu.classList.toggle('bx-x');
//   navbar.classList.toggle('active');
// }


var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });