<?php 
$page = 'customer';
$title = 'Customer Data';
?>

<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/navbar.php' ?>

  <section id="content">
    <div class="main-container">
      <form action="#" method="get">
        <div class="search">
          <input type="text" placeholder="Search customer">
          <button type="submit">
            <img src="<?= BASEURL  ?>/assets/img/search.png" alt="search">
          </button>
        </div>
      </form>
      
      <div class="card-container">
        <h2>Customer List:</h2>

        <!-- Product List -->
        <div class="card-list">
          <div class="card row header">
            <div class="col">
              <h3>Username</h3>
            </div>
            <div class="col">
              <h3>Alamat</h3>
            </div>
          </div>
          <div class="card-row-container">
            <div class="card row">
              <div class="col">
                <p>Username customer</p>
              </div>
              <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusamus?</p>
              </div>
            </div>
            <div class="card row">
              <div class="col">
                <p>Username customer</p>
              </div>
              <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusamus?</p>
              </div>
            </div>
            <div class="card row">
              <div class="col">
                <p>Username customer</p>
              </div>
              <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusamus?</p>
              </div>
            </div>
            <div class="card row">
              <div class="col">
                <p>Username customer</p>
              </div>
              <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusamus?</p>
              </div>
            </div>
            <div class="card row">
              <div class="col">
                <p>Username customer</p>
              </div>
              <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusamus?</p>
              </div>
            </div>
            <div class="card row">
              <div class="col">
                <p>Username customer</p>
              </div>
              <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusamus?</p>
              </div>
            </div>
            <div class="card row">
              <div class="col">
                <p>Username customer</p>
              </div>
              <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusamus?</p>
              </div>
            </div>
            <div class="card row">
              <div class="col">
                <p>Username customer</p>
              </div>
              <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusamus?</p>
              </div>
            </div>
            
          </div>
          <!-- end card List -->
        </div>
        <!-- end card container -->
      </div>

    </div>
  </section>

<?php require_once 'templates/footer.php'; ?>