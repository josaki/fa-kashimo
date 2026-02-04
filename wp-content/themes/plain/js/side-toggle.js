$(function(){

  /* btn-fix_btm
  ********************************************** */
    $('.btn-fix_btm').on('click',function(){
      $(this).toggleClass('active');
      $('.side_column').toggleClass('is_show');
    });
    $(window).on('scroll', function () {
      var doch = $(document).innerHeight();
      var winh = $(window).innerHeight();
      var bottom = doch - winh;
      if (bottom * 0.95 <= $(window).scrollTop()) {
        $('.btn-fix_btm').addClass('is_hide');
      } else {
        $('.btn-fix_btm').removeClass('is_hide');
      }
    });

  /* click時にactiveをtoggle処理
  ********************************************** */
    $archive_list = '.archive_list--ttl,.archive_label';
    function class_remove() {
      $($archive_list).stop().removeClass('active');
    }
    $($archive_list).on('click',function(){
      if ( !$(this).hasClass('active') ) {
        class_remove();
      }
      $(this).stop().toggleClass('active');
      $(this).stop().closest('.archive-pd').find('.archive_list').slideToggle(300);
      $(this).stop().siblings('.archive_month').slideToggle(300);
    });
    $(document).on('click',function(){
      if(!$(event.target).closest($archive_list).length) {
        class_remove();
      }
    });

  /* 絞り込み（SP）
  ********************************************** */
    $(document).on('click','.search_btn',function(){
      $(this).toggleClass('active');
      $(this).siblings('.side_column').find('.side_column--in').slideToggle(300);
    });

});