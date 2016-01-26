<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
    <title><?php bloginfo('name') ?> <?php wp_title('/') ?></title>
</head>
<body>
<div class="wrapper">

    <!--Logo-->
    <header>
        <div class="row">
            <div class="col-12">
                <a href="/" title="Главная страница блога <?php bloginfo('name') ?>">
                    <img id="logo" src="<?= get_template_directory_uri() ?>/img/logo.png" alt="Place for your logo">
                </a>
            </div>
        </div>
    </header>

    <!--Navigation-->
    <nav>
        <?php wp_nav_menu([
            'container' => 'div',
            'container_class' => 'top-menu',
            'menu_class' => 'menu',
        ]) ?>
    </nav>
