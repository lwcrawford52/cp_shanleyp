gsap.registerPlugin(TweenMax);

gsap.from(".fadein", {duration: 1.5, y: -0, opacity: 0.7});
gsap.from(".translate-y", {duration: 1.8, y: 50, opacity: 0.4});

jQuery.noConflict();
  jQuery(document).ready(function($){


$(".bio-accordion .accordion").click(function() {
    var content = $(this).siblings(".panel");
    if ($(this).hasClass("opened")) {
      TweenMax.to(content, 0.8, {
        height: 0,
        immediateRender: false,
        ease: Power2.easeInOut
      });
      $(this).removeClass("opened");
    } else {
      TweenMax.set(content, {
        height: "auto"
      });
      TweenMax.from(content, 1.4, {
        height: 0,
        immediateRender: false,
        ease: Power2.easeInOut
      });
      $(this).addClass("opened");
    }
  });
  })
