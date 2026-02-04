<?php
/* ##############################################################################

    nav_lst

############################################################################## */

/* nav_list
*************************************************** */
  $nav_list = array(
    'home' => array(
      'type' => 'page',
      'label-jp' => 'ホーム', 'label-en' => 'HOME',
      'desc' => false,
      'header' => true,  'footer' => true,
      'url' => LINK_HOME, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => false,
    ),
    'test' => array(
      'type' => 'page',
      'label-jp' => 'メガメニュー', 'label-en' => 'MEGA MENU',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => '/subpage/', 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => array(
        'parent' => array(
          'label' => 'メガメニュー',
          'url' => '/subpage/', 'other_page' => true, 'outlink' => false,
          'smooth' => false, 'belong' => '',
          'img_src' => 'https://placehold.jp/32/4c5162/ffffff/494x210.png?text=dummy',
        ),
        'page_link' => array(
          'label' => 'ページ内リンク',
          'url' => '#link', 'other_page' => true, 'outlink' => false,
          'smooth' => true, 'belong' => 'subpage',
          'img_src' => 'https://placehold.jp/32/4c5162/ffffff/494x210.png?text=dummy',
        ),
        'outlink' => array(
          'label' => '別ウィンドウで開く',
          'url' => 'https://grow4happt.com', 'other_page' => true, 'outlink' => true,
          'smooth' => false, 'belong' => false,
          'img_src' => 'https://placehold.jp/32/4c5162/ffffff/494x210.png?text=dummy',
        ),
      ),
    ),
    'works' => array(
      'type' => 'page',
      'label-jp' => '事例紹介', 'label-en' => 'WORKS',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => '/works/', 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => array(
        'category-1' => array(
          'label' => '事例カテゴリ1',
          'url' => '/works/category-1/', 'other_page' => true, 'outlink' => false,
          'smooth' => false, 'belong' => '',
          'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
        ),
        'category-2' => array(
          'label' => '事例カテゴリ2',
          'url' => '/works/category-2/', 'other_page' => true, 'outlink' => false,
          'smooth' => false, 'belong' => 'company',
          'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
        ),
      ),
    ),
    'company' => array(
      'type' => 'comp',
      'label-jp' => '会社概要', 'label-en' => 'COMPANY',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => LINK_COMPANY, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => '',
    ),
    'blog' => array(
      'type' => 'comp',
      'label-jp' => 'ブログ', 'label-en' => 'BLOG',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => LINK_BLOG, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => '',
    ),
    'news' => array(
      'type' => 'comp',
      'label-jp' => 'お知らせ', 'label-en' => 'NEWS',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => LINK_NEWS, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => false,
    ),
  );

/* head_btn_list
*************************************************** */
  $head_btn_list = '';
  $head_btn_list = array(
    'contact' => array(
      'ico' => 'mail', 'label-jp' => 'お問い合わせ', 'label-en' => 'CONTACT',
      'url' => LINK_CONTACT, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'clr' => 'wht', 'bg_clr' => 'main',
    ),
  );

/* sub_list
*************************************************** */
  $sub_list = array(
    'privacy' => array(
      'label' => 'プライバシーポリシー', 'fnt' => 'jp',
      'url' => LINK_PRIVACY, 'other_page' => true, 'outlink' => false,
      'smooth' => false, 'belong' => false,
    ),
    'terms' => array(
      'label' => 'ご利用規約', 'fnt' => 'jp',
      'url' => '/terms/', 'other_page' => true, 'outlink' => false,
      'smooth' => false, 'belong' => false,
    ),
  );


/* ##############################################################################

    SNS_LIST

############################################################################## */
  $sns_list = '';
  if ( LINE_URL || INSTA_URL || X_URL || TIKTOK_URL || PIN_URL || FB_URL ) {
    $sns_list = array();
  }
  if ( LINE_URL ) {
    $sns_list['line'] = LINE_URL;
  }
  if ( INSTA_URL ) {
    $sns_list['insta'] = INSTA_URL;
  }
  if ( YT_URL ) {
    $sns_list['yt'] = YT_URL;
  }
  if ( X_URL ) {
    $sns_list['x'] = X_URL;
  }
  if ( TIKTOK_URL ) {
    $sns_list['tiktok'] = TIKTOK_URL;
  }
  if ( PIN_URL ) {
    $sns_list['pin'] = PIN_URL;
  }
  if ( FB_URL ) {
    $sns_list['fb'] = FB_URL;
  }


/* ##############################################################################

    情報を $detail_info に配列として入れ込む

############################################################################## */
$gqo = get_queried_object();
$info_id = '';
$info_title = '';
$info_slug = '';
$info_taxonomy = '';
$info_parent = '';
$info_parent_slug = '';
$info_template = '';

/* --- トップページ --- */
if ( is_home() || is_front_page() ){
  $info_slug = '/';
  $info_template = 'home';
}

/* --- 固定ページ --- */
elseif ( is_page() ) {
  $info_id = $gqo->ID;
  $info_title = $gqo->post_title;
  $info_slug = $gqo->post_name;
  $info_parent = $gqo->post_parent;
  $info_parent_slug = get_post($info_parent)->post_name;
  $info_template = 'page';
}

/* --- 作者ページ --- */
elseif ( is_author() ) {
  $info_id = $gqo->ID;
  $info_title = $gqo->display_name;
  $info_slug = $gqo->user_nicename;
  $info_template = 'author';
}

/* --- アーカイブページ --- */
elseif ( is_archive() ) {
  // カテゴリ & タクソノミーの場合
  if ( is_category() || is_tax() ) {
    $taxonomy = get_query_var('taxonomy');
    $post_type = get_taxonomy($taxonomy)->object_type[0];
    $info_id = $gqo->term_id;
    $info_title = $gqo->name;
    $info_slug = $gqo->slug;
    $info_taxonomy = $gqo->taxonomy;
    if ( !$info_taxonomy ) {
      $info_taxonomy = 'category';
    }
    if ( is_category() ) {
      $info_parent = $gqo->category_parent;
    } elseif ( is_tax() ){
      $info_parent = $gqo->parent;
    }
  } else {
    $info_title = $gqo->label;
    $info_slug = $gqo->name;
  }
  // 日付けアーカイブの場合
  if ( is_date() ) {
    $year = get_query_var('year');
    $monthnum = get_query_var('monthnum');
    $day = get_query_var('day');
    if ( is_month() ) {
      $datettl = $year.'年'.$monthnum.'月';
    } elseif ( is_year() ) {
      $datettl = $year.'年';
    } else {
      $datettl = $year.'年'.$monthnum.'月'.$day.'日';
    }
    $info_title = $datettl;
  }
  $info_template = 'archive';
}

/* --- 投稿詳細ページ --- */
elseif ( is_single() ) {
  $info_id = $gqo->ID;
  $info_title = $gqo->post_title;
  $info_slug = $gqo->post_name;
  $info_template = 'single';
}

/* --- 404ページ --- */
elseif ( is_404() ){
  $info_title = '404 not found';
  $info_slug = '404';
  $info_template = '404';
}

/* --- 検索結果ページ --- */
elseif ( is_search() ){
  $info_title = '検索結果';
  $info_template = 'search';
}

/* --- 情報の入れ込み --- */
$detail_info = array(
  'title' => $info_title,
  'id' => $info_id,
  'slug' => $info_slug,
  'post_type' => $post_type,
  'taxonomy' => $info_taxonomy,
  'parent' => $info_parent,
  'parent_slug' => $info_parent_slug,
  'template' => $info_template,
);


/* ##############################################################################

    bodyにclass付与

############################################################################## */

/* --- トップページ --- */
if ( is_home() || is_front_page() ){
  $body_class = 'home';
}

/* --- 固定ページ --- */
elseif ( is_page() ) {
  if ( is_subpage() ) {
    $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['parent_slug'].' '.$detail_info['template'].'-'.$detail_info['slug'];
  } else {
    $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['slug'];
  }
}

/* --- 作者ページ --- */
elseif ( is_author() ) {
  $body_class = 'subpage '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' '.$detail_info['template'].'-'.$detail_info['post_type'].'-'.$detail_info['id'];
}

/* --- アーカイブページ --- */
elseif ( is_archive() ) {
  if ( is_category() || is_tax() ) {
    $body_class = 'subpage post_type-'.$detail_info['post_type'].' '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' '.$detail_info['taxonomy'].' '.$detail_info['taxonomy'].'-'.$detail_info['slug'];
  } elseif ( is_date() ) {
    if ( is_month() ) {
      $datenum = $year.$monthnum;
    } elseif ( is_year() ) {
      $datenum = $year;
    } else {
      $datenum = $year.$monthnum.$day;
    }
    $body_class = 'subpage post_type-'.$detail_info['post_type'].' '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' date-'.$datenum;
  } else {
    $body_class = 'subpage post_type-'.$detail_info['post_type'].' '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'];
  }
}

/* --- 投稿詳細ページ --- */
elseif ( is_single() ) {
  $body_class = 'subpage post_type-'.$detail_info['post_type'].' '.$detail_info['template'].' '.$detail_info['template'].'-'.$detail_info['post_type'].' '.$detail_info['template'].'-'.$detail_info['post_type'].'-'.$detail_info['id'];
}

/* --- 404ページ --- */
elseif ( is_404() ) {
  $body_class = 'subpage page-'.$detail_info['template'];
}

/* --- 検索 --- */
else {
  $body_class = 'subpage '.$detail_info['template'];
}

/* --- OS - win --- */
$user_agent = getenv('HTTP_USER_AGENT');
if ( strpos($user_agent,'Windows') !== false ) {
  $body_class .= ' win';
}

?>