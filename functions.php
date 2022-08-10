<?php
/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
* CSSとJavaScriptの読み込み
*/
function my_script_init()
{
wp_enqueue_style('destyle', get_template_directory_uri() . '/css/destyle.css', array(), filemtime( get_theme_file_path( 'css/destyle.css' )), 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array('destyle'), filemtime( get_theme_file_path( 'css/style.css' )), 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), filemtime( get_theme_file_path( 'js/script.js' )), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');


add_action('bcn_after_fill', 'bc_limit');
function bc_limit ($trail) {
  $max = count($trail->breadcrumbs);
  for ($i = 2; $i < $max - 1; $i++) {
    unset($trail -> trail[$i]);
  }
}