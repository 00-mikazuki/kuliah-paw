<?php

require_once("base.php"); 


///// ======================== CATEGORIES MODEL ======================== /////
function getAllDataCategories() 
{
    return mysqli_query(DB,"SELECT * FROM categories")->fetch_all(MYSQLI_ASSOC);
}
function getDataCategory($kodeKategori) 
{
    return mysqli_query(DB,"SELECT * FROM categories WHERE kodeKategori = '$kodeKategori'")->fetch_all(MYSQLI_ASSOC);
}

function insertCategory($data)
{
    $kode = $data["kode"];
	$kategori = $data["kategori"];
	$sql="INSERT INTO categories VALUES('$kode','$kategori')";
	if (mysqli_query(DB,$sql))
    {
		header("location:manajemen_kategori.php");
	}
	else{
		echo "Insert data kategori gagal";
	}
}



///// ======================== PRODUCTS MODEL ======================== /////
function getAllDataProducts() 
{
    return mysqli_query(DB,"SELECT * FROM products")->fetch_all(MYSQLI_ASSOC);
}
function getAllDataProductsWithDetails() 
{
    return mysqli_query(DB,"SELECT * FROM products JOIN categories ON categories.kodeKategori = products.kodeKategori")->fetch_all(MYSQLI_ASSOC);
}
function getDataProductsByCategory($kodeKategori) 
{
    return mysqli_query(DB,"SELECT * FROM products WHERE kodeKategori = '$kodeKategori'")->fetch_all(MYSQLI_ASSOC);
}
function getDataProduct($kodeProduk) 
{
    return mysqli_query(DB,"SELECT * FROM products where kodeProduk = $kodeProduk")->fetch_all(MYSQLI_ASSOC);
}




function insertProduct($data)
{


    $kodePro=$data[0]["kodeProduk"];
	$kodeKat=$data[0]["kodeKategori"];
	$namaPro=$data[0]["namaProduk"];
	$gambarPro="wortel.jpg";
	$hargaPro=$data[0]["hargaProduk"];
	$stokPro=$data[0]["stokProduk"];


	$sql = "INSERT INTO products (kodeProduk, kodeKategori, namaProduk, gambarProduk, hargaProduk, stokProduk) VALUES ('$kodePro', '$kodeKat', '$namaPro', '$gambarPro', '$hargaPro', '$stokPro')";
	
	if (mysqli_query(DB,$sql))
    {
		header("location:".BASEURL."/app/admin/manajemen_produk.php");
	}
	else
    {
		echo "Insert data produk gagal";
	}

}


?>