<div class="archive-pd">
  <div class="archive_label flx flx-btw-ctr">
    <div class="archive_label--ttl fnt-en">Year</div>
    <button class="archive_label--btn bdr_clr-main-bf fnt-en">
      <?php
      if ( is_date() ) {
        echo $detail_info['title'];
      } else {
        echo 'ALL';
      } ?>
    </button>
  </div>
  <ul class="archive_list">
    <li class="archive_list--item">
      <a href="/<?php echo $post_type; ?>/" class="fnt-en ts-fast-bf por bg_clr-main-bf">ALL</a>
    </li>
    <?php
    $year_prev = null;
    $years = $wpdb->get_results(
      "SELECT DISTINCT YEAR( post_date ) AS year,
      COUNT( id ) as post_count
      FROM $wpdb->posts
      WHERE
        post_status = 'publish'
        and post_date <= now( )
        and post_type = '$post_type'
      GROUP BY year
      ORDER BY post_date DESC"
    );
    foreach($years as $year) :?>
      <li class="archive_list--item">
        <a class="fnt-en ts-fast-bf por bg_clr-main-bf" href="/<?php echo $post_type; ?>/date/<?php echo $year->year; ?>/"><?php echo $year->year; ?>年</a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>
