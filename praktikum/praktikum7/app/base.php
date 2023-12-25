<?php

define("BASEURL", "http://localhost/paw/praktikum7/");
define("BASEPATH", $_SERVER["DOCUMENT_ROOT"]."/paw/praktikum7/");
// define("DB", new PDO('mysql:host=localhost;dbname=modul-5', 'root', ''));
// define("DB", new PDO('mysql:host=localhost;dbname=praktikum7', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]));
$db = new PDO('mysql:host=localhost;dbname=modul-5', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
