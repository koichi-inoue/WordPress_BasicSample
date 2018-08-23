<?php

// メインカラム幅
if ( ! isset( $content_width ) ) $content_width = 600;

// RSSフィードのリンク
add_theme_support( 'automatic-feed-links' );

// ダイナミックサイドバー
register_sidebar( array(
  'name' => 'サイドバーウィジェット01',
  'id' => 'sidebar-1',
  'description' => 'サイドバーのウィジェットエリア（デフォルトのサイドバーと入れ替える場合に使用）',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
) );

// ダイナミックサイドバー２
/*
register_sidebar(array(
  'name' => sprintf('サイドバーウィジェット02' ),
  'id' => 'sidebar-2',
  'description' => 'サイドバーのウィジェットのテスト',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
));
*/


// カスタムメニュー有効化
add_theme_support( 'menus' );

// カスタムメニューの「場所」
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );
//register_nav_menu( 'sidebar-navi', 'サイドバーのナビゲーション' );
//register_nav_menu( 'footer-navi', 'フッターのナビゲーション' );
?>
