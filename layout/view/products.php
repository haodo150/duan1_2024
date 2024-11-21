 <!--=============== MAIN ===============-->
 <main class="main">
      <!--=============== BREADCRUMB ===============-->
<section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="?mod=page&act=home" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Shop</span></li>
        </ul>
      </section>

      <!--=============== PRODUCTS ===============-->
      <section class="products section--lg container">
        <p class="total__products">We found <span>688</span> items for you!</p>

        <div class="products__container grid">
          <?php foreach ($loadSanpham as $sanpham): ?>
          <div class="product__item">
            <div class="product__banner">
              <a href="?mod=page&act=detail&id=<?= $sanpham['id_product']?>" class="product__images">
                <img src="<?= $baseURL?><?= $sanpham['img']?>" alt="" class="product__img default">

                <img src="public/assets/img/j1.2.png" alt="" class="product__img hover">
              </a>
              <div class="product__actions">
                <a href="#" class="action__btn" aria-label="Quick View">
                  <i class="fi fi-rs-eye"></i>
                </a>
                <a href="#" class="action__btn" aria-label="Add To Wishlist">
                  <i class="fi fi-rs-heart"></i>
                </a>
                <a href="#" class="action__btn" aria-label="Compare">
                  <i class="fi fi-rs-shuffle "></i>
                </a>
              </div>

              <div class="product__badge light-pink">Hot</div>
            </div>
            <div class="product__content">
              <span class="product__category"><?= $sanpham['id_categories']?></span>
              <a href="?mod=page&act=detail">
                <h3 class="product__title"><?= $sanpham['name_products']?></h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">$<?= $sanpham['price_products']?></span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Add To Cart">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>
          <?php  endforeach; ?>

        <ul class="pagination">
          <li><a href="#" class="pagination__link active">01</a></li>
          <li><a href="#" class="pagination__link">02</a></li>
          <li><a href="#" class="pagination__link">03</a></li>
          <li><a href="#" class="pagination__link">...</a></li>
          <li><a href="#" class="pagination__link">16</a></li>
          <li>
            <a href="#" class="pagination__link icon">
              <i class="fi-rs-angle-double-small-right"></i>
            </a></li>
        </ul>
      </section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img src="public/assets/img/icon-email.svg" alt="" class="newsletter__icon">
            Sign up to Newsletter
          </h3>

          <p class="newsletter__description">
            ...and receive $25 coupon for first shopping.
          </p>

          <form action="" class="newsletter__form">
            <input type="text" class="newsletter__input" placeholder="Enter your email">
            <button type="submit" class="newsletter__btn">Subcribe</button>
          </form>
        </div>
      </section>
    </main>