<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
    <title><?php bloginfo('name') ?> <?php wp_title('/') ?></title>
</head>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/libs/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/libs/js/menu.js"></script>
<body>
<div class="container">

    <!--Logo-->
    <header>
        <div class="row">
            <div class="twelve columns">
                <a href="/" title="<?php bloginfo('name') ?>">
                    <img id="logo" src="<?= get_template_directory_uri() ?>/img/logo.png" alt="Place for your logo">
                </a>
            </div>
        </div>
    </header>

    <!--Navigation-->
    <p class="menu-trigger">menu</p>
    <nav>
        <div class="row">
            <div class="ten columns offset-by-one">
                <?php wp_nav_menu([
                    'container' => 'div',
                    'container_class' => 'main-menu',
                    'menu_class' => 'menu',
                    'theme_location' => 'main_menu',
//                    'walker' => new Nav_Wrap(),
                ]) ?>
            </div>
        </div>
    </nav>
