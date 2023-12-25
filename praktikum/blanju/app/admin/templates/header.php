<?php
require_once("../base.php");
require_once(BASEPATH . "/app/database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/admin.css">
    <title><?= $title ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <section id="main-grid" class="light-bg">
        <sidebar class="primary-bg">
            <?php require_once("sidebar.php"); ?>
        </sidebar>

        <content>
            <div class="content-container">