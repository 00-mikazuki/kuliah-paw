<?php 
$title = "Kategori Produk Pengguna";
$page  = "katProP";
?>

<?php require_once("templates/header.php"); ?>
<?php
   $categories = getAllDataCategories();
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
            <h1>DAFTAR KATEGORI PRODUK</h1>

            <div class="list-products">

                <?php foreach ($categories as $category) : ?>
                <div class="card-product">
                    <div class="card-product-container">
                        <p>Kategori</p>
                        <div class="card-product-title-pengguna">
                            <?= ucwords($category["namaKategori"])?>
                        </div>
                        <br>
                        <div class="card-category-info-pengguna">
                            <?php
                                $count = getCountProductsByCategory($category["kodeKategori"]);
                                echo $count[0]["jumlah_produk"]. " Produk";
                            ?>
                        </div> 
                        <br>
                        <div>
                            <a href="produk_kategori.php?kat=<?= $category["kodeKategori"]?>" class="primary-btn">Lihat Produk</a> 
                        </div>
                        
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section>

    
<?php require_once("templates/footer.php"); ?>