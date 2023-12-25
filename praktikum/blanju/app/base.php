<?php

define("BASEURL", "/paw/blanju");
define("BASEPATH", $_SERVER["DOCUMENT_ROOT"]."/paw/blanju");
// define("DB", new PDO('mysql:host=localhost;dbname=modul-5', 'root', ''));
// define("DB", new PDO('mysql:host=localhost;dbname=modul-5', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]));
$db = new PDO('mysql:host=localhost;dbname=blanju', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
