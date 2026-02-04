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
      $(this).closest('header').toggleClass('active');
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