<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );
//カスタムメニュー
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );
//メニュー用jsの読み込み
function navbutton_scripts(){
	if ( is_home() ) {
  wp_enqueue_script( 'navbutton_script', get_template_directory_uri() .'/js/navbutton.js', array('jquery'), '', true );
	}
}
add_action( 'wp_enqueue_scripts' , 'navbutton_scripts' );

//アニメーション用jsの読み込み
function animation_scripts(){
	if ( is_home() ) {
  wp_enqueue_script( 'animation_script', get_template_directory_uri() .'/js/animation.js', array('jquery'), '', true );
	}
}
add_action( 'wp_enqueue_scripts' , 'animation_scripts' );

//読み込む時のフワッと用jsの読み込み
function animation_fade_scripts(){
	if ( is_home() ) {
  wp_enqueue_script( 'animation_fade_script', get_template_directory_uri() .'/js/animation_fade.js', array('jquery'), '', true );
	}
}
add_action( 'wp_enqueue_scripts' , 'animation_fade_scripts' );


function scroll_scripts() {
//ページ遷移の時にスクロール位置を維持する用jsの読み込み
if ( is_home() ) {
wp_enqueue_script('scroll_script', get_template_directory_uri() .'/js/scroll.js', array('jquery'), '', true );
}
}
add_action( 'wp_enqueue_scripts' , 'scroll_scripts' );


//サイドバーにウィジェット追加
function widgetarea_init() {
register_sidebar(array(
    'name'=>'サイドバー',
    'id' => 'side-widget',
    'before_widget'=>'<div id="%1$s" class="%2$s sidebar-wrapper">',
    'after_widget'=>'</div>',
    'before_title' => '<h4 class="sidebar-title">',
    'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'widgetarea_init' );
