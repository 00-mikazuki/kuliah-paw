<?php 
session_start();

if (!isset($_SESSION["isAdmin"])) {
  // user diarahkan ke halaman login untuk authorization
  header("Location: http://{$_SERVER['HTTP_HOST']}/paw/pertemuan10/challenge3/login.php");
  exit();
}


?>