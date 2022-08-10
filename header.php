<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="説明文がはいります" />
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Peta:wght@500;600&family=Mulish:wght@500;600&display=swap" rel="stylesheet"/>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <nav class="header-nav">

        <?php if ( is_home() || is_front_page() ) : ?>
          <h1 class="header-nav__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Tondeke Land"></a></h1>
          <!-- /.header-nav__logo -->
          <ul class="header-nav__menu">
            <li class="header-nav__item">
              <a href="#works">WORKS<span>制作実績</span></a>
            </li>
            <!-- /.header-nav__item -->
            <li class="header-nav__item">
              <a href="#service">SERVICE<span>サービス</span></a>
            </li>
            <!-- /.header-nav__item -->
            <li class="header-nav__item">
              <a href="#about">ABOUT US<span>私について</span></a>
            </li>
            <!-- /.header-nav__item -->
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT<span>お問い合わせ</span></a>
            </li>
            <!-- /.header-nav__item -->
          </ul>
          <!-- /.header-nav__menu -->
        <?php else : ?>
          <div class="header-nav__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Tondeke Land"></a></div>
          <!-- /.header-nav__logo -->
          <ul class="header-nav__menu">
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('category/works/')); ?>">WORKS<span>制作実績</span></a>
            </li>
            <!-- /.header-nav__item -->
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/')); ?>#service">SERVICE<span>サービス</span></a>
            </li>
            <!-- /.header-nav__item -->
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/')); ?>#about">ABOUT US<span>私について</span></a>
            </li>
            <!-- /.header-nav__item -->
            <li class="header-nav__item">
              <a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT<span>お問い合わせ</span></a>
            </li>
            <!-- /.header-nav__item -->
          </ul>
          <!-- /.header-nav__menu -->
        <?php endif; ?>
        
      </nav>
      <!-- /.header-nav -->

      <!-- ハンバーガーー -->
      <div class="drawer-icon">
        <div class="drawer-icon__box">
          <ul class="drawer-icon__row">
            <li class="drawer-icon__dot"></li>
            <!-- /.drawer-icon__dot -->
            <li class="drawer-icon__dot"></li>
            <!-- /.drawer-icon__dot -->
            <li class="drawer-icon__dot"></li>
            <!-- /.drawer-icon__dot -->
          </ul>
          <!-- /.drawer-icon__row -->
          <ul class="drawer-icon__row">
            <li class="drawer-icon__dot"></li>
            <!-- /.drawer-icon__dot -->
            <li class="drawer-icon__dot"></li>
            <!-- /.drawer-icon__dot -->
            <li class="drawer-icon__dot"></li>
            <!-- /.drawer-icon__dot -->
          </ul>
          <!-- /.drawer-icon__row -->
          <ul class="drawer-icon__row">
            <li class="drawer-icon__dot"></li>
            <!-- /.drawer-icon__dot -->
            <li class="drawer-icon__dot"></li>
            <!-- /.drawer-icon__dot -->
            <li class="drawer-icon__dot"></li>
            <!-- /.drawer-icon__dot -->
          </ul>
          <!-- /.drawer-icon__row -->
        </div>
        <!-- /.drawer-icon__box -->
      </div>
      <!-- /.drawer-icon -->
      <div class="drawer-contents">
        <div class="drawer-contents__logo"><a href="<?php echo esc_url(home_url('/')); ?>">Tondeke Land</a></div>
        <!-- /.drawer-contents__logo -->
        <div class="drawer-contents__box">
          <div class="drawer-contents__icon">
            <span class="drawer-contents__icon-bar1"></span>
            <!-- /.drawer-contents__icon-bar1 -->
            <span class="drawer-contents__icon-bar2"></span>
            <!-- /.drawer-contents__icon-bar2 -->
          </div>
          <!-- /.drawer-contents__icon -->
        </div>
        <!-- /.drawer-contents__box -->

        <?php if ( is_home() || is_front_page() ) : ?>
        <ul class="drawer-content">
          <li class="drawer-content__item">
            <a href="#works">WORKS<span>制作実績</span></a>
          </li>
          <!-- /.drawer-content__item -->
          <li class="drawer-content__item">
            <a href="#service">SERVICE<span>サービス</span></a>
          </li>
          <!-- /.drawer-content__item -->
          <li class="drawer-content__item">
            <a href="#about">ABOUT US<span>私について</span></a>
          </li>
          <!-- /.drawer-content__item -->
          <li class="drawer-content__item">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT<span>お問い合わせ</span></a>
          </li>
          <!-- /.drawer-content__item -->
        </ul>
        <!-- /.drawer-content -->
        <?php else : ?>
        <ul class="drawer-content">
          <li class="drawer-content__item">
            <a href="<?php echo esc_url(home_url('category/works/')); ?>">WORKS<span>制作実績</span></a>
          </li>
          <!-- /.drawer-content__item -->
          <li class="drawer-content__item">
            <a href="<?php echo esc_url(home_url('/')); ?>#service">SERVICE<span>サービス</span></a>
          </li>
          <!-- /.drawer-content__item -->
          <li class="drawer-content__item">
            <a href="<?php echo esc_url(home_url('/')); ?>#about">ABOUT US<span>私について</span></a>
          </li>
          <!-- /.drawer-content__item -->
          <li class="drawer-content__item">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>">CONTACT<span>お問い合わせ</span></a>
          </li>
          <!-- /.drawer-content__item -->
        </ul>
        <!-- /.drawer-content -->
        <?php endif; ?>

      </div>
      <!-- /.drawer-contents -->
      <!-- ハンバーガ- -->
    </header>
    <!-- /.header -->