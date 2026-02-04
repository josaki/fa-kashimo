<?php include(TEMPLATEPATH . '/parts/common.php'); ?>
<?php get_header(); ?>

<div class="container">

  <?php
  //パスワード保護されていない時
  if( !post_password_required( $post->ID ) ) {
    
    // BLOG
    // ==================================================
    if( $post_type == 'blog' ){
      include(TEMPLATEPATH . '/singles/single-blog.php');

    // NEWS
    // ==================================================
    } elseif( $post_type == 'news' ) {
      include(TEMPLATEPATH . '/singles/single-news.php');

    }
  
  // パスワード保護されている時
  } else {

    include(TEMPLATEPATH . '/singles/single-pass.php');
  
  } ?>

</div>

<?php get_footer(); ?>