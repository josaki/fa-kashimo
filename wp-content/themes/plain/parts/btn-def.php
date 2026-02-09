<?php
if ( $args['hov_area'] ){
  $stt_tag = 'span';
  $end_tag = 'span';
} else {
  $stt_tag = 'a href="'.$args['href'].'"';
  $end_tag = 'a';
}
$target = '';
if ( $args['target'] ) {
  $target = ' target="_'.$args['target'].'" rel="nofollow"';
}
?>
<div class="btn btn-def hov_area <?php echo $args['class']; ?>">
  <<?php echo $stt_tag; ?> class="btn--in flx flx-ctr por clr-<?php echo $args['txt_clr']; ?> hov-clr-<?php echo $args['txt_clr-hov']; ?>"<?php echo $target; ?>>
    <span class="ico_wrap bg_clr-<?php echo $args['main_clr']; ?> flx flx-ctr ts">
      <?php if ( $args['target'] ): ?>
        <span class="ico ico-outlink bdr_clr-wht-bf bdr_clr-wht-af"></span>
      <?php else: ?>
        <svg viewBox="<?php echo VB_ICO; ?>" class="svg_ico svg_ico-<?php echo $args['ico']; ?> clr-wht" width="10" height="10"><use xlink:href="#ico-<?php echo $args['ico']; ?>"></use></svg>
      <?php endif ?>
    </span>
    <span class="txt ts fnt-serif w-sb ls-300"><?php echo $args['label']; ?></span>
    <span class="bg poa poa-bf bdr_clr-<?php echo $args['main_clr']; ?>-bf poa-af bg_clr-<?php echo $args['bg_clr-hov']; ?>-af op0-af ts-bf ts-af"></span>
  </<?php echo $end_tag; ?>>
</div>

<?php if ( $args['hov_area'] ): ?>
  <a href="<?php echo $args['href']; ?>" class="poa zi1"<?php echo $target; ?>></a>
<?php endif; ?>