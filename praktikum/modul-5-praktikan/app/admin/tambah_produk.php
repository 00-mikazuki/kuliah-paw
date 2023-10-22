<?php 
$title = "Manajemen Produk Admin";
$page  = "mjpr";

?>

<?php require_once("templates/header.php"); ?>
<?php 
$hasil = mysqli_query(DB,"SELECT * FROM categories"); 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $data = [$_POST, $_FILES];
    insertProduct($data);
}


?>


    <section id="content-main">
        <div class="content-main-container">

            <h1>TAMBAH PRODUK</h1>
            <div class="form-add-product">
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-add-product-container">
                    <div class="input-form">
                        <div class="input-form-title">Kode Produk</div>
                        <input type="text" name="kodeProduk">
                    </div>
                    <div class="input-form">
                        <div class="input-form-title">Gambar Produk</div>
                        <input type="file" name="gambar" id="gambar">
                    </div>
                    <div class="input-form">
                        <div class="input-form-title">Kategori Produk</div>
                        <select name="kodeKategori" id="kat_produk"">
                            <option value="">Pilih kategori</option>
                            <?php
                            while ($data = mysqli_fetch_assoc($hasil)) {
                                echo '<option value="' . $data["kodeKategori"] . '">' . $data["namaKatagori"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-form">
                        <div class="input-form-title">Nama Produk</div>
                        <input type="text" name="namaProduk">
                    </div>
                    <div class="input-form">
                        <div class="input-form-title">Harga Produk</div>
                        <input type="number" name="hargaProduk">
                    </div>
                    <div class="input-form">
                        <div class="input-form-title">Stok Produk</div>
                        <input type="number" name="stokProduk">
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