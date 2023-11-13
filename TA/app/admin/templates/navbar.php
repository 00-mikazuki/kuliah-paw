  <section>
    <nav>
      <div class="nav-container admin">
        <div class="logo">
          <h1>MeatMaster (admin)</h1>
        </div>
        <ul class="link-list">
          <li><a href="<?= BASEURL ?>/app/admin/product-data.php" class="<?php if($page == 'product') echo 'link-active' ?>">Product Data</a></li>
          <li><a href="<?= BASEURL ?>/app/admin/supplier-data.php" class="<?php if($page == 'supplier') echo 'link-active' ?>">Supplier Data</a></li>
          <li><a href="<?= BASEURL ?>/app/admin/customer-data.php" class="<?php if($page == 'customer') echo 'link-active' ?>">Customer Data</a></li>
          <li><a href="#" class="logout" >Log out</a></li>
        </ul>
        <div class="hamburger-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>
  </section>