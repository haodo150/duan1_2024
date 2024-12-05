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
              <span class="new__price"><?= number_format($productDetail['price_products'])?> VND</span>
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

            

            
            <?php if(isset($_SESSION['alert'])): ?>
                <div class="alert-danger">
                  <?= $_SESSION['alert'] ?>
                </div>
              <?php endif; unset($_SESSION['alert']) ?>

            <div class="details__action">
              <?php if(isset($_SESSION['user'])): ?>
                <a href="?mod=product&act=addToCart&id=<?= $productDetail['id_product']?>" class="btn btn--sm">Add to Cart</a>
              <?php else: ?>
                <a href="?mod=user&act=login" class="btn btn--sm">Login to add to cart</a>
              <?php endif; ?>
              
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
          <span class="detail__tab" data-target="#reviews">Reviews</span>
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
            <?php foreach($commentList as $cm): ?>
              <div class="review__single">
                <div>
                  <img src="public/assets/img/avatar-1.jpg" alt="" class="review__img">
                  <h4 class="review__title"><?=$cm['username']?></h4>
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
                      <?=$cm['content']?>
                    </p> 

                    <span class="review__date"> <?=$cm['date_time']?></span>
                </div>
              </div>
              <?php endforeach; ?>
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
              <?php if(isset($_SESSION['user'])): ?>
                <form action="?mod=comment&act=post-comment" method="post" class="form grid">
                <input type="hidden" name="id_product" value="<?= $productDetail['id_product'] ?>">
                <textarea class="form__input textarea" name="content" placeholder="Wirte Comment"></textarea>
                <div class="form__btn">
                  <button class="btn">Submit Review</button>
                </div>
              <?php else: ?>
                <p class="form__message">You must be loggin to post your comment</p>
              <?php endif; ?>
                <!-- <div class="form__group grid">
                  <input type="text" placeholder="Name" class="form__input" />
                  <input type="email" placeholder="Email" class="form__input" />
                </div> -->

               
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
              <a href="?mod=product&act=detail&id=<?= $productDetail['id_product']?>" class="product__images">
                <img src="public/assets/img/a1,1.png" alt="" class="product__img default">

                
              </a>
             

              <div class="product__badge light-green">Hot</div>
            </div>
            <div class="product__content">
              <span class="product__category">Clothing</span>
              <a href="?mod=product&act=detail&id=<?= $productDetail['id_product']?>">
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
                <span class="new__price">2.000.000 VND</span>
                <span class="old__price">2.450.000 VND</span>
              </div>

             
            </div>
          </div>

          <div class="product__item">
            <div class="product__banner">
              <a href="?mod=product&act=detail&id=<?= $productDetail['id_product']?>" class="product__images">
                <img src="public/assets/img/a2,1.png" alt="" class="product__img default">

                
              </a>
             

              <div class="product__badge light-orange">Hot</div>
            </div>
            <div class="product__content">
              <span class="product__category">Clothing</span>
              <a href="?mod=product&act=detail&id=<?= $productDetail['id_product']?>">
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
                <span class="new__price">2.000.000 VND</span>
                <span class="old__price">2.450.000 VND</span>
              </div>

             
            </div>
          </div>

          <div class="product__item">
            <div class="product__banner">
              <a href="?mod=product&act=detail&id=<?= $productDetail['id_product']?>" class="product__images">
                <img src="public/assets/img/a3,1.png" alt="" class="product__img default">

                
              </a>
             

              <div class="product__badge light-pink">-30%</div>
            </div>
            <div class="product__content">
              <span class="product__category">Clothing</span>
              <a href="?mod=product&act=detail&id=<?= $productDetail['id_product']?>">
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
                <span class="new__price">2.000.000 VND</span>
                <span class="old__price">2.450.000 VND</span>
              </div>

             
            </div>
          </div>

          <div class="product__item">
            <div class="product__banner">
              <a href="?mod=product&act=detail&id=<?= $productDetail['id_product']?>" class="product__images">
                <img src="public/assets/img/a4,1.png" alt="" class="product__img default">

                
              </a>
             

              <div class="product__badge light-pink">-22%</div>
            </div>
            <div class="product__content">
              <span class="product__category">Clothing</span>
              <a href="?mod=product&act=detail&id=<?= $productDetail['id_product']?>">
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
                <span class="new__price">2.000.000 VND</span>
                <span class="old__price">2.450.000 VND</span>
              </div>

             
            </div>
          </div>

        </div>
      </section>

      
    </main>
