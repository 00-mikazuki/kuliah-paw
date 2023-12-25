<?php
$title = "Detil Pesanan Pengguna";
$page  = "dfps";
?>

<?php require_once("templates/header.php"); ?>
<?php
$details = getOrderDetails($_GET["ord"]);
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
        <h1>DETIL PESANAN - <?= $details[0]->kodePesanan ?> </h1>
        <div class="input-button" style="padding-top: 20px;">
            <button onclick="window.print()" type="submit" class="primary-btn">Pdf</button>
            <a href="cetak.php?ord=<?= $_GET["ord"] ?>"><button type="submit" class="primary-btn">Excel</button></a>
        </div>
        <div id="cetak" class="form-add-product">
            <div class="table-style">
                <table>
                    <tr>
                        <th>NAMA PRODUK</th>
                        <th>HARGA PRODUK</th>
                        <th>JUMLAH</th>
                    </tr>

                    <?php foreach ($details as $detail) : ?>
                        <tr>
                            <td><?= ucwords($detail->namaProduk) ?></td>
                            <td><?= "Rp " . number_format($detail->hargaProduk, 0, ',', '.') ?></td>
                            <td><?= $detail->qty ?></td>
                        </tr>
                    <?php
                    endforeach
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>


<?php require_once("templates/footer.php"); ?>