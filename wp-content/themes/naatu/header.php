<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="nav-space"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand d-none d-lg-block" id="logo-relative" href="#">
        <img src="<?php echo get_stylesheet_directory_uri() . '/img/logo.png' ?>" alt="">
    </a>
    <a class="navbar-brand d-lg-none d-block mx-auto" href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/img/logo.png' ?>" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Inspiraci&oacute;n </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Preparaciones </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Tejidos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Blog </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Programa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Registro </a>
        </li>
        <li class="nav-item">
            <button class="btn" id="cart"><span class="dashicons dashicons-cart"></span></button>
        </li>
        <li class="nav-item">
            <button class="btn" ><span class="dashicons dashicons-search"></span></button>
        </li>
        <li class="nav-item">
            <a class="btn social-link" ><span class="dashicons dashicons-youtube"></span></a>
        </li>
        <li class="nav-item">
            <a class="btn social-link" ><span class="dashicons dashicons-twitter"></span></a>
        </li>
        <li class="nav-item">
            <a class="btn social-link" ><span class="dashicons dashicons-facebook-alt"></span></a>
        </li>
        <li class="nav-item">
            <a class="btn social-link" ><span class="dashicons dashicons-instagram"></span></a>
        </li>
        </ul>
    </div>
    </nav>
</header>

