<div class="inner sect_pdg">
  <div class="fix_wrap flx flx-btw-stt flx-xssp-blc">
    <main class="main_column">
      <article class="<?php echo $detail_info['post_type']; ?>--info btm40">
        <h2 class="head1 btm8"><?php the_title(); ?></h2>
        <div class="flx flx-btw-ctr btm16">
          <p class="post--date fnt-en"><?php echo date('Y.m.d', strtotime($post->post_date)); ?></p>
          <ul class="cat_list">
            <?php echo get_the_term_list($post->ID, $detail_info['post_type'].'_category', '<li>', '</li><li>', '</li>' ); ?>
          </ul>
        </div>
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

