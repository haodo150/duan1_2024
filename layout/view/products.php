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
              <a href="?mod=product&act=detail&id=<?= $sanpham['id_product']?>" class="product__images">
                <img src="<?= $baseURL?><?= $sanpham['img']?>" alt="" class="product__img default">
              </a>
              

              <div class="product__badge light-pink">Hot</div>
            </div>
            <div class="product__content">
              <span class="product__category"><?= $sanpham['id_categories']?></span>
              <a href="?mod=product&act=detail">
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
                <span class="new__price"><?= number_format($sanpham['price_products'])?> VND</span>
              </div>

             
            </div>
          </div>
          <?php  endforeach; ?>

       
      </section>

     
    </main>