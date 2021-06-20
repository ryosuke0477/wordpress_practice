<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header__nav">
            <div class="header__nav-img">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/image/logo.png" alt="タイトル画像">
                </a>
            </div>
            <button type="button" id="js-buttonHamburger" class="c-button p-hamburger" aria-controls="global-nav" aria-expanded="false">
                <span class="p-hamburger__line">
                </span>
            </button>
            <ul class="header__nav-list">
                <li><a href="">宿泊予約</a></li>
                <li><a href="">観光情報</a></li>
                <li><a href="">よくあるご質問</a></li>
                <li><a href="<?php home_url("/contact"); ?>">お問い合わせ</a></li>
            </ul>
        </div>
        <ul class="header__spNavi" id="spNavi">
            <li><a href="">宿泊予約</a></li>
            <li><a href="">観光情報</a></li>
            <li><a href="">よくあるご質問</a></li>
            <li><a href="">お問い合わせ</a></li>
        </ul>
    </header>