<!-- start new -->
<section class="side_sect side--new" id="side--new">
  <h2 class="side--ttl">最新記事<small>NEW POST</small></h2>
  <div class="posts posts-side">
    <?php 
    $side_posts = new WP_Query( array(
      'posts_per_page' => 5,
      'post_type' => $detail_info['post_type'],
      'order' => 'DESC',
      'orderby' => 'date'
    ));
    ?>
    <?php while ( $side_posts->have_posts() ): $side_posts->the_post(); ?>
      <article class="post flx">
        <?php
        $src = '';
        $no_img = '';
        if( has_post_thumbnail() ){
          $thumbnail_id = get_post_thumbnail_id($post->ID);
          $src_info = wp_get_attachment_image_src($thumbnail_id, 'medium');
          $src = $src_info[0];
        } elseif ( $first_image = catch_that_image() ) {
          $src = $first_image ;
        } else {
          $no_img = ' no_img';
        }
        ?>
        <div class="post--img por">
          <div class="poa img_src ts-fast<?php echo $no_img; ?>"<?php if ( $src ): ?> style="background-image: url(<?php echo $src; ?>);"<?php endif ?>></div>
        </div>
        <div class="txtarea">
          <div class="post--date"><?php echo date('Y.m.d', strtotime($post->post_date)); ?></div>
          <h3 class="post--ttl"><a href="<?php the_permalink(); ?>" class="post--link"><?php the_title(); ?></a></h3>
        </div>
      </article>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
<!-- end new -->

<!-- start cat -->
<section class="side_sect side--cat" id="side--cat">
  <h2 class="side--ttl">カテゴリ<small>CATEGORY</small></h2>
  <ul class="side--list">
  <?php
  $cats = get_terms($detail_info['post_type'].'_category',array(
    'hide_empty' => true, // 空のタームを返さない
    'parent' => 0, // 直近の子タームを返す
  )); //カテゴリー
  foreach($cats as $cat):
  ?>
    <li>
      <?php
      $cat_name = $cat->name;
      $cat_link = get_term_link($cat);
      ?>
      <a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a><?php
      $child_cats = get_terms($detail_info['post_type'].'_category', array(
        'hide_empty' => true, // 空のタームを返さない
        'parent' => $cat->term_id,
      ));
      if($child_cats):
      ?>
        <ul class="side--link_list">
          <?php foreach ($child_cats as $child_cat): ?>
            <?php
            $child_cat_name = $child_cat->name;
            $child_cat_link = get_term_link($child_cat);
            ?>
            <li class="sidebar-child_cat"><a href="<?php echo $child_cat_link; ?>"><?php echo $child_cat_name; ?></a></li>
          <?php endforeach ?>
        </ul>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
  </ul>
</section>
<!-- end cat -->

<!-- start archive -->
<section class="side_sect side--archive" id="side--archive">
  <h2 class="side--ttl">過去記事<small>ARCHIVE</small></h2>
  <?php include(TEMPLATEPATH . '/parts/archive-date.php'); ?>
</section>
<!-- end archive -->