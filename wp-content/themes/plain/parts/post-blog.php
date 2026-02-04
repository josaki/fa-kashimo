<article class="post">
  <?php
  $src = '';
  $no_img = '';
  $img_direction = '';
  if( has_post_thumbnail() ){
    $thumbnail_id = get_post_thumbnail_id($post->ID);
    $src_info = wp_get_attachment_image_src($thumbnail_id, 'medium');
    $src = $src_info[0];
    $src_w = $src_info[1];
    $src_h = $src_info[2];
    if ( $src_w >= $src_h ) {
      $img_direction = ' bg_img-hor';
    } elseif ( $src_h > $src_w ) {
      $img_direction = ' bg_img-ver';
    }
  } elseif ( $first_image = catch_that_image() ) {
    $src = $first_image ;
  } else {
    $no_img = ' no_img';
  }
  $tax_name = get_post_type($post->ID).'_category';
  $terms = get_the_terms( $post->ID, $tax_name );
  if ( is_array($terms) ) {
    $the_term_slug = $terms[0]->slug;
    $the_term_name = $terms[0]->name;
    $the_term_link = get_term_link($terms[0]);
  }
  ?>
  <div class="post--img por btm16 ofh">
    <div class="bg_img poa ts-fast <?php echo $img_direction.$no_img; ?>"<?php if ( $src ): ?> style="background-image: url(<?php echo $src; ?>);"<?php endif ?>></div>
  </div>
  <div class="post--txtarea ts btm24">
    <h2 class="head2 btm8"><a href="<?php the_permalink(); ?>" class="post--link"><?php the_title(); ?></a></h2>
    <div class="post--info flx flx-btw-ctr btm16">
      <div class="post--date fnt-en"></div>
      <?php if ( is_array($terms) ): ?>
        <div class="cat_list"><a href="<?php echo $the_term_link; ?>" class="bg_clr-main clr-wht ts-fast"><?php echo $the_term_name; ?></a></div>
      <?php endif ?>
    </div>
    <?php
    $get_content = get_the_content();
    if ( $get_content ):
    ?>
      <div class="post--txt fnt-sm">
        <?php
        remove_filter('the_content', array($GLOBALS['wp_embed'], 'autoembed'), 8); // embed無効
        if(mb_strlen($post->post_content,'UTF-8')>180){
          $content= str_replace('\n', '', mb_substr(strip_tags($post-> post_content), 0, 180,'UTF-8'));
          echo $content.'…';
        }else{
          echo str_replace('\n', '', strip_tags($post->post_content));
        }
        ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="flx flx-end-stt">
    <div class="btn por">
      <a href="<?php the_permalink(); ?>">
        <span class="por btn--txt">もっと読む</span>
      </a>
    </div>
  </div>
</article>