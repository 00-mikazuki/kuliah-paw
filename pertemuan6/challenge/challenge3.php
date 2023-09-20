<?php 
function iteration($x) {
	for ($i = 1; $i <= $x; $i++) { 
	  echo 'Iteration number ' . $i . '<br>';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iteration</title>
</head>
<body>
	<form action="" method="POST">
		<label for="jumlah">Batas jumlah deret angka:</label>
		<input type="number" name="jumlah">
	</form>
	<?php 
		if (isset($_POST['jumlah'])) {
			iteration((int)$_POST['jumlah']);
		}
	?>
</body>
</html>