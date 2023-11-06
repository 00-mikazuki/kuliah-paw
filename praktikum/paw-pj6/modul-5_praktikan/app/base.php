<?php 

define("BASEURL", "http://localhost/modul-5_praktikan");
define("BASEPATH", $_SERVER["DOCUMENT_ROOT"]."/modul-5_praktikan");
define("DB", new PDO('mysql:host=localhost;dbname=modul-5', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]));
?>