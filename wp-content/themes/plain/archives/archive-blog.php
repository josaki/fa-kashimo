<div class="inner sect_pdg">
  <?php if (have_posts()) : ?>
    <div class="fix_wrap flx flx-btw-stt flx-xspc-blc">
      <main class="main_column">
        <div class="posts posts-<?php echo $detail_info['post_type']; ?>">
          <?php
          while ( have_posts() ){
            the_post();
            get_template_part('parts/post-blog');
          }
          ?>
        </div>
        <?php
        global $wp_query;
        $paged     = get_query_var('paged') ? (int) get_query_var('paged') : 1;
        $max_pages = (int) $wp_query->max_num_pages;
        ?>
        <?php if ( $max_pages > 1 ): ?>
          <div class="pagenavi">
            <div class="pagenavi-prev_next flx flx-ctr btm32">

              <?php
              // 前のページへボタン
              $prev_disabled = ($paged <= 1);
              $args_prev = array(
                'class'  => $prev_disabled ? 'btn-prev btn-back disabled' : 'btn-prev',
                'hov_area' => false,
                'label'  => '前のページへ',
                'href'   => $prev_disabled ? '' : get_pagenum_link($paged - 1),
                'target' => '',
                'txt_clr'    => 'def',
                'txt_clr-hov'=> 'wht',
                'bg_clr'     => 'wht',
                'bg_clr-bf'  => 'main',
              );
              get_template_part('/parts/btn-def', null, $args_prev);

              // 次のページへボタン
              $next_disabled = ($paged >= $max_pages || $max_pages === 0);
              $args_next = array(
                'class'  => $next_disabled ? 'btn-next btn-back disabled' : 'btn-next',
                'hov_area' => false,
                'label'  => '次のページへ',
                // ★ ここは「+1」にしておく（今は -1 になってた）
                'href'   => $next_disabled ? '' : get_pagenum_link($paged + 1),
                'target' => '',
                'txt_clr'    => 'def',
                'txt_clr-hov'=> 'wht',
                'bg_clr'     => 'wht',
                'bg_clr-bf'  => 'main',
              );
              get_template_part('/parts/btn-def', null, $args_next);
              ?>

            </div>

            <?php if ( function_exists('wp_pagenavi') ) { wp_pagenavi(); } ?>
          </div>
        <?php endif; ?>
      </main>
      <?php get_sidebar(); ?>
    </div>
  <?php else: ?>
    <p class="no_post">記事はみつかりません。</p>
  <?php endif; ?>
</div>