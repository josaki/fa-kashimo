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
    <span class="txt ts"><?php echo $args['label']; ?></span>
    <span class="bg poa ts bg_clr-<?php echo $args['bg_clr']; ?> hov-bg_clr-<?php echo $args['bg_clr-bf']; ?>"></span>
  </<?php echo $end_tag; ?>>
</div>

<?php if ( $args['hov_area'] ): ?>
  <a href="<?php echo $args['href']; ?>" class="poa zi1"<?php echo $target; ?>></a>
<?php endif; ?>