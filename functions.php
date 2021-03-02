<?php
/**
 * basicwp_kote2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package basicwp_kote2
 */

// ==================================================
// 環境変数
// ==================================================


// ==================================================
// default
// ==================================================

 // ===========> クロスドメインでrestAPIを使う場合はcors設定が必要
 // ちなみにこの設定だけでheadlessなテーマとして動く。
 function my_customize_rest_cors() {
  remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
  add_filter( 'rest_pre_serve_request', function( $value ) {
    header( 'Access-Control-Allow-Origin: *' );
    return $value;
  });
}
add_action('rest_api_init', 'my_customize_rest_cors', 15 );


// ===========> PHPのメモリー上限の書き換え
ini_set('memory_limit', '256M');

// ===========> 不要タグの削除
remove_action( 'wp_head', 'wp_generator' ); // WordPressのバージョン情報
remove_action( 'wp_head', 'rsd_link' ); // 外部アプリケーションから情報を取得するタグ
remove_action( 'wp_head', 'wlwmanifest_link' ); // Windows Live Writer用のタグ
remove_action( 'wp_head', 'index_rel_link' ); // 現在の文書に対する「索引」であることを示すタグ
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); //「?p=投稿ID」形式のデフォルトパーマリンクタグ
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); //以下「link rel=next」等のタグ
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'feed_links', 2);// 以下フィード関連のタグ
remove_action( 'wp_head', 'feed_links_extra', 3);
remove_action( 'wp_head', 'print_emoji_detection_script', 7); // 以下絵文字関連タグ
remove_action( 'admin_print_scripts', 'print_emoji_detection_script');
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rel_canonical'); // canonicalURLを削除
add_filter( 'emoji_svg_url', '__return_false' );

// ===========> add_theme_support
add_action( 'after_setup_theme', function(){
add_theme_support( 'title-tag' ); // tiltleタグの追加
add_theme_support( 'post-thumbnails' ); //サムネイル機能の追加
add_theme_support('menus'); // カスタムメニュー
add_theme_support('widgets'); // ウィジェットの追加
});

// ===========> ログイン時の管理バーを消す
add_filter('show_admin_bar', '__return_false');

// ===========> session_start
add_action('init', function(){
  session_start();
});


// ==================================================
// js/css
// ==================================================

function basicwp_kote2_scripts() {

  //キャッシュ対策
  date_default_timezone_set('Asia/Tokyo');
  $id = date("YmdHis"); ;

	//CSS
  // wp_enqueue_style( 'theme_kote2tokyo-animate', '//fonts.googleapis.com/css?family=Anton', array(), $id );
	wp_enqueue_style( 'basicwp_kote2-style', get_stylesheet_uri(), array(), $id ); // style.css

  //JS
  wp_enqueue_script( 'theme_kote2tokyo-polyfill', '//polyfill.io/v3/polyfill.min.js?features=es6%2CIntersectionObserver%2CIntersectionObserverEntry', array(), $id, true);
	wp_enqueue_script( 'basicwp_kote2-script-js', get_template_directory_uri(). '/assets/dist/js/script.js', array(), $id, true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'basicwp_kote2_scripts' );

