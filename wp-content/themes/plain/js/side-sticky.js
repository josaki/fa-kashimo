$(window).on('load',function(){

  /* サイドバー固定
  ********************************************** */
    var top_pos = $('body').hasClass('home') ? 40 : 144;

    // 各 .fix_wrap ごとに処理
    $('.fix_wrap').each(function () {
      var $wrap = $(this);
      var $side = $wrap.find('.side_column');

      // side_column が存在しなければスキップ
      if (!$side.length) return;

      // StickySidebar インスタンス生成
      var sidebar = new StickySidebar($side[0], {
        topSpacing: top_pos,
        bottomSpacing: 20,
        resizeSensor: true,
        containerSelector: '.fix_wrap',
        innerWrapperSelector: '.side_column--in'
      });

      // ページ読み込み直後に再計算
      setTimeout(function () {
        sidebar.updateSticky();
      }, 1000);

      // アーカイブ開閉イベント時にも更新
      var $archive_list = $('.archive_list--ttl, .archive_label');
      if ($archive_list.length) {
        $archive_list.on('click', function () {
          setTimeout(function () {
            sidebar.updateSticky();
          }, 600);
        });
      }
    });

});