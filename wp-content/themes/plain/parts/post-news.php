<?php
$link_flg = false;
$content = get_the_content();
$out_link = get_field('out_link');
$tax_name = get_post_type($post->ID).'_category';
$terms = get_the_terms( $post->ID, $tax_name );
if ( is_array($terms) ) {
  $the_term_slug = $terms[0]->slug;
  $the_term_name = $terms[0]->name;
  $the_term_link = get_term_link($terms[0]);
}
$blank = '';
// 外部リンクチェックがある場合
if ( $out_link ) {
  $link_flg = true;
  $out_link_url = get_field('out_link_url');
  $other_window = get_field('other_window');
  $permalink = ' href="'.$out_link_url.'"';
  if ( !$permalink ) {
    $permalink = ' href="'.get_the_permalink().'"';
  }
  if ( $other_window ) {
    $blank = ' target="_blank"';
  }
}
// 本文がない場合
elseif ( !$content ) {
  $permalink = '';
}
// 外部リンクでない場合はWP詳細ページ
else {
  $link_flg = true;
  $permalink = ' href="'.get_the_permalink().'"';
}

if ( $permalink ) {
  $link_tag = 'a';
} else {
  $link_tag = 'span';
}

?>
<article class="post bdr_clr-body_lt flx flx-stt-ctr flx-wrap-c<?php if( $link_flg ){ echo ' poa-bf bg_clr-def-bf ts-fast-bf'; } else { echo ' no_hov'; } ?>">
  <p class="post--date fnt-serif fnt-xxxs ls-100"><?php echo date('Y.m.d - D', strtotime($post->post_date)); ?></p>
  <?php if ( is_array($terms) ): ?>
    <div class="post--cats por fnt-xxxs fnt-serif"><a href="<?php echo $the_term_link; ?>" class="ts-fast"><?php echo $the_term_name; ?></a></div>
  <?php endif ?>
  <h2 class="post--ttl fnt-xs">
    <<?php echo $link_tag.$permalink.$blank; ?> class="post--link<?php if( $link_flg ){ echo ' hov-clr-main ts'; } ?>">
      <?php the_title(); ?>
      <?php if ( $link_flg ): ?>
        <span class="arrow_wrap">
          <svg viewBox="<?php echo VB_ICO; ?>" class="clr-def op60" width="12" height="12"><use xlink:href="#ico-arrow"></use></svg>
        </span>
      <?php endif ?>
    </<?php echo $link_tag; ?>>
  </h2>
</article>