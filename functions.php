<?php
function enqueue_scripts() {
  wp_enqueue_style('main', get_stylesheet_uri());
  wp_enqueue_style('icon', 'assets/favicon.ico');
  wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v6.3.0/js/all.js');
  
  wp_enqueue_style('googleapis1', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
  
  wp_enqueue_style('googlefont2', 'https://fonts.googleapis.com/css?family=Open
  +Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');

  wp_enqueue_script('mainbootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
  
  wp_enqueue_script('mainscripts', 'js/scripts.js',array(),'',true);

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function add_menus() {
  // カスタムメニューを登録
  register_nav_menus(array(
      // ↓メニューの名前　↓メニューが表示される位置の説明
      'header_nav' => 'ヘッダーに表示されるナビゲーション'
  ));
}
add_action('after_setup_theme', 'add_menus');
