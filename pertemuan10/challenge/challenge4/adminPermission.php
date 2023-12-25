<?php 
session_start();

if (!isset($_SESSION["isAdmin"])) {
  // user diarahkan ke halaman login untuk authorization
  header("Location: login.php");
  exit();
}


?>