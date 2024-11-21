<main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="?mod=page&act=home" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Fashion</span></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Henley Shirt</span></li>
        </ul>
      </section>

      <!--=============== DETAILS ===============-->
      <section class="details section--lg">
        <div class="details__container container grid">
          <div class="details__group">
            <img src="<?= $baseURL?><?= $productDetail['img']?>" alt="" class="details__img"> 
          </div>

          <div class="details__group">
            <h3 class="details__title"><?= $productDetail['name_products']?></h3>
            <p class="details__brand">Brands: <span><?= $productDetail['name_categories']?></span></p>

            <div class="details__price flex">
              <span class="new__price">$<?= $productDetail['price_products']?></span>
            </div>

            <p class="short__description">
              Lorom ipsum dolor, sit amet consectetur adipisicing elit. Aliquam
              rem officia, corrupti reiciendis minima nisi modi, quasi, odio
              minus dolore impedit fuga eum eligendi? Officia doloremque facere
              quia. Voluptatum, accusantium!
            </p>

            <ul class="product__list">
              <li class="list__item flex">
                <i class="fi-rs-crown"></i> 1 Year AL Jazerra Brand Warranty
              </li>

              <li class="list__item flex">
                <i class="fi-rs-refresh"></i> 30 Day Return Policy
              </li>

              <li class="list__item flex">
                <i class="fi-rs-credit-card"></i> Cash On Delivery Available
              </li>
            </ul>

            <div class="details__color flex">
              <span class="details__color-title">Color</span>

              <ul class="color__list">
                <li>
                  <a 
                    href="#" 
                    class="color__link" 
                    style="background-color: hsl(37, 100%, 65%);"></a>
                </li>

                <li>
                  <a 
                    href="#" 
                    class="color__link" 
                    style="background-color: hsl(353, 100%, 67%);"></a>
                </li>

                <li>
                  <a 
                    href="#" 
                    class="color__link" 
                    style="background-color: hsl(49, 100%, 60%);"></a>
                </li>

                <li>
                  <a 
                    href="#" 
                    class="color__link" 
                    style="background-color: hsl(304, 100%, 78%);"></a>
                </li>

                <li>
                  <a 
                    href="#" 
                    class="color__link" 
                    style="background-color: hsl(126, 61%, 52%);"></a>
                </li>
              </ul>
            </div>

            <div class="details__size flex">
              <span class="details__size-title">Size</span>

              <ul class="size__list">
                <li>
                  <a href="#" class="size__link size-active">38</a>
                </li>

                <li>
                  <a href="#" class="size__link">39</a>
                </li>

                <li>
                  <a href="#" class="size__link">40</a>
                </li>

                <li>
                  <a href="#" class="size__link">41</a>
                </li>

                <li>
                  <a href="#" class="size__link">42</a>
                </li>

                <li>
                  <a href="#" class="size__link">43</a>
                </li>
              </ul>
            </div>
            <?php if(isset($_SESSION['alert'])): ?>
                <div class="alert-danger">
                  <?= $_SESSION['alert'] ?>
                </div>
              <?php endif; unset($_SESSION['alert']) ?>

            <div class="details__action">
              <input type="number" class="quantity" value="1">
              
              <a href="?mod=page&act=addToCart&id=<?= $productDetail['id_product']?>" class="btn btn--sm">Add to Cart</a>

              <a href="#" class="details__action-btn">
                <i class="fi fi-rs-heart"></i>
              </a>
            </div>

            <ul class="details__meta">
              <li class="meta__list flex"><span>SKU:</span> FWM15VKT</li>
              <li class="meta__list flex">
                <span>Tags:</span> Cloth, Women, Dress
              </li>
              <li class="meta__list flex">
                <span>Availability:</span> 8 Itmes In Stock
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!--=============== DETAILS TAB ===============-->
      <section class="details__tab container">
        <div class="detail__tabs">
          <span class="detail__tab active-tab" data-target="#info">
            Additonal Info
          </span>
          <span class="detail__tab" data-target="#reviews">Reviews(3)</span>
        </div>

        <div class="details__tabs-content">
          <div class="details__tab-content active-tab" content id="info">
            <table class="info__table">
              <tr>
                <th>Stand Up</th>
                <td>35"L x 24"W x 37 - 45"(front to back wheel)</td>
              </tr>

              <tr>
                <th>Foldel (w/o wheels)</th>
                <td>32.5"L x 18.5"W x 16.5"H</td>
              </tr>

              <tr>
                <th>Foldel(w/ wheel)</th>
                <td>32.5"L x 24"W x 18.5"H</td>
              </tr>

              <tr>
                <th>Door Pass Through</th>
                <td>24</td>
              </tr>

              <tr>
                <th>Frame</th>
                <td>Aluminum</td>
              </tr>

              <tr>
                <th>Weight(w/o wheels)</th>
                <td>20 LBS</td>
              </tr>

              <tr>
                <th>Weight Capacity</th>
                <td>60 LBS</td>
              </tr>

              <tr>
                <th>Width</th>
                <td>24"</td>
              </tr>

              <tr>
                <th>Handle height (ground to handle)</th>
                <td>37-45"</td>
              </tr>

              <tr>
                <th>Wheels</th>
                <td>12"ari / wide track slick tread</td>
              </tr>

              <tr>
                <th>Seat back height</th>
                <td>21.5"</td>
              </tr>

              <tr>
                <th>Head room (inside canopy)</th>
                <td>25"</td>
              </tr>

              <tr>
                <th>Coler</th>
                <td>Black, Blue, Red, White</td>
              </tr>

              <tr>
                <th>Size</th>
                <td>38, 39, 40, 41, 42, 43</td>
              </tr>
            </table>
            </table>
          </div>

          <div class="details__tab-content" content id="reviews">
            <div class="reviews__container grid">
              <div class="review__single">
                <div>
                  <img src="public/assets/img/avatar-1.jpg" alt="" class="review__img">
                  <h4 class="review__title">Jacky Chan</h4>
                </div>
                <div class="review__data">
                  <div class="review__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                    <p class="review__description">
                      Thank you very fast shipping from Poland only 3days
                    </p> 

                    <span class="review__date">December 4, 2024 at 3:16 pm</span>
                </div>
              </div>
              
              <div class="review__single">
                <div>
                  <img src="public/assets/img/avatar-2.jpg" alt="" class="review__img">
                  <h4 class="review__title">Jacky Chan</h4>
                </div>
                <div class="review__data">
                  <div class="review__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                    <p class="review__description">
                      Thank you very fast shipping from Poland only 3days
                    </p> 

                    <span class="review__date">December 4, 2024 at 3:16 pm</span>
                </div>
              </div>

              <div class="review__single">
                <div>
                  <img src="public/assets/img/avatar-3.jpg" alt="" class="review__img">
                  <h4 class="review__title">Jacky Chan</h4>
                </div>
                <div class="review__data">
                  <div class="review__rating">
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                    <i class="fi fi-rs-star"></i>
                  </div>
                    <p class="review__description">
                      Thank you very fast shipping from Poland only 3days
                    </p> 

                    <span class="review__date">December 4, 2024 at 3:16 pm</span>
                </div>
              </div>

            </div>

            <div class="review__form">
              <h4 class="review__form-title">
                Add a review
              </h4>

              <div class="rate__product">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>

              <form action="" class="form grid">
                <textarea class="form__input textarea" placeholder="Wirte Comment"></textarea>

                <div class="form__group grid">
                  <input type="text" placeholder="Name" class="form__input" />
                  <input type="email" placeholder="Email" class="form__input" />
                </div>

                <div class="form__btn">
                  <button class="btn">Submit Review</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!--=============== PRODUCTS ===============-->
      <section class="products container section--lg">
        <h3 class="section__title"><span>Related</span> Products</h3>

        <div class="products__container grid">
          

          <div class="product__item">
            <div class="product__banner">
              <a href="?mod=page&act=detail&id=<?= $productDetail['id_product']?>" class="product__images">
                <img src="public/assets/img/a1,1.png" alt="" class="product__img default">

                <img src="public/assets/img/a1,2.png" alt="" class="product__img hover">
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

              <div class="product__badge light-green">Hot</div>
            </div>
            <div class="product__content">
              <span class="product__category">Clothing</span>
              <a href="?mod=page&act=detail&id=<?= $productDetail['id_product']?>">
                <h3 class="product__title">Colorful Pattern Shirts</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">$200.00</span>
                <span class="old__price">$245.00</span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Add To Cart">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item">
            <div class="product__banner">
              <a href="?mod=page&act=detail&id=<?= $productDetail['id_product']?>" class="product__images">
                <img src="public/assets/img/a2,1.png" alt="" class="product__img default">

                <img src="public/assets/img/a2,2.png" alt="" class="product__img hover">
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

              <div class="product__badge light-orange">Hot</div>
            </div>
            <div class="product__content">
              <span class="product__category">Clothing</span>
              <a href="?mod=page&act=detail&id=<?= $productDetail['id_product']?>">
                <h3 class="product__title">Colorful Pattern Shirts</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">$200.00</span>
                <span class="old__price">$245.00</span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Add To Cart">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item">
            <div class="product__banner">
              <a href="?mod=page&act=detail&id=<?= $productDetail['id_product']?>" class="product__images">
                <img src="public/assets/img/a3,1.png" alt="" class="product__img default">

                <img src="public/assets/img/a3,2.png" alt="" class="product__img hover">
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

              <div class="product__badge light-pink">-30%</div>
            </div>
            <div class="product__content">
              <span class="product__category">Clothing</span>
              <a href="?mod=page&act=detail&id=<?= $productDetail['id_product']?>">
                <h3 class="product__title">Colorful Pattern Shirts</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">$200.00</span>
                <span class="old__price">$245.00</span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Add To Cart">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

          <div class="product__item">
            <div class="product__banner">
              <a href="?mod=page&act=detail&id=<?= $productDetail['id_product']?>" class="product__images">
                <img src="public/assets/img/a4,1.png" alt="" class="product__img default">

                <img src="public/assets/img/a4,2.png" alt="" class="product__img hover">
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

              <div class="product__badge light-pink">-22%</div>
            </div>
            <div class="product__content">
              <span class="product__category">Clothing</span>
              <a href="?mod=page&act=detail&id=<?= $productDetail['id_product']?>">
                <h3 class="product__title">Colorful Pattern Shirts</h3>
              </a>
              <div class="product__rating">
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
                <i class="fi fi-rs-star"></i>
              </div>
              <div class="product__price flex">
                <span class="new__price">$200.00</span>
                <span class="old__price">$245.00</span>
              </div>

              <a href="#" class="action__btn cart__btn" aria-label="Add To Cart">
                <i class="fi fi-rs-shopping-bag-add"></i>
              </a>
            </div>
          </div>

        </div>
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
