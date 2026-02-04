<?php include(TEMPLATEPATH . '/parts/common.php'); ?>
<?php get_header(); ?>

<main>

  <!-- start hero -->
  <section class="hero" id="hero">
    <h2 class="hero--ttl">CATCH COPY</h2>
    <img decoding="async" src="//placeholdit.imgix.net/~text?txtsize=44&amp;bg=eee&amp;txt=DUMMY&amp;w=1080&amp;h=600" width="1080" height="600" alt="">
  </section>
  <!-- end hero -->

  <!-- start lr_area -->
  <section class="lr_area" id="lr_area" data-trigger>
    <div class="inner sect_pdg">
      <h2 class="sect_ttl">セクションタイトル</h2>
      <div class="lr_bloc">
        <div class="img_area"><img loading="lazy" src="https://placehold.jp/640x400.png" alt=""></div>
        <div class="txt_area">
          <h3 class="head1">ダミータイトル</h3>
          <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
          <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
      </div>
      <div class="lr_bloc">
        <div class="img_area"><img loading="lazy" src="https://placehold.jp/640x400.png" alt=""></div>
        <div class="txt_area">
          <h3 class="head1">ダミータイトル</h3>
          <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。<br>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
          <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。</p>
        </div>
      </div>
      <?php
      $args = array(
        'class' => '', 'hov_area' => false,
        'label' => '詳しくみる',
        'href' => home_url().'/#', 'target' => '',
        'txt_clr' => 'def', 'txt_clr-hov' => 'wht',
        'bg_clr' => 'wht', 'bg_clr-bf' => 'main',
      );
      get_template_part('/parts/btn-def', null, $args);
      ?>
    </div>
  </section>
  <!-- end lr_area -->

  <!-- start home_news -->
  <section class="sect_pdg home_news" id="home_news">
    <div class="inner">
      <?php
      $news_query = new WP_Query( array(
        'post_type' => 'news',
        'posts_per_page' => 5,
      ));
      ?>
      <h2 class="sect_ttl">新着情報</h2>
      <div class="posts posts-home_news news_list">
        <?php if ($news_query) : ?>
        <?php while ( $news_query->have_posts() ): $news_query->the_post(); ?>
          <?php include(TEMPLATEPATH . '/parts/post-news.php'); ?>
        <?php endwhile; wp_reset_postdata(); ?>
        <?php else: ?>
          <p class="no_post">現在お知らせはありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- end home_news -->

  <!-- start home_blog -->
  <section class="sect_pdg home_blog" id="home_blog">
    <div class="inner">
      <?php
      $post_query = new WP_Query( array(
        'post_type' => 'blog',
        'posts_per_page' => 5,
      ));
      ?>
      <h2 class="sect_ttl">ブログ</h2>
      <div class="posts posts-blog clm clm-3">
        <?php
        if ($post_query) :
          while ( $post_query->have_posts() ):
            $post_query->the_post();
            get_template_part('parts/post-blog');
          endwhile;
          wp_reset_postdata();
        ?>
        <?php else: ?>
          <p class="no_post">現在お知らせはありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- end home_blog -->

</main>

<?php get_footer(); ?>