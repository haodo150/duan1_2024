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
      <section class="checkout section--lg">
        <div class="checkout__container container grid">
          <div class="checkout__group">
            <h3 class="section__title">Billing Details</h3>

            <form action="" class="form grid">
              <input type="text" placeholder="Name" class="form__input">

              <input type="text" placeholder="Address" class="form__input">

              <input type="text" placeholder="City" class="form__input">

              <input type="text" placeholder="Phone" class="form__input">

              <input type="email" placeholder="Email" class="form__input">

              <h3 class="checkout__title">Additional Information</h3>

              <textarea name=""   placeholder="Order note" id="" cols="30" rows="10" class="form__input textarea"></textarea>
            </form>
          </div>

           <div class="checkout__group">
            <h3 class="section__title">Cart Totals</h3>

            <table class="order__table">
              <tr>
                <th colspan="2">Products</th>
                <th>Subtotal</th>
              </tr>
            <?php $total=0; foreach($checkout as $item): ?>
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

                <td><span class="table__price">$<?= number_format($item['subtotal'])?></span></td>
              </tr>

            <?php $total += $item['subtotal']; 
                  endforeach; ?>
              <tr>
                <td><span class="order__subtitle">Total</span></td>
                <td colspan="2"><span class="order__grand-total">$<?= $total ?></span></td>
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

            <button class="btn btn--md">
              <a href="?mod=product&act=process-checkout">Place Order</a>
            </button>
           </div>
        </div>
      </section>

      
    </main>