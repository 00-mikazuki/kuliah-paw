<?php
// require_once("../modul-5/app/base.php");
require_once("../base.php");
require_once(BASEPATH . "/app/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/pengguna.css">
    <title><?= $title ?></title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
</head>

<body>

    <section id="main-grid" class="light-bg">
        <navbar class="light-bg">
            <?php require_once("navbar.php"); ?>
        </navbar>

        <content>
            <div class="content-container">