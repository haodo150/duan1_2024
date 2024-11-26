<section class="home section--lg">
        <div class="home__container container grid">
          <div class="home__content">
            <span class="home__subtitle">Hot promotios</span>
            <h1 class="home__title">Fashion Trending <span>Great Collection</span></h1>
            <p class="home__description">Save more with coupons & up to 20% off</p>
            <a href="?mod=page&act=products" class="btn">Shop Now</a>
          </div>
          <img src="public/assets/img/851655-removebg-preview.png" alt="" class="home__img">
        </div>
      </section>

      <!--=============== CATEGORIES ===============-->
      <section class="categories container section">
        <h3 class="section__title"><span>Popular</span> Categories</h3>

        <div class="categories__container swiper">
          <div class="swiper-wrapper">
            <?php foreach($homeCategories as $categories): ?>
            <a href="?mod=page&act=products" class="category__item swiper-slide">
              <img src="<?= $baseURL?><?= $categories['img']?>" alt="" class="category__img">
              <h3 class="category__title"><?= $categories['name_categories']?></h3>
            </a>
            <?php endforeach; ?>
           
          </div>
          
          <div class="swiper-button-next"><i class="fi fi-rs-angle-right"></i></div>
          <div class="swiper-button-prev"><i class="fi fi-rs-angle-left"></i></div>
        </div>
      </section>

      <!--=============== PRODUCTS ===============-->
      <section class="products section container">
        <div class="tab__btns">
          <span class="tab__btn active-tab" data-target="#featured">Nike</span> 
          <span class="tab__btn" data-target="#popular">Nike Jordan</span>
          <span class="tab__btn" data-target="#new-added">Nike Airmax</span>
        </div>

        <div class="tab__items">
          <div class="tab__item active-tab" content id="featured">
            <div class="products__container grid">
              <?php foreach($homeProductsFeatured as $featured): ?>
                <div class="product__item">
                  <div class="product__banner">
                    <a href="?mod=product&act=detail&id=<?= $featured['id_product']?>" class="product__images">
                      <img src="<?= $baseURL?><?= $featured['img']?>" alt="" class="product__img default">

                      <!-- <img src="public/assets/img/n1.2.png" alt="" class="product__img hover"> -->
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
                    <span class="product__category"><?= $featured['id_categories']?></span>
                    <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                      <h3 class="product__title"><?= $featured['name_products']?></h3>
                    </a>
                    <div class="product__rating">
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                    </div>
                    <div class="product__price flex">
                      <span class="new__price">$<?= $featured['price_products']?></span>
                    </div>

                    <a href="#" class="action__btn cart__btn" aria-label="Add To Cart">
                      <i class="fi fi-rs-shopping-bag-add"></i>
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>

              
            </div>
          </div>

          <div class="tab__item" content id="popular">
            <div class="products__container grid">
              <?php foreach($homeProductsPopuler as $populer): ?>
                <div class="product__item">
                  <div class="product__banner">
                    <a href="?mod=product&act=detail&id=<?= $populer['id_product']?>" class="product__images">
                      <img src="<?= $baseURL?><?= $populer['img']?>" alt="" class="product__img default">

                      <img src="public/assets/img/n1.2.png" alt="" class="product__img hover">
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
                    <span class="product__category"><?= $populer['id_categories']?></span>
                    <a href="?mod=product&act=detail&id=<?= $populer['id_product']?>">
                      <h3 class="product__title"><?= $populer['name_products']?></h3>
                    </a>
                    <div class="product__rating">
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                    </div>
                    <div class="product__price flex">
                      <span class="new__price">$<?= $populer['price_products']?></span>
                    </div>

                    <a href="#" class="action__btn cart__btn" aria-label="Add To Cart">
                      <i class="fi fi-rs-shopping-bag-add"></i>
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
          </div>

          <div class="tab__item" content id="new-added">
            <div class="products__container grid">
              <?php foreach ($homeProductsAdded as $new_added) : ?>
                <div class="product__item">
                  <div class="product__banner">
                    <a href="?mod=product&act=detail&id=<?= $new_added['id_product']?>" class="product__images">
                      <img src="<?= $baseURL?><?= $new_added['img']?>" alt="" class="product__img default">
                      <img src="public/assets/img/a1,3.png" alt="" class="product__img hover">
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
                    <span class="product__category"><?= $new_added['id_categories']?></span>
                    <a href="?mod=product&act=detail&id=<?= $populer['id_product']?>">
                      <h3 class="product__title"><?= $new_added['name_products']?></h3>
                    </a>
                    <div class="product__rating">
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                    </div>
                    <div class="product__price flex">
                      <span class="new__price">$<?= $new_added['price_products']?></span>
                    </div>

                    <a href="#" class="action__btn cart__btn" aria-label="Add To Cart">
                      <i class="fi fi-rs-shopping-bag-add"></i>
                    </a>
                  </div>
                </div>
              <?php endforeach; ?>
              
            </div>
          </div>


        </div>


      </section>

      <!--=============== DEALS ===============-->
      <section class="deals section">
        <div class="deals__container container grid">
          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Deal Of The Day</h3>
              <span class="deals__category">Limited quantities</span>
            </div>

            <h4 class="deals__title">Summer Collection New Morden Design</h4>

            <div class="deals__price flex">
              <span class="new__price">$139.00</span>
              <span class="old__price">$160.99</span>
            </div>

            <div class="deals__group">
              <p class="deals__countdown-text">Hurry Up! Offer End In:</p>

              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="unit">Days</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">22</p>
                  <span class="unit">Hours</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">57</p>
                  <span class="unit">Mins</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">24</p>
                  <span class="unit">Sec</span>
                </div>
              </div>
            </div>

            <div class="deals__btn">
              <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="btn btn--md">Shop Now</a>
            </div>
          </div>

          <div class="deals__item">
            <div class="deals__group">
              <h3 class="deals__brand">Nike Jordan</h3>
              <span class="deals__category">Shirt & Bag</span>
            </div>

            <h4 class="deals__title">Try Something New On Vacation</h4>

            <div class="deals__price flex">
              <span class="new__price">$139.00</span>
              <span class="old__price">$160.99</span>
            </div>

            <div class="deals__group">
              <p class="deals__countdown-text">Hurry Up! Offer End In:</p>

              <div class="countdown">
                <div class="countdown__amount">
                  <p class="countdown__period">02</p>
                  <span class="unit">Days</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">22</p>
                  <span class="unit">Hours</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">57</p>
                  <span class="unit">Mins</span>
                </div>
                <div class="countdown__amount">
                  <p class="countdown__period">24</p>
                  <span class="unit">Sec</span>
                </div>
              </div>
            </div>

            <div class="deals__btn">
              <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="btn btn--md">Shop Now</a>
            </div>
          </div>
        </div>
      </section>

      <!--=============== NEW ARRIVALS ===============-->
      <section class="new__arrivals container section">
        <h3 class="section__title"><span>New</span> Arrivals</h3>

        <div class="new__container swiper">
          <div class="swiper-wrapper">
            <?php foreach ($homeProductsArrival as $new_arrival): ?>
              <div class="product__item swiper-slide">
                <div class="product__banner">
                  <a href="?mod=product&act=detail&id=<?= $new_arrival['id_product']?>" class="product__images">
                    <img src="<?= $baseURL?><?= $new_arrival['img']?>" alt="" class="product__img default">

                    <img src="public/assets/img/a1,3.png" alt="" class="product__img hover">
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
                  <span class="product__category"><?= $new_arrival['id_categories']?></span>
                  <a href="?mod=product&act=detail&id=<?= $new_arrival['id_product']?>">
                    <h3 class="product__title"><?= $new_arrival['name_products']?></h3>
                  </a>
                  <div class="product__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product__price flex">
                    <span class="new__price">$<?= $new_arrival['price_products']?></span>
                  </div>

                  <a href="#" class="action__btn cart__btn" aria-label="Add To Cart">
                    <i class="fi fi-rs-shopping-bag-add"></i>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
           
          </div>
          
          <div class="swiper-button-next"><i class="fi fi-rs-angle-right"></i></div>
          <div class="swiper-button-prev"><i class="fi fi-rs-angle-left"></i></div>
        </div>
      </section>

      <!--=============== SHOWCASE ===============-->
      <section class="showcase section">
        <div class="showcase__container container grid">
            <div class="showcase__wrapper">
              <h3 class="section__title">Hot Release</h3>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/n1.1.png" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Floral Print Casual Cotton Dress
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/n2.1.png" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Ruffled Solid Long Sleeve Blouse
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/n3.1.png" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Multi-color Print V-neck T-Shirt
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="showcase__wrapper">
              <h3 class="section__title">Deals & Outlet</h3>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/j1.1.jpg" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Fish Print Patched T-shirt
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/j2.1.png" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Vintage Floral Print Dress
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/j3.1.jpg" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Multi-color Stripe Circle T-Shirt
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="showcase__wrapper">
              <h3 class="section__title">Top Selling</h3>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/a1,1.png" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Geometric Printed Long Sleeve Blouse
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/a2,1.png" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Print Patchwork Maxi Dress
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/a3,1.png" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Daisy Floral Print Straps Jumpsuit
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="showcase__wrapper">
              <h3 class="section__title">Trendy</h3>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/a4,1.png" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Geometric Printed Long Sleeve Blouse
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/n4.1.png" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Print Patchwork Maxi Dress
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>

              <div class="showcase__item">
                <a href="?mod=product&act=detail&id=<?= $populer['img']?>" class="showcase__img-box">
                  <img 
                  src="public/assets/img/n5.1.jpg" 
                  alt="" 
                  class="showcase__img">
                </a>

                <div class="showcase__content">
                  <a href="?mod=product&act=detail&id=<?= $populer['img']?>">
                    <h4 class="showcase__title">
                      Daisy Floral Print Straps Jumpsuit
                    </h4>
                  </a>

                  <div class="showcase__price flex">
                    <span class="new__price">$238.85</span>
                    <span class="old__price">$245.8</span>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>

      
    </main>
