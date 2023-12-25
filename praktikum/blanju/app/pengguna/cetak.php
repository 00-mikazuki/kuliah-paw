<!-- export excel -->
<?php
header("Content-type: application/vnd-ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=Laporan Pesanan.xls");
?>

<?php
require_once("../base.php");
require_once(BASEPATH . "/app/database.php");
$details = getOrderDetails($_GET["ord"]);
?>

<section id="content-main">
	<div class="content-main-container">
		<h1>DETIL PESANAN - <?= $details[0]->kodePesanan ?> </h1>
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