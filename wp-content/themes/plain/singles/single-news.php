<div class="inner sect_pdg">
  <div class="fix_wrap flx flx-btw-stt flx-xssp-blc">
    <main class="main_column">
      <article class="<?php echo $detail_info['post_type']; ?>--info" id="<?php echo $detail_info['post_type']; ?>--info">
        <p class="post--date"><?php echo date('Y.m.d', strtotime($post->post_date)); ?></p>
        <h2 class="sect_ttl btm24"><?php the_title(); ?></h2>
        <?php if ( has_post_thumbnail() ):
          $thumbnail_id = get_post_thumbnail_id();
          $eyecatch = wp_get_attachment_image_src( $thumbnail_id, 'large' );
          list( $eyecatch_url, $width, $height ) = $eyecatch;
          $eyecatch_alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
          if ( !$eyecatch_alt ) {
            $eyecatch_alt = get_the_title();
          }
        ?>
          <div class="eyecatch btm16">
            <img src="<?php echo $eyecatch_url; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" alt="<?php echo $eyecatch_alt; ?>">
          </div>
        <?php endif ?>
        <div class="mce-content-body"><?php the_content(); ?></div>
      </article>
      <!-- ページ送り -->
      <?php
      $args = array(
        'class' => '', 'hov_area' => false,
        'label' => '一覧へ戻る',
        'href' => home_url().'/'.$detail_info['post_type'].'/', 'target' => '',
        'txt_clr' => 'def', 'txt_clr-hov' => 'wht',
        'bg_clr' => 'wht', 'bg_clr-bf' => 'main',
      );
      get_template_part('/parts/btn-def', null, $args);
      ?>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
