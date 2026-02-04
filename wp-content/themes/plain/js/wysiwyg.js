$(function(){

  /* 記事詳細エディタのスマホ対応
  ********************************************** */
    $mce_table = $('.mce-content-body table');
    if ( $mce_table.length ) {
      $('.mce-content-body > table,.mce-content-body > table tr,.mce-content-body > table th,.mce-content-body > table td').css({
        'width':'auto',
        'height':'auto',
      });
      $mce_table.each(function() {
        var mce_content_body_width = $(this).closest('.mce-content-body').width();
        var tableWidth = $(this).width();
        if( mce_content_body_width < tableWidth - 2) {
          $(this).wrap('<div class="scroll" />');
          $(this).closest('.scroll').before('<p class="scroll--cap">横にスクロールできます→</p>');
        }
      });
    }

  /* 記事詳細エディタのYouTube iframe対応
  ********************************************** */
    $mce_iframe = $('.mce-content-body iframe');
    if ( $mce_iframe.length ) {
      $mce_iframe.each(function() {
        $mce_iframe_src = $mce_iframe.attr('src');
        if ($mce_iframe_src.indexOf("youtube") >= 0) {
          $(this).wrap('<div class="yt_wrap">');
        }
      });
    }
    

});