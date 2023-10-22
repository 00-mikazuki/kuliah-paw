<?php 

define("BASEURL", "http://localhost/modul-5-praktikan");
define("BASEPATH", $_SERVER["DOCUMENT_ROOT"]."praktikum/modul-5-praktikan");
define("DB", mysqli_connect("localhost","root","","modul5"));

if (!DB) 
{
        die("Connection failed: " . mysqli_connect_error());
}
  else 
  {
    echo "Connected successfully";
  }