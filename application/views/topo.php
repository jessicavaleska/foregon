<!DOCTYPE html>
<html>
<head>
    <title><?= $meta_title ?></title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">

    <link rel="shortcut icon" href="https://www.foregon.com/static/forsale-2/images/favicon.ico" type="image/png"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">

    <link href="<?= base_url('assets/css/bootstrap/bootstrap.min.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/css/formvalidation/formValidation.min.css') ?>" rel="stylesheet"/>

    <link href="<?= base_url('assets/css/fancybox/jquery.fancybox.min-3-1-27.min.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/css/owl-carousel/owl.carousel.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/css/owl-carousel/owl.theme.css') ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/css/owl-carousel/owl.transitions.css') ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.min.css'); ?>"/>
</head>

<body>

<aside id="aside-score" class="hide-desktop">
    <div class="container-aside">
        <div class="wrap">
            <div class="avatar-cliente">FS</div>

            <div class="score-cliente">
                <h2>Score de crédito</h2>
                <h3><span>920</span> / 1000</h3>
            </div>
        </div>

        <div class="editar-perfil-cliente">
            <svg><use xlink:href="#editar"></use></svg>
        </div>
    </div>
</aside>

<header id="header-bottom" class="hide-desktop">
    <ul>
        <li>
            <a class="link-menu active" onclick="$('html,body').animate({scrollTop: $('body').offset().top}, 1500);">
                <svg><use xlink:href="#prize-stroke"></use></svg>
                <p>RECOMENDADOS</p>
            </a>
        </li>
        <li>
            <a class="link-menu" onclick="$('html,body').animate({scrollTop: $('.cartao-destaque').offset().top}, 1500);">
                <svg><use xlink:href="#credit-score"></use></svg>
                <p>SCORE</p>
            </a>
        </li>
        <li>
            <a class="">
                <svg><use xlink:href="#menu"></use></svg>
                <p>MENU</p>
            </a>
        </li>
    </ul>
</header>

<header id="header-menu" class="hide-mobile">
    <div class="area-menu">
        <a class="btn-open-menu">
            <svg><use xlink:href="#menu-2"></use></svg>
        </a>

        <div class="logo">
            <img src="<?= base_url('assets/imagem/logo/foregon--id.svg') ?>" alt="Logo <?= NOME_CLIENTE ?>"/>
        </div>
    </div>

    <div class="area-nav">
        <a class="link-menu active" onclick="$('html,body').animate({scrollTop: $('body').offset().top}, 1500);">
            <svg><use xlink:href="#prize-stroke"></use></svg>
            <div class="wrap">
                <h4>RECOMENDADOS</h4>
                <p>produtos que combinam com você.</p>
            </div>
        </a>

        <a class="link-menu" onclick="$('html,body').animate({scrollTop: $('.cartao-destaque').offset().top}, 1500);">
            <svg><use xlink:href="#credit-score"></use></svg>
            <div class="wrap">
                <h4>SCORE</h4>
                <p>saiba como aumentar o seu.</p>
            </div>
        </a>
    </div>

    <div class="area-login">
        <div class="avatar-cliente">FS</div>
        <img src="<?= base_url('assets/imagem/icone/arrow--down.svg') ?>" alt=""/>
    </div>
</header>