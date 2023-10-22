<?php 
require_once("../../app/base.php");
require_once(BASEPATH."/app/database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/base.css">
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Joti+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost">
    <title><?= $title ?></title>
</head>
<body>

    <section id="main-grid" class="light-bg">
        <sidebar class="primary-bg">
            <?php require_once("sidebar.php"); ?>
        </sidebar>

        <content>
            <div class="content-container">
                
                






