

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="?mod=page&act=home" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Login / Register</span></li>
        </ul>
      </section>

      <!--=============== LOGIN-REGISTER ===============-->
      <section class="login-register section--lg">
        <div class="login-register__container container grid">
          <div class="login">
            <h3 class="section__title">Login</h3>

            <form action="?mod=user&act=post-login" method="post" class="form grid">
              <input type="email"
                name="Email" 
                placeholder="Your Email" 
                class="form__input"
              />

              <input type="password" 
                name="Password"
                placeholder="Your Password" 
                class="form__input"
              />

              
              <?php ?>
              <div class="form__btn">
                <button type="submit" class="btn">Login</button>
              </div>
              <?php if(isset($_SESSION['alert'])): ?>
                <div class="alert-danger">
                  <?= $_SESSION['alert'] ?>
                </div>
              <?php endif; unset($_SESSION['alert']) ?>

              
            </form>
          </div>
          
          
        </div>
      </section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img src="assets/img/icon-email.svg" alt="" class="newsletter__icon">
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

    
