<?php get_header(); ?>

<main class="sect_pdg">
  <div class="inner txt-ctr">
    <p class="btm40">あなたがアクセスしようとしたページは削除されたかURLが変更されています。</p>
    <?php
    $args = array(
      'class' => '', 'hov_area' => false,
      'label' => 'トップページに戻る',
      'href' => home_url(), 'target' => '',
      'txt_clr' => 'def', 'txt_clr-hov' => 'wht',
      'bg_clr' => 'wht', 'bg_clr-bf' => 'main',
    );
    get_template_part('/parts/btn-def', null, $args);
    ?>
  </div>
</main>

<?php get_footer(); ?>