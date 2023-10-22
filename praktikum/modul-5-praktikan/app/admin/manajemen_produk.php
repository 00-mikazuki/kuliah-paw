<?php 
$title = "Manajemen Produk Admin";
$page  = "mjpr";
?>

<?php require_once("templates/header.php"); ?>
<?php 
    $products = getAllDataProductsWithDetails();
?>

    
    <section id="content-header">
        <form action="" method="post">
            <div class="content-header-container">
                <div class="input-form">
                    <input type="text" placeholder="Cari Produk, Kategori, Stok, Harga">
                </div>
                <div class="input-button">
                    <button type="submit" class="primary-btn">Cari</button>
                </div>
            </div>
        </form>
    </section>


    <section id="content-main">
        <div class="content-main-container">
            <div class="add-product">
                <a class="primary-btn" href="tambah_produk.php">+</a>
            </div>
            <h1>DAFTAR PRODUK</h1>

            <div class="list-products">

                <?php foreach ($products as $product) : ?>
                <div class="card-product">
                    <div class="card-product-container">
                        <div class="card-product-image" style="background-image:url(<?= BASEURL ?>/assets/images/products/<?=$product["gambarProduk"]?>); 
                        background-size:cover;background-position:center;">

                        </div>
                        <div class="card-product-title">
                            <?=$product["namaProduk"]?>
                        </div>
                        <div class="card-product-price">
                            <?= "Rp " . number_format($product["hargaProduk"], 0, ',', '.');?>
                        </div>
                        <div class="card-product-info">
                            <span class="card-product-category"><?=$product["namaKatagori"]?></span>
                            <span class="card-product-stock">Stok : <?=$product["stokProduk"]?></span>
                        </div>
                        <br>
                        <div>
                            <a href="edit_produk.php?pro=<?= $product["kodeProduk"]?>" class="primary-btn">Edit</a> 
                            <a href="hapus_data_produk.php?pro=<?= $product["kodeProduk"]?>" class="primary-btn">Hapus</a>
                        </div>
                        
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section>

    
<?php require_once("templates/footer.php"); ?>