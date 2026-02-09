<?php
/* ##############################################################################

    nav_lst

############################################################################## */

/* nav_list
*************************************************** */
  $themne_path = get_template_directory_uri();
  $nav_list = array(
    'home' => array(
      'type' => 'page',
      'label-jp' => 'ホーム', 'label-en' => 'HOME',
      'desc' => false,
      'header' => true,  'footer' => true,
      'url' => LINK_HOME, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => '',
      'sub_nav' => false,
    ),
    'about' => array(
      'type' => 'page',
      'label-jp' => '森林組合について', 'label-en' => 'About Kashimo Forestry',
      'desc' => '森林を育て、守り、活かすことで<br>地域と暮らしを支える組合です。',
      'header' => true, 'footer' => true,
      'url' => LINK_ABOUT, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => $themne_path.'/images/common/gnav_img-about.webp',
      'sub_nav' => array(
        'kashimo_forestry' => array(
          'label' => '組合について',
          'url' => LINK_ABOUT, 'other_page' => true, 'outlink' => false,
          'smooth' => false, 'belong' => '',
          'img_src' => $themne_path.'/images/common/gnav_img-about-kashimo_forestry.webp',
          'child_nav' => array(
            'philosophy' => array(
              'label' => '加子母森林組合の理念',
              'url' => '#philosophy', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'about',
            ),
            'profile' => array(
              'label' => '組合概要',
              'url' => '#profile', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'about',
            ),
            'access' => array(
              'label' => 'アクセス',
              'url' => '#access', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'about',
            ),
          ),
        ),
        'member' => array(
          'label' => '組合員のみなさまへ',
          'url' => LINK_MEMBER, 'other_page' => true, 'outlink' => false,
          'smooth' => false, 'belong' => '',
          'img_src' => $themne_path.'/images/common/gnav_img-about-member.webp',
          'child_nav' => array(
            'forest' => array(
              'label' => '山林に関するご相談',
              'url' => '#forest', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'member',
            ),
            'inheritance' => array(
              'label' => '相続に関するご相談',
              'url' => '#inheritance', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'member',
            ),
            'contact' => array(
              'label' => '組合員向けお問い合わせ',
              'url' => '#contact', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'member',
            ),
          ),
        ),
      ),
    ),
    'workshop' => array(
      'type' => 'page',
      'label-jp' => '木工所について', 'label-en' => 'Wood Workshop',
      'desc' => '加子母の木を使い、用途や使う人に<br>合わせた木製品を製作しています。',
      'header' => true, 'footer' => true,
      'url' => LINK_WORKSHOP, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => $themne_path.'/images/common/gnav_img-workshop.webp',
      'sub_nav' => array(
        'furniture' => array(
          'label' => 'オーダーメイド家具',
          'url' => LINK_FURNITURE, 'other_page' => true, 'outlink' => false,
          'smooth' => false, 'belong' => '',
          'img_src' => $themne_path.'/images/common/gnav_img-workshop-furniture.webp',
          'child_nav' => array(
            'works' => array(
              'label' => '製作実績を見る',
              'url' => '#works', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'furniture',
            ),
            'contact' => array(
              'label' => 'オーダー家具のご相談',
              'url' => '#contact', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'furniture',
            ),
          ),
        ),
        'school' => array(
          'label' => 'こども園・学校関係',
          'url' => LINK_SCHOOL, 'other_page' => true, 'outlink' => false,
          'smooth' => false, 'belong' => '',
          'img_src' => $themne_path.'/images/common/gnav_img-workshop-school.webp',
          'child_nav' => array(
            'education' => array(
              'label' => '学校・園向け家具について',
              'url' => '#education', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'school',
            ),
          ),
        ),
        'hiba' => array(
          'label' => '檜葉加工事業',
          'url' => LINK_HIBA, 'other_page' => true, 'outlink' => false,
          'smooth' => false, 'belong' => '',
          'img_src' => $themne_path.'/images/common/gnav_img-workshop-hiba.webp',
          'child_nav' => array(
            'message' => array(
              'label' => '檜葉加工事業について',
              'url' => '#message', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'school',
            ),
          ),
        ),
      ),
    ),
    'mokumoku' => array(
      'type' => 'page',
      'label-jp' => 'モクモクセンター', 'label-en' => 'Mokumoku Center',
      'desc' => '暮らしの道具や製品として<br>紹介している施設です。',
      'header' => true, 'footer' => true,
      'url' => LINK_MOKUMOKU, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => $themne_path.'/images/common/gnav_img-mokumoku.webp',
      'sub_nav' => array(
        'mokumoku_center' => array(
          'label' => 'モクモクセンターについて',
          'url' => LINK_MOKUMOKU, 'other_page' => true, 'outlink' => false,
          'smooth' => false, 'belong' => '',
          'img_src' => $themne_path.'/images/common/gnav_img-mokumoku_center.webp',
          'child_nav' => array(
            'products' => array(
              'label' => 'おすすめ商品',
              'url' => '#products', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'mokumoku',
            ),
            'info' => array(
              'label' => '営業案内',
              'url' => '#info', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'mokumoku',
            ),
          ),
        ),
        'experience' => array(
          'label' => '体験プログラム',
          'url' => LINK_EXPERIENCE, 'other_page' => true, 'outlink' => false,
          'smooth' => false, 'belong' => '',
          'img_src' => $themne_path.'/images/common/gnav_img-mokumoku-experience.webp',
          'child_nav' => array(
            'chop_stick' => array(
              'label' => 'マイ箸づくり',
              'url' => '#chop_stick', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'experience',
            ),
            'terrarium' => array(
              'label' => '苔テラリウム',
              'url' => '#terrarium', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'experience',
            ),
            'pendant' => array(
              'label' => '檜のかけらペンダント',
              'url' => '#pendant', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'experience',
            ),
            'fragrance' => array(
              'label' => 'フレグランスづくり',
              'url' => '#fragrance', 'other_page' => true, 'outlink' => false,
              'smooth' => true, 'belong' => 'experience',
            ),
          ),
        ),
      ),
    ),
    'timber-market' => array(
      'type' => 'page',
      'label-jp' => '木材市況', 'label-en' => 'Timber Market',
      'desc' => false,
      'header' => true, 'footer' => true,
      'url' => LINK_TIMBER_MARKET, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => '',
    ),
    'recruit' => array(
      'type' => 'comp',
      'label-jp' => '採用情報', 'label-en' => 'Recruit',
      'desc' => false,
      'header' => true, 'footer' => false,
      'url' => LINK_RECRUIT, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => '',
    ),
    'news' => array(
      'type' => 'comp',
      'label-jp' => 'お知らせ', 'label-en' => 'NEWS',
      'desc' => false,
      'header' => false, 'footer' => false,
      'url' => LINK_NEWS, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => false,
    ),
    'contact' => array(
      'type' => 'comp',
      'label-jp' => 'お問い合わせ', 'label-en' => 'Contact',
      'desc' => false,
      'header' => true, 'footer' => false,
      'url' => LINK_CONTACT, 'other_page' => true, 'outlink' => false, 'smooth' => false,
      'img_src' => 'https://placehold.jp/32/4c5162/ffffff/320x180.png?text=dummy',
      'sub_nav' => '',
    ),
  );

/* head_btn_list
*************************************************** */
  $head_btn_list = '';
  // $head_btn_list = array(
  //   'contact' => array(
  //     'ico' => 'mail', 'label-jp' => 'お問い合わせ', 'label-en' => 'CONTACT',
  //     'url' => LINK_CONTACT, 'other_page' => true, 'outlink' => false, 'smooth' => false,
  //     'clr' => 'wht', 'bg_clr' => 'main',
  //   ),
  // );

/* sub_list
*************************************************** */
  $sub_list = array(
    'news' => array(
      'label' => 'お知らせ', 'fnt' => 'jp',
      'url' => LINK_NEWS, 'other_page' => true, 'outlink' => false,
      'smooth' => false, 'belong' => false,
    ),
    'privacy' => array(
      'label' => 'プライバシーポリシー', 'fnt' => 'jp',
      'url' => LINK_PRIVACY, 'other_page' => true, 'outlink' => false,
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