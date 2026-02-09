$(function(){

  $body = $('body');

  /* 現在のURLに ?debug=true が無ければ何もしない
  ********************************************** */
    if (new URLSearchParams(window.location.search).get('debug') === 'true') {
      $('a[href]').each(function(){
        var raw = $(this).attr('href');
        if (!raw) return;
        if (raw.startsWith('#') || raw.startsWith('mailto:') || raw.startsWith('tel:') || raw.startsWith('javascript:')) return;
        var url;
        try { url = new URL(raw, window.location.href); } catch(e) { return; }
        if (!url.hostname.endsWith('grow-test.net')) return;
        if (url.searchParams.has('debug')) return;
        url.searchParams.set('debug', 'true');
        $(this).attr('href', url.toString());
      });
    }

  /* ページ遷移
  ********************************************** */
    $(document).on('click','a:not([href^="#"]):not([target]):not([href^="tel:"]):not(.no_link):not([href^="javascript:void(0)"])', function(e){
      e.preventDefault();
      url = $(this).attr('href');
      if (url !== '') {
        $body.removeClass('mov_in');
        setTimeout(function(){
          window.location = url;
        }, 800);
      }
      return false;
    });
    window.onpageshow = function(event) {
      if (event.persisted) {
         window.location.reload();
      }
    };

  /* telタグ例外処理
  ********************************************** */
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0){
      $('a[href ^= "tel:"]').each(function(){
        $this = $(this);
        if ( $this.hasClass('flx') ) {
          $this.css({'pointerEvents':'none'}).removeAttr('onclick');
        } else {
          $this.css({'pointerEvents':'none','display':'inline-block'}).removeAttr('onclick');
        }
      });
    }

  /* スムーススクロール
  ********************************************** */
    $('a.smooth[href^="#"]').on('click',function(){
      var speed = 400;
      var href= $(this).attr('href');
      var target = $(href == '#' || href == '' ? 'html' : href);
      var mgn = $(this).data('mgn');
      if ( mgn == 'head' ) {
        $mgn_head = $('.header').height();
      } else {
        $mgn_head = 0;
      }
      var position = target.offset().top - $mgn_head;
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
    });

  /* scrollでclass付与
  ********************************************** */
    $(window).on('scroll',function(){
      scroll_top = $(this).scrollTop();
      if (scroll_top > 200) {
        $body.addClass('scrolled');
      } else {
        $body.removeClass('scrolled');
      }
    });

  /* gnav_btnクリックでheaderにactive付与
  ********************************************** */
    $('.gnav_btn').on('click',function(){
      $('.header').toggleClass('active');
    });

  /* tap_area functions
  ********************************************** */
    $('.tap_area-next').on('click',function(){
      $(this).siblings('.gnav_sub').addClass('is_show');
      $(this).closest('.gnav','.gnav_list--item.has_sub').addClass('sub_show');
    });
    $('.tap_area-prev').on('click',function(){
      $(this).closest('.gnav_sub').removeClass('is_show');
      $(this).closest('.gnav','.gnav_list--item.has_sub').removeClass('sub_show');
    });
    $(document).on("touchstart", start_check);
    $(document).on("touchmove", move_check);
    $(document).on("touchend", end_check);
    var movY,movX, posY, posX;
    function start_check(event) {
      posY = getY(event);
      posX = getX(event);
      movY = '';
      movX = '';
      msgY = '';
      msgX = '';
    }
    function move_check(event) {
      if (posX - getX(event) > 70) {
        movX = "lft";
      }
      else if (posX - getX(event) < -70) {
        movX = "rgt";
      }
      if (posY - getY(event) > 70) {
        movY = "top";
      }
      else if (posY - getY(event) < -70) {
        movY = "btm";
      }
    }
    function end_check(event) {
      if ( $('.gnav').hasClass('sub_show') ) {
        if (movX == "rgt") {
          $('.gnav_sub').removeClass('is_show');
          $('.gnav').removeClass('sub_show');
          $('.gnav_list--item.has_sub').removeClass('sub_show');
        }
      }
    }
    function getY(event) {
      return (event.originalEvent.touches[0].pageY);
    }
    function getX(event) {
      return (event.originalEvent.touches[0].pageX);
    }

  /* acod_arrow
  ********************************************** */
    $(document).on('click','.acod_arrow',function(){
      $(this).closest('.gnav_list--item').toggleClass('sub_show');
      $(this).siblings('.gnav_sub').slideToggle(400);
    });

  /* View trigger
  ********************************************** */
    var $win = $(window);
    var ticking = false;

    function inViewport($el, offset) {
      var winTop = $win.scrollTop();
      var winBottom = winTop + $win.height();

      var elTop = $el.offset().top;
      var elBottom = elTop + $el.outerHeight();

      return (elTop + offset < winBottom) && (elBottom - offset > winTop);
    }

    function checkVisible() {
      $('[data-trigger]').each(function () {
        var $el = $(this);
        var offset = parseInt($el.data('offset'), 10);
        if (isNaN(offset)) offset = 0;

        // ループ挙動の判定
        var loopOn  = $el.is('[data-loop_on]');                  // 繰り返し
        var loopOff = $el.is('[data-loop_off]') || !loopOn;      // 指定なし=デフォルトでoff

        // 1度だけの要素で、すでに処理済みならスキップ
        if (loopOff && $el.data('vt_done')) {
          return;
        }

        var inside = inViewport($el, offset);

        if (inside) {
          if (!$el.hasClass('visible')) {
            $el.addClass('visible');
          }
          if (loopOff) {
            // 一度だけ付与したら「処理済み」に
            $el.data('vt_done', true);
          }
        } else {
          if (loopOn) {
            // 繰り返し要素だけ可視範囲外で外す
            $el.removeClass('visible');
          }
          // loopOff は外れてもクラスは維持
        }
      });
    }

    function onScrollOrResize() {
      if (ticking) return;
      ticking = true;
      window.requestAnimationFrame(function () {
        checkVisible();
        ticking = false;
      });
    }

    $(function () {
      $win.on('scroll resize', onScrollOrResize);
      checkVisible(); // 初回実行
    });

  /* tablet
  ********************************************** */
    //if ( ipad == true  ) {
      // <?php // メガメニューのあるナビのaタグを無効化 ?>
      // $('.gnav_list--item.has_sub .gnav_list--item_txt a').attr('href','javascript:void(0);')
      // <?php // ipad用のメガメニュー表示classの削除を関数化 ?>
      // function class_remove() {
      //   $('.gnav_list--item').removeClass('is_show');
      // }
      // $('.gnav_list--item.has_sub').on('touchstart',function(){
      //   class_remove();
      //   $(this,'.gnav_sub').addClass('is_show');
      // });
      // $(document).on('touchstart',function(event) {
      //   if( !$(event.target).closest('.gnav_list--item').length ) {
      //     class_remove();
      //   }
      // });
    //}

})


$(window).on('load',function(){

  /* windowの高さでclass付与（段階式）
  ********************************************** */
    var heightClasses = [
      { max: 560,  cls: 'is-h560' },
      { max: 768,  cls: 'is-h768' },
      { max: 900,  cls: 'is-h900' },
      { max: 1024, cls: 'is-h1024' }
    ];

    function toggleClassByHeight() {
      var h = $(window).height();

      // まず全部消す
      for (var i = 0; i < heightClasses.length; i++) {
        $body.removeClass(heightClasses[i].cls);
      }

      // 条件に合うものを付与（複数付ける方式）
      for (var i = 0; i < heightClasses.length; i++) {
        if (h <= heightClasses[i].max) {
          $body.addClass(heightClasses[i].cls);
        }
      }
    }

    toggleClassByHeight();

    var timer = null;
    $(window).on('resize', function () {
      if (timer) clearTimeout(timer);
      timer = setTimeout(toggleClassByHeight, 100);
    });


  /* scrollTrigger
  ********************************************** */
    let mm = gsap.matchMedia();

    /* prlx
    ********************************************** */
      $prlx = $('.prlx');
      if ( $prlx.length ) {
        const prlxs = gsap.utils.toArray(".prlx");
        console.log(prlxs);
        prlxs.forEach((block) => {
          const prlx_obj = block.querySelector(".prlx_obj");
          gsap.fromTo(
            prlx_obj,
            {
              yPercent: prlx_obj.dataset.stt,
            },
            {
              yPercent: prlx_obj.dataset.end,
              ease: "none",
              scrollTrigger: {
                trigger: prlx_obj,
                start: "top bottom",
                end: "bottom top",
                scrub: 0.4,
              },
            }
          );
        });
      }

    /* gsap
    ********************************************** */
      function initSectionProgress(selector = '[data-gsap]', configure) {
        var sections = document.querySelectorAll(selector);
        sections.forEach(function(section){
          // 累積表示
          var showItems = Array.from(section.querySelectorAll('[data-show]')).map(function(el){
            var th = Math.max(0, Math.min(1, parseFloat(el.getAttribute('data-show')) || 0));
            return [el, th];
          });

          // 段階表示（グループごと）
          var groups = {};
          Array.from(section.querySelectorAll('[data-step][data-group]')).forEach(function(el){
            var g  = el.getAttribute('data-group');
            var th = Math.max(0, Math.min(1, parseFloat(el.getAttribute('data-step')) || 0));
            (groups[g] || (groups[g] = [])).push({ el: el, th: th });
          });
          Object.keys(groups).forEach(function(k){
            groups[k].sort(function(a,b){ return a.th - b.th; });
          });

          var prevShow = new WeakMap();
          var prevStep = {};

          var start = section.getAttribute('data-start') || 'top top';
          var end   = section.getAttribute('data-end')   || '+=108%';
          var pin   = section.hasAttribute('data-pin');
          var scrubAttr = section.getAttribute('data-scrub');
          var scrub = scrubAttr == null ? true : (scrubAttr === '' ? true : (parseFloat(scrubAttr) || true));

          var tl = gsap.timeline({
            scrollTrigger: {
              trigger: section,
              start: start,
              end: end,
              scrub: scrub,
              pin: pin,
              anticipatePin: 1,
              invalidateOnRefresh: true,

              // 進行中の表示制御（あなたの既存ロジック）
              onUpdate: function(self){
                var p = self.progress;

                // 累積表示
                for (var i = 0; i < showItems.length; i++) {
                  var el = showItems[i][0], th = showItems[i][1];
                  var want = p >= th;
                  if (prevShow.get(el) !== want) {
                    el.classList.toggle('is-show', want);
                    prevShow.set(el, want);
                  }
                }

                // 段階表示：各groupで1つだけ表示
                Object.keys(groups).forEach(function(g){
                  var list = groups[g], idx = -1;
                  for (var j = 0; j < list.length; j++) if (p >= list[j].th) idx = j;
                  if (prevStep[g] === idx) return;
                  for (var k = 0; k < list.length; k++) list[k].el.classList.toggle('is-show', k === idx);
                  prevStep[g] = idx;
                });
              },

              // ここから end 用のクラス制御
              onLeave: function() {
                // end を超えたら付与
                section.classList.add('is-end');
              },
              onEnterBack: function() {
                // end 側から戻ってきたら外す
                section.classList.remove('is-end');
              },
              onRefresh: function(self) {
                // リサイズ等の再計算後に状態を正す
                section.classList.toggle('is-end', self.progress >= 1);
              }
            }
          });

          // セクション固有のTweenを追加したい時用のフック
          if (typeof configure === 'function') {
            configure(tl, section);
          }
        });
      }

      initSectionProgress('[data-gsap]', function(tl, section){
      });

    mm.add('(max-width: 1064px)', () => {
    const targets = document.querySelectorAll('[data-gsap] [data-show], [data-gsap] [data-step]');
    targets.forEach(el => el.classList.remove('no_trans'));
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-show');
        io.unobserve(entry.target);
      });
    }, {
      root: null,
      rootMargin: '0px 0px -20% 0px',
      threshold: 0.15
    });

    targets.forEach(el => io.observe(el));
    return () => {
      io.disconnect();
      targets.forEach(el => {
        el.classList.remove('is-show');
      });
    };
  });

});