<?php 
session_start();
unset($_SESSION["isAdmin"]);

echo "<script>
  alert('anda berhasil log out');
  document.location.href = 'home.php';
</script>";
// header("Location: login.php");
exit;

?>