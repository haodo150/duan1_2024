<main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="?mod=page&act=home" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Shop</span></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Cart</span></li>
        </ul>
      </section>

      <!--=============== CART ===============-->
      <section class="cart section--lg container">
        <div class="table__container">
          <table class="table">
            <tr>
              <th>STT</th>
              <th>Image</th>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
              <th>Remove</th>
            </tr>
             <?php $i=1; $tong=0; foreach($cart as $product): ?>
            <tr>
              <td><?= $i ?></td>
              <td><img src="<?= $baseURL ?><?=$product['img']?>" alt="" class="table__img"></td>
              <td><h3 class="table__title"><?=$product['name_products']?></h3>
                <p class="table__description">Maboriosam in a tonto nesciung distingy magndapibus</p>
              </td>

              <td><span class="table__price">$<?=$product['price_products']?></span></td>
              <td><?=$product['quantity']?></td>
              <td><span class="table__subtotal">$<?=number_format($product['subtotal'])?></span></td>
              <td><a href="?mod=product&act=delete&index=<?= $i-1 ?>"><i class="fi fi-rs-trash table__trash"></i></a></td>
            </tr>
             <?php 
             $i++;
            $tong += $product['subtotal'];
            endforeach; ?>
            

          </table>
        </div>

        <div class="cart__actions">

          <a href="?mod=page&act=products" class="btn flex btn--md">
            <i class="fi-rs-shopping-bag"></i>Continue Shopping
          </a> 
        </div>

        <div class="divider">
          <i class="fi fi-rs-fingerprint"></i>
        </div>

        <div class="cart__group grid">
          <div>
            <div class="cart__shipping">
              <h3 class="section__title">Calculate Shipping</h3>

              <form action="" class="form grid">
                <input type="text" placeholder="State / Country" class="form__input">

                <div class="form__group grid">
                  <input type="text" placeholder="City" class="form__input">

                  <input type="text" placeholder="PostCode / ZIP" class="form__input">
                </div>

                <div class="form__btn">
                  <button class="btn flex btn--sm">
                    <i class="fi-rs-shuffle">Update</i>
                  </button>
                </div>
              </form>
            </div>

            <div class="cart__coupon">
              <h3 class="section__title">Apply Coupon</h3>
              <form action="" class="coupon__form form grid">
                <div class="form__group grid">
                  <input type="text" class="form__input" placeholder="Enter Your Coupon">

                  <div class="form__btn">
                    <button class="btn flex btn--sm">
                      <i class="fi-rs-label">Apply</i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="cart__total">
            <h3 class="section__title">Cart Totals</h3>

            <table class="cart__total-table">

              <tr>
                <td><span class="cart__total-title"></span>Total</td>
                <td><span class="cart__total-price"></span>$<?= number_format($tong)  ?></td>
              </tr>
            </table>

            <a href="?mod=product&act=checkout" class="btn flex btn--md">
              <i class="fi fi-rs-box-alt"></i> Proceed To Checkout
            </a>
          </div>
        </div>
      </section>

      
    </main>