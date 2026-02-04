<!-- start new -->
<div class="news_side side--year" id="side--year">
  <?php include(TEMPLATEPATH . '/parts/archive-pd.php'); ?>
</div>
<!-- end new -->

<?php
$cats = get_terms($detail_info['post_type'].'_category',array(
  'hide_empty' => true, // 空のタームを返さない
  'parent' => 0, // 直近の子タームを返す
)); //カテゴリー
if( is_array($cats) ):
?>
  <!-- start cat -->
  <div class="news_side side--cat" id="side--cat">
    <div class="archive-pd">
      <div class="archive_label flx flx-btw-ctr">
        <div class="archive_label--ttl fnt-en">Category</div>
        <button class="archive_label--btn bdr_clr-main-bf fnt-en">
          <?php
          if ( is_tax() ) {
            echo $detail_info['title'];
          } else {
            echo 'ALL';
          } ?>
        </button>
      </div>
      <ul class="archive_list">
        <?php foreach($cats as $cat): ?>
          <?php
          $cat_name = $cat->name;
          $cat_link = get_term_link($cat);
          ?>
          <li class="archive_list--item">
            <a href="<?php echo $cat_link; ?>" class="por ts-fast-bf bg_clr-main-bf"><?php echo $cat_name; ?></a><?php
            $child_cats = get_terms($detail_info['post_type'].'_category', array(
              'hide_empty' => true, // 空のタームを返さない
              'parent' => $cat->term_id,
            ));
            if($child_cats):
            ?>
              <ul class="archive_child_list">
                <?php foreach ($child_cats as $child_cat): ?>
                  <?php
                  $child_cat_name = $child_cat->name;
                  $child_cat_link = get_term_link($child_cat);
                  ?>
                  <li class="archive_child_list--item"><a href="<?php echo $child_cat_link; ?>" class="por ts-fast-bf bg_clr-main-bf"><?php echo $child_cat_name; ?></a></li>
                <?php endforeach ?>
              </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <!-- end cat -->
<?php endif; ?>