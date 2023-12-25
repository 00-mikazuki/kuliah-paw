<?php

require_once("base.php");


///// ======================== CATEGORIES MODEL ======================== /////
function getAllDataCategories()
{
	global $db;
	try {
		$statement = $db->query("SELECT * FROM categories");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}
function getDataCategory($kodeKategori)
{
	global $db;
	try {
		$statement = $db->prepare("SELECT * FROM categories WHERE kodeKategori = :kodeKategori");
		$statement->bindValue(':kodeKategori', $kodeKategori);
		$statement->execute();
		return $statement->fetch(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}
function getCountProductsByCategory($kodeKategori)
{
	global $db;
	try {
		$statement = $db->prepare("SELECT COUNT(*) AS jumlah_produk FROM products WHERE kodeKategori = :kodeKategori");
		$statement->bindValue(':kodeKategori', $kodeKategori);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}
function insertCategory($data)
{
	global $db;
	$kode = $data["kode"];
	$kategori = $data["kategori"];
	try {
		$statement = $db->prepare("INSERT INTO categories VALUES(:kode,:kategori)");
		$statement->bindValue(':kode', $kode);
		$statement->bindValue(':kategori', $kategori);
		$statement->execute();
		header("location:manajemen_kategori.php");
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}

function editCategory($data)
{
	global $db;
	$kodeKat = $data["kodeKat"];
	$namaKat = $data["namaKat"];
	try {
		$statement = $db->prepare("UPDATE categories SET namaKategori= :namaKat WHERE kodeKategori= :kodeKat");
		$statement->bindValue(':namaKat', $namaKat);
		$statement->bindValue(':kodeKat', $kodeKat);
		$statement->execute();
		header("location:manajemen_kategori.php");
	} catch (PDOException $err) {
		echo "Update data kategori gagal";
		echo $err->getMessage();
	}
}

function deleteCategory($kodeKat)
{
	global $db;
	try {
		$statement = $db->prepare("DELETE FROM categories WHERE kodeKategori = :kodeKat");
		$statement->bindValue(':kodeKat', $kodeKat);
		$statement->execute();
		header("location:manajemen_kategori.php");
	} catch (PDOException $err) {
		echo "Delete data kategori gagal";
		echo $err->getMessage();
	}
}


///// ======================== PRODUCTS MODEL ======================== /////
function getAllDataProducts()
{
	global $db;
	try {
		$statement = $db->prepare("SELECT * FROM products");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}
function getAllDataProductsWithDetails()
{
	global $db;
	try {
		$statement = $db->prepare("SELECT * FROM products JOIN categories ON categories.kodeKategori = products.kodeKategori");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}

function getAllDataProductsWithDetailsByLimit($limit, $offset)
{
	global $db;
	try {
		$statement = $db->prepare(
			"SELECT * 
			FROM products 
			JOIN categories ON categories.kodeKategori = products.kodeKategori 
			LIMIT :limit OFFSET :offset
		");
		$statement->bindValue(':limit', $limit, PDO::PARAM_INT);
		$statement->bindValue(':offset', $offset, PDO::PARAM_INT);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}

function searchDataProductsWithDetailsByLimit($keyword, $limit, $offset)
{
	global $db;
	try {
		$statement = $db->prepare(
			"SELECT * 
			FROM products 
			JOIN categories ON (categories.kodeKategori = products.kodeKategori)
			WHERE namaProduk LIKE :keyword OR
					namaKategori LIKE :keyword OR
					stokProduk LIKE :keyword OR
					hargaProduk LIKE :keyword
			LIMIT :limit OFFSET :offset
		");
		$statement->bindValue(':keyword', "%{$keyword}%");
		$statement->bindValue(':limit', $limit, PDO::PARAM_INT);
		$statement->bindValue(':offset', $offset, PDO::PARAM_INT);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}

function getAllDataProductsWithDetailsByCategory($kodeKat)
{
	global $db;
	try {
		$statement = $db->prepare("SELECT * FROM products JOIN categories ON categories.kodeKategori = products.kodeKategori WHERE products.kodeKategori = :kodeKat");
		$statement->bindValue(':kodeKat', $kodeKat);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}

function getDataProductsByCategory($kodeKategori)
{
	global $db;
	try {
		$statement = $db->prepare("SELECT * FROM products JOIN categories ON products.kodeKategori=categories.kodeKategori WHERE categories.kodeKategori = :kodeKategori");
		$statement->bindValue(':kodeKategori', $kodeKategori);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}

function getDataProduct($kodeProduk)
{
	global $db;
	try {
		$statement = $db->prepare("SELECT * FROM products where kodeProduk = :kodeProduk");
		$statement->bindValue(':kodeProduk', $kodeProduk);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}

function insertProduct($data)
{
	// ambil data file
	$namaFile = $data[1]['gambar']['name'];
	$namaSementara = $data[1]['gambar']['tmp_name'];

	// tentukan lokasi file akan dipindahkan
	// $direktori = BASEPATH."\assets\images\products";
	$direktori = BASEPATH . "/assets/images/products/";


	// Pengecekan tipe file
	$allowedTypes = array("image/jpeg", "image/jpg", "image/png"); // Tipe file yang diizinkan
	if (!in_array($data[1]['gambar']['type'], $allowedTypes)) {
		echo "Tipe file tidak diizinkan. Hanya gambar JPEG, JPG, PNG yang diizinkan.";
	}

	// Pengecekan ukuran file
	$maxSize = 5 * 1024 * 1024; // Maksimal ukuran file 5 MB
	if ($data[1]['gambar']['size'] > $maxSize) {
		echo "Ukuran file terlalu besar. Maksimal ukuran file adalah 5 MB.";
	}

	// Ubah nama file
	$namaFileBaru = $data[0]["kodeProduk"] . '_' . $namaFile; // Membuat nama unik dengan fungsi uniqid

	// Pindahkan file jika tipe dan ukuran sesuai
	if (move_uploaded_file($namaSementara, $direktori . $namaFileBaru)) {
		echo "Gambar berhasil diunggah";
	} else {
		echo "Terjadi kesalahan saat mengunggah gambar.";
	}

	$kodePro = $data[0]["kodeProduk"];
	$kodeKat = $data[0]["kodeKategori"];
	$namaPro = $data[0]["namaProduk"];
	$gambarPro = $namaFileBaru;
	$hargaPro = $data[0]["hargaProduk"];
	$stokPro = $data[0]["stokProduk"];

	global $db;
	try {
		$statement = $db->prepare("INSERT INTO products(kodeProduk, kodeKategori, namaProduk, gambarProduk, hargaProduk, stokProduk) VALUES (:kodePro, :kodeKat, :namaPro, :gambarPro, :hargaPro, :stokPro)");
		$statement->bindValue(':kodePro', $kodePro);
		$statement->bindValue(':kodeKat', $kodeKat);
		$statement->bindValue(':namaPro', $namaPro);
		$statement->bindValue(':gambarPro', $gambarPro);
		$statement->bindValue(':hargaPro', $hargaPro);
		$statement->bindValue(':stokPro', $stokPro);
		$statement->execute();
		header("location:" . BASEURL . "/app/admin/manajemen_produk.php");
	} catch (PDOException $err) {
		echo "Insert data produk gagal";
		echo $err->getMessage();
	}
}

function editProduct($data)
{
	if (empty($data[1]['gambar']['name'])) {
		$namaFileBaru = $data[0]["gambar_lama"];
	} else {
		// ambil data file
		$namaFile = $data[1]['gambar']['name'];
		$namaSementara = $data[1]['gambar']['tmp_name'];

		// tentukan lokasi file akan dipindahkan
		// $direktori = BASEPATH."\assets\images\products";
		$direktori = BASEPATH . "/assets/images/products/";


		// Pengecekan tipe file
		$allowedTypes = array("image/jpeg", "image/jpg", "image/png"); // Tipe file yang diizinkan
		if (!in_array($data[1]['gambar']['type'], $allowedTypes)) {
			echo "Tipe file tidak diizinkan. Hanya gambar JPEG, JPG, PNG yang diizinkan.";
		}

		// Pengecekan ukuran file
		$maxSize = 5 * 1024 * 1024; // Maksimal ukuran file 5 MB
		if ($data[1]['gambar']['size'] > $maxSize) {
			echo "Ukuran file terlalu besar. Maksimal ukuran file adalah 5 MB.";
		}

		// Ubah nama file
		$namaFileBaru = $data[0]["kodeProduk"] . '_' . $namaFile; // Membuat nama unik dengan fungsi uniqid

		// Pindahkan file jika tipe dan ukuran sesuai
		if (move_uploaded_file($namaSementara, $direktori . $namaFileBaru)) {
			echo "Gambar berhasil diunggah";
		} else {
			echo "Terjadi kesalahan saat mengunggah gambar.";
		}
	}

	$kodePro = $data[0]["kodeProduk"];
	$kodeKat = $data[0]["kodeKategori"];
	$namaPro = $data[0]["namaProduk"];
	$gambarPro = $namaFileBaru;
	$hargaPro = $data[0]["hargaProduk"];
	$stokPro = $data[0]["stokProduk"];

	global $db;
	try {
		$statement = $db->prepare("UPDATE products set kodeProduk = :kodePro, kodeKategori = :kodeKat, namaProduk =  :namaPro, gambarProduk = :gambarPro, hargaProduk=:hargaPro, stokProduk=:stokPro where kodeProduk = :kodePro");
		$statement->bindValue(':kodePro', $kodePro);
		$statement->bindValue(':kodeKat', $kodeKat);
		$statement->bindValue(':namaPro', $namaPro);
		$statement->bindValue(':gambarPro', $gambarPro);
		$statement->bindValue(':hargaPro', $hargaPro);
		$statement->bindValue(':stokPro', $stokPro);
		$statement->execute();
		header("location:" . BASEURL . "/app/admin/manajemen_produk.php");
	} catch (PDOException $err) {
		echo "Update data produk gagal";
		echo $err->getMessage();
	}
}

function deleteProduct($kodePro)
{
	global $db;
	try {
		$statement = $db->prepare("DELETE FROM products WHERE kodeProduk = :kodePro");
		$statement->bindValue(':kodePro', $kodePro);
		$statement->execute();
		header("location:" . BASEURL . "/app/admin/manajemen_produk.php");
	} catch (PDOException $err) {
		echo "Delete data produk gagal";
		echo $err->getMessage();
	}
}

//---------------------------------------------------------------------------------------------------------------------------//
///// ======================== CARTS MODEL ======================== /////
function getCartCode($kodePelanggan)
{
	global $db;
	try {
		$statement = $db->prepare("SELECT kodeKeranjang FROM carts WHERE kodePelanggan = :kodePelanggan");
		$statement->bindValue(':kodePelanggan', $kodePelanggan);
		$statement->execute();
		return $statement->fetch(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}
function insertCart($kodePelanggan, $kodeProduk)
{
	global $db;
	$kodeKeranjang = getCartCode($kodePelanggan);
	try {
		$statement = $db->prepare("INSERT INTO cartdetails(kodeKeranjang,kodeProduk) VALUES(:kodeKeranjang,:kodeProduk)");
		$statement->bindValue(':kodeKeranjang', $kodeKeranjang['kodeKeranjang']);
		$statement->bindValue(':kodeProduk', $kodeProduk);
		$statement->execute();

		$previousPage = $_SERVER['HTTP_REFERER'];
		header("Location: $previousPage");
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}
function getAllProductsInCarts($kodePelanggan)
{
	global $db;
	try {
		$statement = $db->prepare("SELECT cartdetails.kodeProduk, namaProduk,gambarProduk, categories.namaKategori, hargaProduk, COUNT(*) AS jumlah_item FROM cartdetails JOIN carts ON cartdetails.kodeKeranjang = carts.kodeKeranjang JOIN products ON cartdetails.kodeProduk = products.kodeProduk JOIN categories ON products.kodeKategori=categories.kodeKategori where carts.kodePelanggan=:kodePelanggan GROUP BY cartdetails.kodeProduk");
		$statement->bindValue(':kodePelanggan', $kodePelanggan);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}
function reduceProductInCart($kodePelanggan, $kodeProduk)
{
	global $db;
	$kodeKeranjang = getCartCode($kodePelanggan);
	try {
		$statement = $db->prepare("DELETE FROM cartdetails WHERE kodeKeranjang=:kodeKeranjang AND kodeProduk=:kodeProduk ORDER BY kodeDetilKeranjang DESC LIMIT 1");
		$statement->bindValue(':kodeKeranjang', $kodeKeranjang['kodeKeranjang']);
		$statement->bindValue(':kodeProduk', $kodeProduk);
		$statement->execute();

		$previousPage = $_SERVER['HTTP_REFERER'];
		header("Location: $previousPage");
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}
function increaseProductInCart($kodePelanggan, $kodeProduk)
{
	global $db;
	$kodeKeranjang = getCartCode($kodePelanggan);
	try {
		$statement = $db->prepare("INSERT INTO  cartdetails(kodeKeranjang,kodeProduk) VALUES (:kodeKeranjang,:kodeProduk)");
		$statement->bindValue(':kodeKeranjang', $kodeKeranjang['kodeKeranjang']);
		$statement->bindValue(':kodeProduk', $kodeProduk);
		$statement->execute();

		$previousPage = $_SERVER['HTTP_REFERER'];
		header("Location: $previousPage");
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}



///// ======================== ORDERS MODEL ======================== /////
function order($kodePelanggan)
{
	global $db;
	try {
		$products = getAllProductsInCarts($kodePelanggan);
		$total = 0;
		foreach ($products as $product) {
			$total += $product["hargaProduk"] * $product["jumlah_item"];
		}
		$orderInsertStm = $db->prepare("INSERT INTO orders(kodePelanggan,total) VALUES (:kodePelanggan,:total)");
		$orderInsertStm->bindValue(':kodePelanggan', $kodePelanggan);
		$orderInsertStm->bindValue(':total', $total);
		$orderInsertStm->execute();

		$lastInsertIdOrder = $db->LastInsertId();
		foreach ($products as $product) {
			$kodeProduk = $product["kodeProduk"];
			$hargaProduk = $product["hargaProduk"];
			$jumlah_item = $product["jumlah_item"];
			$orderDetailInsertStm = $db->prepare("INSERT INTO orderdetails(kodePesanan,kodeProduk,hargaProduk,qty) VALUES (:kodePesanan,:kodeProduk,:hargaProduk,:jumlah_item)");
			$orderDetailInsertStm->bindValue(':kodePesanan', $lastInsertIdOrder);
			$orderDetailInsertStm->bindValue(':kodeProduk', $kodeProduk);
			$orderDetailInsertStm->bindValue(':hargaProduk', $hargaProduk);
			$orderDetailInsertStm->bindValue(':jumlah_item', $jumlah_item);
			$orderDetailInsertStm->execute();
		}

		$kodeKeranjang = getCartCode($kodePelanggan);

		$deleteCartDetails = $db->prepare("DELETE FROM cartdetails WHERE kodeKeranjang=:kodeKeranjang");
		$deleteCartDetails->bindValue(':kodeKeranjang', $kodeKeranjang['kodeKeranjang']);
		$deleteCartDetails->execute();

		header("location:" . BASEURL . "/app/pengguna/daftar_pesanan.php");
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}

function getAllOrder($kodePelanggan)
{
	global $db;
	try {
		$statement = $db->prepare("SELECT * FROM orders WHERE kodePelanggan=:kodePelanggan ORDER BY tanggalPesan DESC");
		$statement->bindValue(':kodePelanggan', $kodePelanggan);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}
function getOrderDetails($kodePesanan)
{
	global $db;
	try {
		$statement = $db->prepare("SELECT * FROM orderdetails JOIN products ON orderdetails.kodeProduk = products.kodeProduk WHERE kodePesanan=:kodePesanan");
		$statement->bindValue(':kodePesanan', $kodePesanan);
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_OBJ);
	} catch (PDOException $err) {
		echo $err->getMessage();
	}
}
