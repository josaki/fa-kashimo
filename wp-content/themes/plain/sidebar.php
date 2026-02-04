<?php include(TEMPLATEPATH . '/parts/common.php'); ?>

<?php if ( $post_type == 'news' ): ?>
  <div class="search_btn fnt-bold flx flx-stt-ctr">
    <div class="search_btn--plus por poa-bf bg_clr-def-bf"><span class="line bg_clr-main ts-fast"></span><span class="line bg_clr-main ts-fast"></span></div>
    お知らせを絞り込む
  </div>
<?php endif ?>

<aside class="side_column">
  <div class="side_column--in">

    <?php
    // BLOG
    // ==================================================
    if( $post_type == 'blog' ){
      include(TEMPLATEPATH . '/sidebars/sidebar-blog.php');

    // NEWS
    // ==================================================
    } elseif ( $post_type == 'news' ) {
      include(TEMPLATEPATH . '/sidebars/sidebar-news.php');
    } ?>

  </div>
</aside>


<?php if ( $post_type == 'blog' ): ?>

  <div class="btn-fix_btm xspc-show bg_clr-main poa-bf bg_clr-wht-bf txt-ctr ts ts-bf">
    <?php
    // BLOG
    // ==================================================
    if ( $post_type == 'blog' ) {
      $btn_txt = '<span>他のブログをみる</span>';
    }
    ?>
    <p class="flx flx-ctr"><?php echo $btn_txt; ?></p>
  </div>

<?php endif; ?>