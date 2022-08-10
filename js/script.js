//スワイパー
const swiper = new Swiper('.swiper', {
    autoplay: {
      delay: 3000,
    },

  loop: true,
  effect: 'coverflow',
  coverflowEffect: {
    rotate: 0,
    slideShadows: false,
    depth: 0,
    stretch: 10,
    modifier: 1,
    scale: 1,
  },
  slidesPerView: 1,
  centeredSlides: true,
  spaceBetween: 100,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },


  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    601: {
      slidesPerView: 1.4,
    },
  },
});


//スムーススクロール
jQuery('a[href^="#"]').on('click', function () {
  var header = jQuery('.header').innerHeight();
  var id = jQuery(this).attr('href');
  var position = 0;
  if (id != '#') {
    var position = jQuery(id).offset().top - header;
  }
  jQuery('html,body').animate(
    {
      scrollTop: position,
    },
    300
  );
});


//ヘッダーの背景色変更
jQuery(window).on('scroll', function () {
  // var fv = jQuery('.fv').innerHeight() - 120;
  // if (fv < jQuery(this).scrollTop()) {
    var scroll = jQuery(window).scrollTop();
    if (300 < scroll) {
    jQuery('.header').addClass('is-active');
  } else {
    jQuery('.header').removeClass('is-active');
  }
});


//ハンバーガーメニュー
jQuery('.drawer-icon').on('click', function (e) {
  e.preventDefault();
  jQuery('.drawer-contents').toggleClass('is-active');
  jQuery('body').toggleClass('is-fixed');

  return false;
});
jQuery(
  '.drawer-content__item a, .drawer-contents__box, .drawer-contents__logo a'
).on('click', function () {
  jQuery('.drawer-contents').removeClass('is-active');
  jQuery('body').removeClass('is-fixed');
});


//他ページからの遷移
jQuery(window).on('load', function() {
  let headerHeight = jQuery('.header').outerHeight();
  let urlHash = location.hash;
  if (urlHash) {
    let position = jQuery(urlHash).offset().top - headerHeight;
    jQuery('html, body').animate({ scrollTop: position }, 300);
  }
});


//タイトルの出現
jQuery(window).on('load', function() {
  jQuery('.main-title').addClass('is-animated')
});


//線の延長
jQuery(window).scroll(function() {
  jQuery('.border-line').each(function() {
    var position = jQuery(this).offset().top;
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();

    if (scroll > position - windowHeight + 200){
      jQuery(this).addClass('is-active');
    }
  })
})


//サービスふわっと
if (window.matchMedia( "(max-width: 768px)" ).matches) {
  jQuery(window).scroll(function() {
    jQuery('.service-contents__list').each(function() {
      var position = jQuery(this).offset().top;
      var scroll = jQuery(window).scrollTop();
      var windowHeight = jQuery(window).height();

      if(scroll > position - windowHeight) {
        jQuery(this).addClass('is-active');
      }
    })
  })
}

if (jQuery('.mw_wp_form').hasClass('mw_wp_form_input')) {
  jQuery('.contact-contents__progress span:first-child').addClass('current');
  jQuery('.contact-contents__text-input').addClass('current');
}
if (jQuery('.mw_wp_form').hasClass('mw_wp_form_confirm')) {
  jQuery('.contact-contents__progress span:nth-child(2)').addClass('current');
  jQuery('.contact-contents__text-confirm').addClass('current');
}
if (jQuery('.mw_wp_form').hasClass('mw_wp_form_complete')) {
  jQuery('.contact-contents__progress span:last-child').addClass('current');
  jQuery('.contact-contents__text-complete').addClass('current');
}
