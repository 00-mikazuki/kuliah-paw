<?php include_once("templates/header.php"); ?>
<?php include_once("getData.php"); ?>
    
    <?php foreach($datas as $data) : 
	?>
		
    <div class="card-anime">
        <div class="card-logo"><img src="<?= $data["info"]["logo"] ?>" alt=""></div>
        <div class="card-title">
            <h1><?= $data["info"]["title"] ?></h1>
        </div>
        <div class="card-desc"><p><?= $data["info"]["description"] ?></p></div>
        <a href="detailAnime.php?slug=<?= $data["info"]["slug"] ?>">
            <div class="card-btn">
                Lihat Detail Anime ->
            </div>
        </a>
    </div>
    
    
    <?php endforeach; ?>

    
<?php include_once("templates/footer.php"); ?>