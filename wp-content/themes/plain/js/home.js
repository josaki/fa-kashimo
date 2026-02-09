$(window).on('load', function () {

  /* slick
  *************************************************** */
    prev_arrow = '<div class="slick-prev ts"><svg viewBox="0 0 22 22" class="clr-def" width="24" height="24"><use xlink:href="#ico-arrow"></use></svg></div>';
    next_arrow = '<div class="slick-next ts"><svg viewBox="0 0 22 22" class="clr-def" width="24" height="24"><use xlink:href="#ico-arrow"></use></svg></div>';
    $('.img_slider').slick({
      autoplay: false,
      speed: 600,
      dots: false,
      prevArrow: prev_arrow,
      nextArrow: next_arrow,
      centerMode: true,
      centerPadding: 0,
      pauseOnHover: false,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplaySpeed: 4000,
      pauseOnFocus: false,
      pauseOnHover: false,
      infinite: true,
    });

    $(".hero_slider")
    .on("init", function () {
      $('.slick-slide[data-slick-index="0"]').addClass("add-anm");
    })
    .slick({
      autoplay: true,
      fade: true,
      arrows: false,
      dots: true,
      speed: 2000,
      autoplaySpeed: 4000,
      pauseOnFocus: false,
      pauseOnHover: false,
      infinite: true,
      customPaging : function(slider, i) {
        return '<div class="slick-dot flx flx-ctr por"><span class="cir ts por poa-bf ts-bf op25-bf bg_clr-def-bf poa-af bg_clr-main-af op0-af ts-af"></span><span class="tri bg_clr-main op0 ts"></span></div>';
      },
    })
    .on({
      beforeChange: function (event, slick, currentSlide, nextSlide) {
        $(".slick-slide", this).eq(nextSlide).addClass("add-anm");
        $(".slick-slide", this).eq(currentSlide).addClass("rm-anm");
      },
      afterChange: function () {
        $(".rm-anm", this).removeClass(
          "rm-anm add-anm"
        );
      },
    });

  /* gsap scroll bar
  *************************************************** */
    const forestryIn = document.querySelector('#forestry .forestry--in[data-gsap]');
    const scrollArea = document.querySelector('#forestry .scroll_area');

    const scrollIn = scrollArea.querySelector('.scroll_area--in');
    const fill     = scrollArea.querySelector('.line_fill');
    const circle   = scrollArea.querySelector('.circle');

    // 初期状態
    gsap.set(fill,   { scaleY: 0, transformOrigin: 'top' });
    gsap.set(circle, { y: 0 });

    let maxY = 0;

    function recalc() {
      const trackH  = scrollIn.clientHeight;
      const circleH = circle.offsetHeight;
      maxY = Math.max(0, trackH - circleH);
    }

    recalc();

    // scrub対策：高速setter
    const setFillScale = gsap.quickSetter(fill, 'scaleY');
    const setCircleY   = gsap.quickSetter(circle, 'y', 'px');

    ScrollTrigger.create({
      trigger: forestryIn,
      start: forestryIn.getAttribute('data-start') || 'top top',
      end:   forestryIn.getAttribute('data-end')   || '+=300%',
      scrub: true,
      invalidateOnRefresh: true,

      onUpdate(self) {
        setFillScale(self.progress);
        setCircleY(maxY * self.progress);
      },

      onRefresh(self) {
        recalc();
        setFillScale(self.progress);
        setCircleY(maxY * self.progress);
      }
    });

    // iOS / viewport変化対策
    window.addEventListener('resize', () => {
      recalc();
      ScrollTrigger.refresh();
    });

});