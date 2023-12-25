<?php
$title = "Produk Pengguna";
$page  = "ProP";
?>

<?php require_once("templates/header.php"); ?>

<?php
$products = getAllDataProductsWithDetails();
$total_product = count($products);
$limit = 25;
$total_page = ceil($total_product / $limit);
$active_page = isset($_GET['page']) ? $_GET['page'] : 1;
$first_index = ($active_page > 1) ? ($active_page * $limit) - $limit : 0;
$offset = isset($_GET['page']) ? ($active_page-1) * $limit : 0;

$products = getAllDataProductsWithDetailsByLimit($limit, $offset);

if(isset($_GET['search'])) {
    $products = searchDataProductsWithDetailsByLimit($_GET['keyword'], $limit, $offset);
}
?>


<section id="content-header">
    <form action="" method="get">
        <div class="content-header-container">
            <div class="input-form">
                <input type="text" placeholder="Cari Produk, Kategori, Stok, Harga" name="keyword">
            </div>
            <div class="input-button">
                <button type="submit" class="primary-btn" name="search">Cari</button>
            </div>
        </div>
    </form>
</section>


<section id="content-main">
    <div class="content-main-container">
        <div class="add-product">
            <a class="primary-btn" href="keranjang_produk.php"><img src="<?= BASEURL ?>/assets/images/shopping_cart.png"></a>
        </div>
        <h1>DAFTAR PRODUK</h1>

        <div class="list-products">

            <?php foreach ($products as $product) : ?>
                <div class="card-product">
                    <div class="card-product-container">
                        <div class="card-product-image" style="background-image:url(<?= BASEURL ?>/assets/images/products/<?= $product["gambarProduk"] ?>); background-size:cover;background-position:center;">

                        </div>
                        <div class="card-product-title">
                            <?= ucwords($product["namaProduk"]) ?>
                        </div>
                        <div class="card-product-price">
                            <?= "Rp " . number_format($product["hargaProduk"], 0, ',', '.'); ?>
                        </div>
                        <div class="card-product-info">
                            <span class="card-product-category"><?= ucwords($product["namaKategori"]) ?></span>
                            <span class="card-product-stock">Stok : <?= $product["stokProduk"] ?></span>
                        </div>
                        <br>
                        <div>
                            <?php if ($product["stokProduk"] > 0) : ?>
                                <a href="tambah_produk_keranjang.php?pro=<?= $product["kodeProduk"] ?>" class="primary-btn">Masukkan keranjang</a>
                            <?php else : ?>
                                <a class="primary-btn isDisabled">Masukkan keranjang</a>
                            <?php endif ?>

                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
            <div class="pagination">
                <ul>
                    <li>
                        <a class="primary-btn" href="?page=<?= $active_page-1 ; ?>" <?= ($active_page < 1) ? 'disabled' : '' ?> >Prev</a>
                    </li>
                    <?php for ($i = 1; $i <= $total_page; $i++) : ?>
                        <?php if ($i == $active_page) : ?>
                            <li>
                                <a class="primary-btn active" href="?page=<?= $i ?>" disabled><?= $i ?></a>
                            </li>
                        <?php else : ?>
                            <li>
                                <a class="primary-btn" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <li>
                        <a class="primary-btn href=" href="?page=<?= $active_page+1; ?>" <?= ($active_page == $total_page) ? 'disabled' : '' ?> >Next</a>

                    </li>
                </ul>
            </div>
	</div>
</div>

    </div>
</section>


<?php require_once("templates/footer.php"); ?>