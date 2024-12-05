<!--=============== MAIN ===============-->
<main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.html" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Shop</span></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Checkout</span></li>
        </ul>
      </section>

      <!--=============== CHECKOUT ===============-->
      <form action="?mod=product&act=process-checkout" class="form grid" method="post">
        <section class="checkout section--lg">
          <div class="checkout__container container grid">
            <div class="checkout__group">
              <h3 class="section__title">Billing Details</h3>

                <input type="text" placeholder="Name" name="fullname" class="form__input">

                <input type="text" placeholder="Address" name="address" class="form__input">

                <input type="text" placeholder="City" name="city" class="form__input">

                <input type="text" placeholder="Phone" name="phone" class="form__input">

                <input type="email" placeholder="Email" name="email" class="form__input">

                <h3 class="checkout__title">Additional Information</h3>

                <textarea name="note" placeholder="Order note" id="" cols="30" rows="10" class="form__input textarea"></textarea>
              
            </div>

            <div class="checkout__group">
              <h3 class="section__title">Cart Totals</h3>

              <table class="order__table">
                <tr>
                  <th colspan="2">Products</th>
                  <th>Subtotal</th>
                </tr>
              <?php $total=0;
                $quantity_total = 0;
              foreach($checkout as $item): ?>
                <tr>
                  <td>
                    <img 
                      src="<?= $baseURL ?><?= $item['img']?>" 
                      alt="" 
                      class="order__img"
                    />
                  </td>

                  <td>
                    <h3 class="table__title"><?= $item['name_products']?></h3>
                    <p class="table__quantity">x<?= $item['quantity']?></p>
                  </td>

                  <td><span class="table__price"><?= number_format($item['subtotal'])?> VND</span></td>
                </tr>

              <?php $total += $item['subtotal']; 
                    $quantity_total += $item['quantity']; 
                    endforeach;
                    $_SESSION['quantity'] = $quantity_total;
                    $_SESSION['total'] = $total;
                     ?>
                <tr>
                  <td><span class="order__subtitle">Total</span></td>
<td colspan="2"><span class="order__grand-total"><?= $total ?> VND</span></td>
                </tr>
                
              </table>

              <div class="payment__methods">
                <h3 class="checkout__title payment__title">Payment</h3>

                <div class="payment__option flex">
                  <input type="radio" name="radio" checked 
                  class="payment__input">
                  <lable for="" class="payment__lable"
                  >Direct Bank Transfer</lable
                  >
                </div>

                <div class="payment__option flex">
                  <input type="radio" name="radio" checked 
                  class="payment__input">
                  <lable for="" class="payment__lable"
                  >Check Payment</lable
                  >
                </div>

                <div class="payment__option flex">
                  <input type="radio" name="radio" checked 
                  class="payment__input">
                  <lable for="" class="payment__lable">Paypal</lable>
                </div>
              </div>

              <button type="submit" class="btn btn--md">
                Place Order
              </button>
              
            </div>
          </div>
        </section>
      </form>
      
    </main>