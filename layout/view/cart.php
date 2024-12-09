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

              <td><span class="table__price"><?= number_format($product['price_products'])?> VND</span></td>

              <td>
              <a href="?mod=product&act=decrease&id=<?= $product['id_product'] ?>" class="btn btn-sm btn-outline-primary">-</a>
              <?=$product['quantity']?>
              <a href="?mod=product&act=increase&id=<?= $product['id_product'] ?>" class="btn btn-sm btn-outline-primary">+</a>

              </td>
              <td><span class="table__subtotal"><?=number_format($product['subtotal'])?> VND</span></td>
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
            
              </form>
            </div>
          </div>

          <div class="cart__total">
            <h3 class="section__title">Cart Totals</h3>

            <table class="cart__total-table">

              <tr>
                <td><span class="cart__total-title"></span>Total</td>
                <td><span class="cart__total-price"></span><?= number_format($tong)?> VND</td>
              </tr>
            </table>

            <a href="?mod=product&act=checkout" class="btn flex btn--md">
              <i class="fi fi-rs-box-alt"></i> Proceed To Checkout
            </a>
          </div>
        </div>
      </section>

      
    </main>