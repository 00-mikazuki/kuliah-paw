<?php 
$title = "Edit Kategori Admin";
$page  = "mjkt";

?>

<?php require_once("../admin/templates/header.php"); ?>
<?php 
$category = getDataCategory($_GET["kat"]);

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    editCategory($_POST);
}
?>


    <section id="content-main">
        <div class="content-main-container">

            <h1>EDIT KATEGORI</h1>
            <div class="form-add-product">
                <form action="" method="post">
                <div class="form-add-product-container">
                    <input name="kodeKat" type="hidden" value="<?= $category["kodeKategori"];?>" />
                    
                    <div class="input-form">
                        <div class="input-form-title">Nama Kategori</div>
                        <input type="text" name="namaKat" value="<?= $category["namaKategori"]?>">
                    </div>

                    <div class="input-button">
                        <button type="submit" class="primary-btn">Edit Kategori</button>
                    </div>
                </div>
                </form>
            </div>
            

        </div>
    </section>

    
<?php require_once("templates/footer.php"); ?>