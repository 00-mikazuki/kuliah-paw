<?php 
$page = 'supplier';
$title = 'Edit Supplier';
?>

<?php require_once 'templates/header.php' ?>
<?php require_once 'templates/navbar.php' ?>

  <section>
    <div class="main-container">
      <div class="formin-container">
        <form action="">
          <div class="form-title">
            <h2>Edit Supplier</h2>
          </div>
          <div class="form-element">
            <label for="nama">Nama Supplier</label>
            <input type="text" id="nama">
          </div>
          <div class="form-element button">
            <button href="">Edit</button>
            <button href="" class="cancel">Cancel</button>
          </div>
        </form>
      </div>
      
    </div>
  </section>

<?php require_once 'templates/footer.php'; ?>