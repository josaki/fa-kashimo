<?php include(TEMPLATEPATH . '/parts/common.php'); ?>
<?php get_header(); ?>

<div class="container">

  <?php
  // BLOG
  // ==================================================
  if( $post_type == 'blog' ){
    include(TEMPLATEPATH . '/archives/archive-blog.php');

  // NEWS
  // ==================================================
  } elseif( $post_type == 'news' ) {
    include(TEMPLATEPATH . '/archives/archive-news.php');

  // hoge（複製用）
  // ==================================================
  } elseif( $post_type == 'hoge' ) {
    include(TEMPLATEPATH . '/archives/archive-hoge.php');

  } ?>

</div>

<?php get_footer(); ?>