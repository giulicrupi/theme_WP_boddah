








    if (window.matchMedia("(min-width:400px)").matches) {
    $(document).ready(function(){
      $(window).scroll(function() { // check if scroll event happened
        if ($(document).scrollTop() > 390 ) { // check if user scrolled more than 50 from top of the browser 
          // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
$(".logo-nav").addClass("mudar-logo");







        } else {


$(".logo-nav").removeClass("mudar-logo");




        }
      });
    });}



//         if (window.matchMedia("(max-width:980px)").matches) {
//     $(document).ready(function(){
//       $(window).scroll(function() { // check if scroll event happened
//         if ($(document).scrollTop() > 390 ) { // check if user scrolled more than 50 from top of the browser 
//           // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
// $(".logo-nav").addClass("mudar-logo");






//         } else {
// $(".logo-nav").removeClass("mudar-logo");




//         }
//       });
//     });}







    // if (window.matchMedia("(min-width:1080px)").matches) {
    // $(document).ready(function(){
    //   $(window).scroll(function() { // check if scroll event happened
    //     if ($(document).scrollTop() > 3080) { // check if user scrolled more than 50 from top of the browser 
    //       // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)


    //     } 
    //   });
    // });}




$('.menu').click (function(){

    $(this).toggleClass('open');
    $('.menu-princ').toggleClass('aparece');

   
});
if (window.matchMedia("(max-width:980px)").matches) {
$('.link-menu').click (function(){

    $('.menu').toggleClass('open');
    $('.menu-princ').toggleClass('aparece');
    
   
});
}
$('.cta-contato').click (function(){

    $('.bg-colorido').addClass('transicao');
    $('.contato').addClass('transicao2');
    $('.menu').toggleClass('open');
    $('.menu-princ').toggleClass('aparece');    
      setTimeout(function() {
          $(".contato").addClass('bg-transparent-preto');
      },2000);    
   
});

$('.fechar').click (function(){


$(".contato").removeClass('bg-transparent-preto');
      setTimeout(function() {
        $('.bg-colorido').removeClass('transicao');
        $('.contato').removeClass('transicao2');           
      },1300);          
   
});



     $('.botao a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href'),
      targetOffset = $(id).offset().top;
      
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});   

 


$(document).ready(function() {
  $('#fullpage').fullpage({
    anchors: ['home', 'criatividade', 'proposito', 'trabalhos', 'contato'],
    navigation: true,
    navigationPosition: 'left',
    navigationTooltips: ['Home', 'Criatividade', 'Propósito', 'Trabalhos', 'Contato'],
    scrollBar: false,
    responsiveWidth: 800,

  });
});


$(function () {
  var galleryThumbs = new Swiper(".gallery-thumbs", {
    centeredSlides: true,
    centeredSlidesBounds: true, 
    direction: "horizontal",
    spaceBetween: 20,
    slidesPerView: 3,
    freeMode: false,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
    watchOverflow: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },    
    breakpoints: {
      480: {
        direction: "vertical",
        slidesPerView: 3
      }
    }

  });
  var galleryTop = new Swiper(".gallery-top", {
    direction: "horizontal",
    spaceBetween: 10,
    // navigation: {
    //   nextEl: ".swiper-button-next",
    //   prevEl: ".swiper-button-prev"
    // },
    a11y: {
      prevSlideMessage: "Previous slide",
      nextSlideMessage: "Next slide",
    },
    keyboard: {
      enabled: true,
    },
    thumbs: {
      swiper: galleryThumbs
    }
  });
  galleryTop.on("slideChangeTransitionStart", function () {
    galleryThumbs.slideTo(galleryTop.activeIndex);
  });
  galleryThumbs.on("transitionStart", function () {
    galleryTop.slideTo(galleryThumbs.activeIndex);
  });
});





$('.slider-for .item iframe').addClass('testevideoiframe');

