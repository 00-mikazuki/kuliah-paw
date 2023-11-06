<?php 
$title = "Manajemen Produk Admin";
$page  = "mjpr";
?>

<?php 
    require_once("templates/header.php"); ?>
<?php



if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $data = [$_POST, $_FILES];
    editProduct($data);
}else{
    $kodePro=$_GET["pro"];
    $product = getDataProduct($kodePro);
    $categories = getAllDataCategories();
}

?>

    <section id="content-main">
        <div class="content-main-container">

            <h1>EDIT PRODUK</h1>
            <div class="form-add-product">
                <form action="" method="post" enctype="multipart/form-data">
                <div class="form-add-product-container">
                    <div class="input-form">
                        <input name="kodeProduk" type="hidden" value="<?= $product[0]["kodeProduk"] ?>" />
                    </div>
                    <div class="input-form">
                        <div class="input-form-title">Gambar Produk
                            <br>
                            <img src="<?= BASEURL ?>/assets/images/products/<?=$product[0]["gambarProduk"]?>" width=30% height=20%>
                            <input type="hidden" name="gambar_lama" value="<?=$product[0]["gambarProduk"]?>">
                        </div>
                        <input type="file" name="gambar" id="gambar">
                    </div>
                    <div class="input-form">
                        <div class="input-form-title">Kategori Produk</div>
                        <select name="kodeKategori" id="kat_produk">
                            <option value="">Pilih kategori</option>
                            <?php foreach ($categories as $category) {
                                echo '<option value="' . $category["kodeKategori"].'"' . ($category["kodeKategori"] == $product[0]["kodeKategori"] ? 'selected' : ''). '>' . $category["namaKategori"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-form">
                        <div class="input-form-title">Nama Produk</div>
                        <input type="text" name="namaProduk" value="<?=$product[0]["namaProduk"]?>"/>
                    </div>
                    <div class="input-form">
                        <div class="input-form-title">Harga Produk</div>
                        <input type="number" name="hargaProduk" value="<?=$product[0]["hargaProduk"]?>"/>
                    </div>
                    <div class="input-form">
                        <div class="input-form-title">Stok Produk</div>
                        <input type="number" name="stokProduk" value="<?=$product[0]["stokProduk"]?>"/>
                    </div>

                    <div class="input-button">
                        <button type="submit" class="primary-btn">Edit Produk</button>
                    </div>
                </div>
                </form>
            </div>
            

        </div>
    </section>

    
<?php require_once("templates/footer.php"); ?>