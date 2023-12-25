<?php
$title = "Daftar Pesanan Pengguna";
$page  = "dfps";
?>

<?php require_once("templates/header.php"); ?>
<?php
$orders = getAllOrder(1);
$labelChart = [];
$valueChart = [];
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
        <h1>DAFTAR PESANAN</h1>
        <div class="form-add-product">
            <div class="table-style">
                <table>
                    <tr>
                        <th>KODE</th>
                        <th>TANGGAL PESAN</th>
                        <th>TOTAL</th>
                        <th>PERINTAH</th>
                    </tr>

                    <?php foreach ($orders as $order) : ?>
                        <?php array_push($labelChart, $order["tanggalPesan"]); ?>
                        <?php array_push($valueChart, $order["total"]); ?>
                        <tr>
                            <td><?= $order["kodePesanan"] ?></td>
                            <td><?= $order["tanggalPesan"] ?></td>
                            <td><?= "Rp " . number_format($order["total"], 0, ',', '.') ?></td>
                            <td><a href="detil_pesanan.php?ord=<?= $order["kodePesanan"] ?>" class="primary-btn">Detil Pesanan</a>
                            </td>
                        </tr>
                    <?php
                    endforeach
                    ?>
                </table>

            </div>
        </div>
    </div>
</section>

<div class="chart-container" style="position: relative; height:40vh; width:80vw">
    <canvas id="myChart"></canvas>
</div>

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: <?= json_encode($labelChart); ?>,
            datasets: [{
                label: 'Daftar Pesanan',
                data: <?= json_encode($valueChart); ?>,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
                // yAxes: [{
                //     ticks: {
                //         beginAtZero: true
                //     }
                // }]
            }
        }
    });
</script>


<?php require_once("templates/footer.php"); ?>