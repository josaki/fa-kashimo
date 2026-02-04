<?php
//========================================================================
// 管理画面用favicon指定
//========================================================================
function admin_favicon() {
  echo '<link rel="shortcut icon" href="/wp-content/themes/plain/favicon.ico">';
}
add_action('admin_head', 'admin_favicon');


//========================================================================
// admin-style.cssを有効化
//========================================================================
function my_admin_style(){
  wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/admin-style.css' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );


//========================================================================
// 投稿画面（ビジュアル）にスタイル追加
//========================================================================
add_editor_style("/css/reset.css");
add_editor_style("/css/common.css");
add_editor_style("/css/wysiwyg.css");


//========================================================================
// カスタムタクソノミーの階層を保持（チェックしたものが一番上にいかせない）
//========================================================================
function keep_taxonomy_hierarchy($args) {
  $args['checked_ontop'] = false; // チェックしてもリストの順番を維持する
  return $args;
}
add_filter('wp_terms_checklist_args', 'keep_taxonomy_hierarchy');


//========================================================================
// サイドバーに固定ページを追加
//========================================================================
// function add_page_admin_menu() {
//   add_menu_page( '★ページ名★', '★ページ名★', 'read', 'post.php?post=★ページID★&action=edit','','dashicons-tag',5);
// }
// add_action( 'admin_menu', 'add_page_admin_menu' );