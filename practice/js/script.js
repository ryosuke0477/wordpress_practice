


jQuery(function () {
  jQuery('.main__question-list-q').on('click', function () {
    jQuery(this).toggleClass('active');
    jQuery(this).next().slideToggle();
  })
});

jQuery(function () {
  jQuery('#js-buttonHamburger').click(function () {
      jQuery('body').toggleClass('is-drawerActive');

      if (jQuery(this).attr('aria-expanded') == 'false') {
          jQuery(this).attr('aria-expanded', true);
      } else {
          jQuery(this).attr('aria-expanded', false);
      }

      jQuery('#spNavi').toggleClass('active');
  })
});

jQuery(function () {
  jQuery('#slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          swipe:true
        }
      },
    ]
  })
});


// $('#spNavi').on('click', function () {
//   $(this).toggleClass('active');
// });