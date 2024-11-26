

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
          <div class="register">
            <h3 class="section__title">Create an Account</h3>

            <form action="?mod=user&act=post-register" method="post" class="form grid">
              <input type="text" 
                placeholder="Username" 
                class="form__input" name="Username"
              />

              <input type="email" 
                placeholder="Your Email" 
                class="form__input" name="Email"
              />

              <input type="password" 
                placeholder="Your Password" 
                class="form__input" name="Password"
              />

              <div class="form__btn">
                <button type="submit" class="btn">Submit & Register</button>
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

      
    </main>

    
