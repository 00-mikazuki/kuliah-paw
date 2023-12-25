<?php 
$title = "Keranjang Pengguna";
$page  = "krjP";
?>

<?php require_once("templates/header.php"); ?>
<?php
   $products = getAllProductsInCarts(1);

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["submit_cari"])) {
            // Search
        }
        elseif (isset($_POST["submit_pesan"])) {
            order(1);
        }
   }
?>

    
    <section id="content-header">
        <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
            <div class="content-header-container">
                <div class="input-form">
                    <input type="text" placeholder="Cari Produk, Kategori, Stok, Harga">
                </div>
                <div class="input-button">
                    <button type="submit" name="submit_cari" class="primary-btn">Cari</button>
                </div>
            </div>
        </form>
    </section>


    <section id="content-main">
        <div class="content-main-container">
            <div class="add-product">
                <a class="primary-btn" href="keranjang_produk.php"><img src="<?= BASEURL ?>/assets/images/shopping_cart.png"></a>
            </div>
            <h1>DAFTAR PRODUK DI KERANJANG ANDA</h1>

            <div class="list-products">

                <?php foreach ($products as $product) : ?>
                <div class="card-product">
                    <div class="card-product-container">
                        <div class="card-product-image" style="background-image:url(<?= BASEURL ?>/assets/images/products/<?=$product["gambarProduk"]?>); background-size:cover;background-position:center;">

                        </div>
                        <div class="card-product-title">
                            <?= ucwords($product["namaProduk"])?>
                        </div>
                        <div class="card-product-price">
                            <?= "Rp " . number_format($product["hargaProduk"], 0, ',', '.');?>
                        </div>
                        <div class="card-product-info">
                            <p class="card-product-category"><?=ucwords($product["namaKategori"])?></p>
                        </div>
                        <div class="card-product-info">
                        <p class="card-product-stock">Jumlah: 
                                <a type="button" class="jumlah-produk-keranjang-btn" href="kurang_jumlah_produk_keranjang.php?pro=<?=$product["kodeProduk"]?>">-</a> 
                                <?=$product["jumlah_item"]?>
                                <a type="button" class="jumlah-produk-keranjang-btn" href="tambah_jumlah_produk_keranjang.php?pro=<?=$product["kodeProduk"]?>">+</a>                        
                            </p>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>
                
                <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="content-main-container">
                        <div>
                            <?php
                                $total = 0;
                                foreach ($products as $product) {
                                    $total += $product["hargaProduk"] * $product["jumlah_item"];
                                }                            
                            ?>
                            <br>
                            <h3>Total: <?= "Rp " . number_format($total, 0, ',', '.');?></h3>
                            <br>
                        </div>
                        <div class="input-button">
                            <button type="submit" name="submit_pesan" class="primary-btn">Pesan</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </section>

    
<?php require_once("templates/footer.php"); ?>