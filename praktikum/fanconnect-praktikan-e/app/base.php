<?php 
ob_start();
session_start();
define("BASEURL", "http://localhost/paw/fanconnect-praktikan-e");
define("BASEPATH", $_SERVER["DOCUMENT_ROOT"]."/paw/fanconnect-praktikan-e");

$GLOBALS["db"] = new PDO(dsn: 'mysql:host=localhost;dbname=fanconnect', username: 'root', password: '');

