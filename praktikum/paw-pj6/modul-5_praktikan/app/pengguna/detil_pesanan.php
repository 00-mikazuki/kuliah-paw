<?php 
$title = "Detil Pesanan Pengguna";
$page  = "dfps";
?>

<?php require_once("templates/header.php"); ?>


    
<section id="content-header">
        <form action="" method="post">
            <div class="content-header-container">
                <div class="input-form">
                    <input type="text" placeholder="Cari Kategori">
                </div>
                <div class="input-button">
                    <button type="submit" class="primary-btn">Cari</button>
                </div>
            </div>
        </form>
    </section>


    <section id="content-main">
        <div class="content-main-container">
            <h1>DETIL PESANAN - </h1>
            <div class="form-add-product">
                <div class="table-style">
                    <table>
                        <tr>
                            <th>NAMA PRODUK</th>
                            <th>HARGA PRODUK</th>
                            <th>JUMLAH</th>
                        </tr>
                        

                    </table>
                </div>
            </div>
        </div>
    </section>

    
<?php require_once("templates/footer.php"); ?>

