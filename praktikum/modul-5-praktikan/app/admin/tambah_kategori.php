<?php 
$title = "Tambah Kategori Admin";
$page  = "mjkt";
?>

<?php require_once("templates/header.php"); ?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    insertCategory($_POST);
}


?>



    <section id="content-main">
        <div class="content-main-container">

            <h1>TAMBAH KATEGORI</h1>
            <div class="form-add-product">
                <form action="" method="post">
                <div class="form-add-product-container">

                    <div class="input-form">
                        <div class="input-form-title">Kode Kategori</div>
                        <input type="text" name="kode">
                    </div>
                    <div class="input-form">
                        <div class="input-form-title">Nama Kategori</div>
                        <input type="text" name="kategori" placeholder="Sayuran">
                    </div>

                    <div class="input-button">
                        <button type="submit" class="primary-btn">Tambah Produk</button>
                    </div>
                </div>
                </form>
            </div>
            

        </div>
    </section>

    
<?php require_once("templates/footer.php"); ?>