<main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.html" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Account</span></li>
        </ul>
      </section>

      <!--=============== ACCOUNTS ===============-->
      <section class="accounts section--lg">
        <div class="accounts__container container grid">
          <div class="account__tabs">
            <p class="account__tab active-tab" data-target="#dashboard">
              <i class="fi fi-rs-settings-sliders"></i> Dashboard
            </p>

            <p class="account__tab" data-target="#orders">
              <i class="fi fi-rs-shopping-bag"></i> Orders
            </p>

            <p class="account__tab" data-target="#update-profile">
              <i class="fi fi-rs-user"></i> Update Profile
            </p>

            <p class="account__tab" data-target="#address">
              <i class="fi fi-rs-marker"></i> My Address
            </p>

            <p class="account__tab" data-target="#change-password">
              <i class="fi fi-rs-user"></i> Change Password
            </p>

            <p class="account__tab">
              <i class="fi fi-rs-exit"></i> Logout
            </p>
          </div>

          <div class="tabs__content">
            <div class="tab__content active-tab" content id="dashboard">
              <h3 class="tab__header">Hello Rosie</h3>

              <div class="tab__body">
                <p class="tab__description">Lorom ipsum dolor, sit amet consectetur adipisicing elit. Aliquam rem officia, corrupti reiciendis minima nisi modi, quasi, odio minus dolore impedit fuga eum eligendi? Officia doloremque facere quia. Voluptatum, accusantium!</p>
              </div>
            </div>

            <div class="tab__content" content id="orders">
              <h3 class="tab__header">Your Orders</h3>

              <div class="tab__body">
                <table class="placed__order-table">
                  <tr>
                    <th>Orders</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Actions</th>
                  </tr>

                  <tr>
                    <td>#1357</td>
                    <td>March 45, 2020</td>
                    <td>Processing</td>
                    <td>$125.000</td>
                    <td><a href="#" class="view__order">View</a></td>
                  </tr>

                  <tr>
                    <td>#1337</td>
                    <td>June 29, 2020</td>
                    <td>Completed</td>
                    <td>$126.000</td>
                    <td><a href="#" class="view__order">View</a></td>
                  </tr>

                  <tr>
                    <td>#1397</td>
                    <td>August 02, 2020</td>
                    <td>Completed</td>
                    <td>$127.000</td>
                    <td><a href="#" class="view__order">View</a></td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="tab__content" content id="update-profile">
              <h3 class="tab__header">Update Profile</h3>

              <div class="tab__body">
                <form action="" class="form grid">
                  <input type="text" placeholder="Username" 
                  class="form__input">

                  <div class="form__btn">
                    <button class="btn btn--md">Save</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="tab__content" content id="address">
              <h3 class="tab__header">shipping Address</h3>

              <div class="tab__body">
                <address class="address">
                  3522 inerstate <br> 75 Business Spur, <br> SauLt Ste. <br> Marie, MI 76382
                </address>
                <p class="city">New York</p>
                <a href="" class="edit">Edit</a>
              </div>
            </div>

            <div class="tab__content" content id="change-password">
              <h3 class="tab__header">Change Password</h3>

              <div class="tab__body">
                <form action="" class="form grid">
                  <input 
                    type="password" 
                    placeholder="Current Password" 
                    class="form__input"
                  />

                  <input 
                    type="password" 
                    placeholder="New Password" 
                    class="form__input"
                  />

                  <input 
                    type="password" 
                    placeholder="Confirm Password" 
                    class="form__input"
                  />


                  <div class="form__btn">
                    <button class="btn btn--md">Save</button>
                  </div>
                </form>
              </div>
            </div>
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