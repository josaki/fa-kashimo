<?php

//========================================================================
// サブページの場合　if( is_subpage())
//========================================================================
function is_subpage() {
  global $post; // $post には現在の固定ページの情報があります
  if ( is_page() && $post->post_parent ){ // 現在の固定ページが親ページを持つかどうかをチェックします
    $parent_slug = preg_replace('/\/.*/','',get_page_uri($post->post_parent)); // 親ページの Slug を取得します
    return $parent_slug; // 親ページの Slug を返します
  } else { // 親ページを持っていない場合
    return false; // false を返します
  };
};

//========================================================================
// アーカイブ表記に「年」を追加
//========================================================================
function my_archives_link($html){
if(preg_match('/[0-9]+?<\/a>/', $html))
$html = preg_replace('/([0-9]+?)<\/a>/', '$1年</a>', $html);
if(preg_match('/title=[\'\"][0-9]+?[\'\"]/', $html))
$html = preg_replace('/(title=[\'\"][0-9]+?)([\'\"])/', '$1年$2', $html);
return $html;
}
add_filter('get_archives_link', 'my_archives_link', 10);

//========================================================================
// パラメータにファイルの更新日追加
//========================================================================
function latest_cache($filename) {
  $filepath = get_template_directory() .$filename;
  if (file_exists($filepath)) {
    echo $filename.'?date='.date('YmdHis', filemtime($filepath));
  }
}

//========================================================================
// YoastSEO使用時にフロントページに出るrel="next"を削除
//========================================================================
function wpseo_disable_rel_next_home( $link ) {
  if (is_front_page()) { return false; }
}
add_filter( 'wpseo_next_rel_link', 'wpseo_disable_rel_next_home' );

//========================================================================
// WordPress同梱のjQueryを読み込ませない
//=========================================================================
function add_my_scripts() {
  if (!is_admin()) {
    wp_deregister_script('jquery');
    // 新しいjQueryを読み込む
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.6.1', false);
  }
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

//========================================================================
// head内の不要な記述 削除
//========================================================================
// remove WordPress version number
function crave_remove_version() {
  return '';
}
add_filter('the_generator', 'crave_remove_version');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link'); // remove really simple discovery (RSD) link
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (if you don't use rss)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink

//========================================================================
// wp-embed 削除
//========================================================================
function crave_disable_embeds() {
  // Remove the REST API endpoint.
  // remove_action( 'rest_api_init', 'wp_oembed_register_route' );
  // Turn off oEmbed auto discovery.
  add_filter( 'embed_oembed_discover', '__return_false' );
  // Don't filter oEmbed results.
  remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
  // Remove oEmbed discovery links.
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
  // Remove oEmbed-specific JavaScript from the front-end and back-end.
  remove_action( 'wp_head', 'wp_oembed_add_host_js' );
  add_filter( 'tiny_mce_plugins', 'crave_disable_embeds_tiny_mce_plugin' );
  // Remove all embeds rewrite rules.
  add_filter( 'rewrite_rules_array', 'crave_disable_embeds_rewrites' );
  // Remove filter of the oEmbed result before any HTTP requests are made.
  remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
}
add_action( 'init', 'crave_disable_embeds', 9999 );
function crave_disable_embeds_tiny_mce_plugin($plugins) {
  return array_diff($plugins, array('wpembed'));
}
function crave_disable_embeds_rewrites($rules) {
  foreach($rules as $rule => $rewrite) {
    if(false !== strpos($rewrite, 'embed=true')) {
      unset($rules[$rule]);
    }
  }
  return $rules;
}

//========================================================================
// query strings 削除
//========================================================================
function crave_remove_script_version( $src ) {
  $parts = explode( '?ver', $src );
  return $parts[0];
}
add_filter( 'script_loader_src', 'crave_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'crave_remove_script_version', 15, 1 );

//========================================================================
// アイキャッチが設定されていない場合は、記事の1番最初の画像をアイキャッチに設定
//========================================================================
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  if ( isset($matches[1][0]) ) {
    $first_img = $matches[1][0];
  }
  if ( empty($first_img) ){ //Defines a default image
    $first_img = "";
  }
  return $first_img;
}

//========================================================================
// contact form7 - select 年月日 自動追加
//========================================================================
function custom_get_select_values_year( $values, $options, $args ) {
  if ( in_array( 'select-year', $options ) ) {
    $now_year = date('Y');
    $min_year = 18;
    $max_year = 65;
    // $values = range( $now_year-$max_year, $now_year-$min_year, 1 ); // 昇順
    $values = range( $now_year-$min_year, $now_year-$max_year, -1 ); // 降順
  }
  return $values;
}
add_filter( 'wpcf7_form_tag_data_option', 'custom_get_select_values_year', 10, 3 );

function custom_get_select_values_month( $values, $options, $args ) {
  if ( in_array( 'select-month', $options ) ) {
    $values = range( 1, 12 );
  }
  return $values;
}
add_filter( 'wpcf7_form_tag_data_option', 'custom_get_select_values_month', 10, 3 );

function custom_get_select_values_day( $values, $options, $args ) {
  if ( in_array( 'select-day', $options ) ) {
    $values = range( 1, 31 );
  }
  return $values;
}
add_filter( 'wpcf7_form_tag_data_option', 'custom_get_select_values_day', 10, 3 );

//========================================================================
// contact form7 - select 都道府県
//========================================================================
function custom_get_select_values_pref( $values, $options, $args ) {
  if ( in_array( 'select-pref', $options ) ) {
    $values = array(
      'optgroup-北海道','北海道','endoptgroup','<hr>',
      'optgroup-東北','青森県','岩手県','宮城県','秋田県','山形県','福島県','endoptgroup','<hr>',
      'optgroup-関東','茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','endoptgroup','<hr>',
      'optgroup-中部','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','endoptgroup','<hr>',
      'optgroup-近畿','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','endoptgroup','<hr>',
      'optgroup-中国','鳥取県','島根県','岡山県','広島県','山口県','endoptgroup','<hr>',
      'optgroup-四国','徳島県','香川県','愛媛県','高知県','endoptgroup','<hr>',
      'optgroup-九州','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県',
    );
  }
  return $values;
}
add_filter( 'wpcf7_form_tag_data_option', 'custom_get_select_values_pref', 10, 3 );

//========================================================================
// reCAPTCHAのエラーメッセージ変更
//========================================================================
function my_error_message( $error, $key ) {
  if ( $key === 'recaptcha-v3' ) {
  $error = str_replace("Enter reCAPTCHA Secret key.", "シークレットキーを入力してください。", $error);
  $error = str_replace("Failed reCAPTCHA access.", "reCAPTCHA認証に失敗しました。", $error);
  $error = str_replace("Invalid reCAPTCHA Secret key.", "タイムアウトしました。お問い合わせフォームに再度アクセスしてください。", $error);
  }
  return $error;
}
add_filter( 'mwform_error_message_mw-wp-form-46', 'my_error_message', 10, 2 );