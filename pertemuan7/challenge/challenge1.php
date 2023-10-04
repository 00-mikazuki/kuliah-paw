<?php 
function iteration($x, $color) {
	if($x <= 20) {
		for ($i = 1; $i <= $x; $i++) {
		  echo "<div style=\"color: $color\">Iteration number $i</div>";
		}
	} else {
		echo "<div>Batas jumlah deret angka tidak boleh melebihi 20</div>";
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
		<input type="number" name="jumlah" value="<?php if(isset($_POST['jumlah'])) echo $_POST['jumlah'] ?>"><br>
		<label for="warna">Warna:</label>
		<input type="text" name="warna" value="<?php if(isset($_POST['warna'])) echo $_POST['warna'] ?>"><br>
		<button type="submit" name="submit">submit</button>
	</form>
	<?php 
		if (isset($_POST['submit'])) {
			iteration($_POST['jumlah'], $_POST['warna']);
		}
	?>
</body>
</html>