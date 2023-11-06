<?php
    $kodePro=$_POST['kodeProduk'];
	$namaPro=$_POST['namaProduk'];
    $statement=DB->prepare("UPDATE products SET namaProduk=:$namaPro WHERE kodeProduk=:$kodePro");
	$statement->bindValue(':namaPro',$namaPro);
	$statement->bindValue(':kodePro',$kodePro);
	$statement->execute();
	if ($statement){
		header("location:manajemen_produk.php");
	}
	else{
		echo "Update data produk gagal";
	}
?>