<?php include(TEMPLATEPATH . '/parts/common.php'); ?>
<?php get_header(); ?>

<?php 
  $s = $_GET['s'];
  $catnum = $_GET['catnum'];
  $hoge_field = $_GET['hoge_field'];

  if($catnum[0]!='') {
    $tax_array[] = array(
      'taxonomy'=>'category',
      'terms'=> $catnum,
      'include_children'=> true,
      'field'=>'term_id',
      'relation'=>'AND'
    );
  }

  $meta_array['relation'] = 'AND';

  if($hoge_field[0]!='') {
    $meta_array[] = array(
      'relation' => 'OR',
      array(
        'key' => 'hoge',
        'value' => $hoge_field
      ),
    );
  }

  $search_query = new WP_Query( array(
    'post_type' => 'post',
    'tax_query' => $tax_array,
    'meta_query' => $meta_array,
    's' => $s,
    'paged' => $paged,
  ));
?>

<div class="container">
  <div class="inner clearfix">

    <main class="main_column">
      <?php if ($search_query->have_posts()) : ?>
        <?php while ($search_query->have_posts()) : $search_query->the_post(); ?>
          <?php get_template_part('parts/post-blog'); ?>
        <?php endwhile; ?>
      <?php if(function_exists('wp_pagenavi')) : wp_pagenavi(array('query'=>$search_query)); endif; ?>
      <?php else: ?>
        <p class="catch-copy">「<?php the_search_query(); ?>」の検索結果は見つかりませんでした。</p>
        <a href="/">トップページに戻る</a>
      <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>
    
  </div>
</div>
<?php get_footer(); ?>