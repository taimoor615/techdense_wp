// Tech Stack Owl Carousel
jQuery('.techstack-carousel').owlCarousel({
loop:true,
margin:40,
nav:true,
dots:false,
navText:["<img src='images/carousel-arrow-left.svg' class='img-fluid'/>","<img src='images/carousel-arrow.svg' class='img-fluid'/>"],
responsive:{
    0:{
        items:1,
        dots:true,
        nav:false,
    },
    767:{
        items:2
    },
    1199:{
      items:2.5
    },
    1399:{
      items:3.5
    }
}
});

jQuery(document).ready(function(){
const logos = document.querySelectorAll('.logo-wrapper');
gsap.set(logos, { autoAlpha: 2 })

logos.forEach((logo, i) => {
  gsap.set(logo, { xPercent: 100 * i });
});

// since the grid is 5 across, you want any amount more than 5 to enable animation
if (logos.length > 5) {
  // wrap function for looping
  const logosWrap = gsap.utils.wrap(-100, ((logos.length - 1) * 100));
  
  // how long it takes for each logo to move 100%;  
  const duration = logos.length * 1.5;

  gsap.to(logos, {
    xPercent: `-=${logos.length * 100}`,
    duration,
    repeat: -1,
    ease: 'none',
    modifiers: {
      // run xPercent through the wrap function
      xPercent: xPercent => logosWrap(parseFloat(xPercent))
    }
  });

}


});

jQuery(document).ready(function(){
  jQuery(".toggle-btn-wrapper svg").click(function(){
    // alert();
    jQuery(".menu-list-wrapper").slideToggle();
  });
  jQuery(".menu-item-has-children a").click(function(){
    jQuery(this).toggleClass("toggled");
    jQuery(".sub-menu").slideToggle();
  })
});