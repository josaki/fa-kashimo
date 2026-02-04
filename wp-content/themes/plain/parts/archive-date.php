<ul class="side--list side--list-archive">
  <?php
  $year_prev = null;
  $months = $wpdb->get_results(
    "SELECT DISTINCT MONTH( post_date ) AS month ,
    YEAR( post_date ) AS year,
    COUNT( id ) as post_count
    FROM $wpdb->posts
    WHERE
      post_status = 'publish'
      and post_date <= now( )
      and post_type = '$post_type'
    GROUP BY month , year
    ORDER BY post_date DESC"
  );
  foreach($months as $month) :
  $year_current = $month->year;?>
    <?php if ($year_current != $year_prev):?>
      <?php if ($year_prev != null) : ?>
          </ul>
        </li>
      <?php endif; ?>
      <li class="archive_list">
        <h4 class="archive_list--ttl flx flx-btw-ctr"><?php echo $month->year; ?>年</h4>
        <ul class="archive_month">
    <?php endif; ?>
          <li>
            <a href="/<?php echo $post_type; ?>/date/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
            <?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月
            (<?php echo $month->post_count; ?>)
            </a>
          </li>
    <?php $year_prev = $year_current;?>
  <?php endforeach; ?>
  <?php if ($year_prev != null) : ?>
      </ul>
    </li>
  <?php endif; ?>
</ul>