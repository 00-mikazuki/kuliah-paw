<?php 
$title = "Manajemen Kategori Admin";
$page  = "mjkt";
?>

<?php require_once("templates/header.php"); ?>
<?php 

$categories = getAllDataCategories();

?>
    
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
            <div class="add-product">
                <a class="primary-btn" href="tambah_kategori.php">+</a>
            </div>
            <h1>DAFTAR KATEGORI</h1>

            <div class="form-add-product">
                <div class="table-style">
                    <table>
                            <tr>
                                <th>KODE</th>
                                <th>NAMA KATEGORI</th>
                                <th>PERINTAH</th>
                            </tr>
                            
                                <?php foreach($categories as $category) : ?>
                                        <tr>
                                            <td><?=$category["kodeKategori"]?></td>
                                            <td><?=$category["namaKatagori"]?></td>
                                            <td><a href="edit_kategori.php?kat=<?= $category["kodeKategori"]?>" class="primary-btn">Edit</a> 
                                            <a href="hapus_data_kategori.php?kat=<?= $category["kodeKategori"]?>" class="primary-btn">Hapus</a></td>
                                        </tr> 
                                <?php
                                   endforeach;
                                ?>
                    </table>
                    
                </div>
            </div>
           

        </div>
    </section>

    
<?php require_once("templates/footer.php"); ?>