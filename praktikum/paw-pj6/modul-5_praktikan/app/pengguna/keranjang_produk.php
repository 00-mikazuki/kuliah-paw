<?php 
$title = "Keranjang Pengguna";
$page  = "krjP";
?>

<?php require_once("templates/header.php"); ?>


    
    <section id="content-header">
        <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
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
                <a class="primary-btn" href="keranjang_produk.php"><img src="<?= BASEURL ?>/assets/images/shopping_cart.png"></a>
            </div>
            <h1>DAFTAR PRODUK DI KERANJANG ANDA</h1>

            <div class="list-products">

                
                <div class="card-product">
                    <div class="card-product-container">
                        <div class="card-product-image">

                        </div>
                        <div class="card-product-title">
                            
                        </div>
                        <div class="card-product-price">
                            
                        </div>
                        <div class="card-product-info">
                            <p class="card-product-category">

                            </p>
                        </div>
                        <div class="card-product-info">
                        <p class="card-product-stock">Jumlah: 
                                <a type="button" class="jumlah-produk-keranjang-btn" href="">-</a> 
                                
                                <a type="button" class="jumlah-produk-keranjang-btn" href="">+</a>                        
                        </p>
                        </div>

                    </div>
                </div>

                
                <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="content-main-container">
                        <div>
                            
                            <br>
                            <h3>Total: </h3>
                            <br>
                        </div>
                        <div class="input-button">
                            <button type="submit" class="primary-btn">Pesan</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </section>

    
<?php require_once("templates/footer.php"); ?>