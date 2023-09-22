<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

</head>
  <body>
<header>
                <!-- ヘッダーにメニューを表示 -->
                <?php $args =array(//まず変数$argsを作ってarray()の中にデータを入れる。
                    'theme_location' => 'header_nav',// functions.phpで設定したメニューの名前を設定 //
                    'container' => 'nav',// <nav>タグを自動で出力してくれる。必ず書かなくてもデフォルトでは<div>タグを出力する。 //
                );
                wp_nav_menu($args);//メニューを表示
                ?>
</header>