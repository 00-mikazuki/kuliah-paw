<?php require_once 'templates/header.php' ?>

  <section>
    <div class="main-container">
      <form action="#" method="get">
        <div class="search">
          <input type="text" placeholder="Search product">
          <button type="submit">
            <img src="<?= BASEURL ?>/assets/img/search.png" alt="search">
          </button>
        </div>
      </form>
      
      <div class="product-container">
        <h1>Product List:</h1>

        <!-- Product List -->
        <div class="product-list">
          <div class="product">
            <div class="product-pict"></div>
            <div class="product-desc">
              <h3>Product name</h3>
              <p>Categories</p>
              <p>Stock: 0</p>
            </div>
            <div class="buy-product">
              <a href="a.html" class="add-cart">
                <img src="<?= BASEURL ?>/assets/img/cart.png" alt="cart">
              </a>
            </div>
          </div>          

        </div>

      </div>

    </div>
  </section>

<?php require_once 'templates/footer.php'; ?>