<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-regular-straight/css/uicons-regular-straight.css'>

    <!--=============== SWIPER CSS ===============-->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="public/assets/css/styles.css" />
    <!-- <link rel="stylesheet" href="public/assets/css/bootstrap.min.css" /> -->

    <title>FOOTWEAR SNEAKERS</title>
  </head>
  <body>
    <!--=============== HEADER ===============-->
    <header class="header">
      <div class="header__top">
        <div class="header__container container">
          <div class="header__contact">
            <span>(+84) 359518784</span>
            <span>Our location</span>
          </div>
          <p class="header__alert-news">
            Super Value Deals - Save more with coupons
          </p>
          <?php if(isset($_SESSION['user'])): ?>
            <div class="header__top-isset">
              <a href="?mod=user&act=account" class="header__top-action">Hello, <?= $_SESSION['user']['username']?></a> /
              <a href="?mod=user&act=logout" class="header__top-action">Logout</a>
            </div>
          <?php else: ?>
          <a href="?mod=user&act=login" class="header__top-action">
            Log In/ Sign In
          </a>
          <?php endif; ?>
        </div>
      </div>

      <nav class="nav container">
        <a href="?mod=page&act=home" class="nav__logo">
          <img src="public/assets/img/SNEAKERS-removebg-preview.png" alt="" class="nav__logo-img">
        </a>

        <div class="nav__menu" id="nav-menu">
          <div class="nav__menu-top">
            <a href="?mod=page&act=home" class="nav__menu-logo">
              <img src="public/assets/img/logo.svg" alt="">
            </a>

            <div class="nav__close" id="nav__close">
              <i class="fi fi-rs-cross-small"></i>
            </div>
          </div>
          <ul class="nav__list">
            <li class="nav__item">
              <a href="?mod=page&act=home" class="nav__link">Home</a>
            </li>
            <li class="nav__item">
              <a href="?mod=page&act=products" class="nav__link">Shop</a>
            </li>
            <li class="nav__item">
              <a href="?mod=page&act=compare" class="nav__link">Compare</a>
            </li>
            <?php if(!isset($_SESSION['user'])): ?>
            <li class="nav__item">
              <a href="?mod=user&act=login" class="nav__link">Login</a>
            </li>
            
            <li class="nav__item">
              <a href="?mod=user&act=register" class="nav__link">Register</a>
            </li>
            <?php endif; ?>
          </ul>

          <div class="header__search">
            <input type="text" placeholder="Search for items..." class="form__input">
            <button class="search-btn">
              <img src="public/assets/img/search.png" alt="">
            </button>
          </div>
        </div>

        <div class="header__user-action">
          <a href="?mod=page&act=wishlist" class="header__action-btn">
            <img src="public/assets/img/icon-heart.svg" alt="">
            <span class="count">0</span>
          </a>
        </div>

        <div class="header__user-action">
          <a href="?mod=page&act=cart" class="header__action-btn">
            <img src="public/assets/img/icon-cart.svg" alt="">
            <span class="count">0</span>
          </a>

          <div class="header__action-btn nav__toggle" id="nav-toggle">
            <img src="public/assets/img/menu-burger.svg" alt="">
          </div>
        </div>
      </nav>
    </header>
