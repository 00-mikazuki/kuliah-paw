<?php include_once("templates/header.php"); ?>
<?php include_once("getData.php"); ?>
<?php $urlAnim = $_GET["slug"]; ?>

    <div class="card-horz">
        <div class="card-horz-container">
            <div class="card-horz-logo">
                <img src="<?= $datas[$urlAnim]["info"]["logo"] ?>" />
            </div>
            <div class="card-horz-info">
                <h1 class="card-title"><?= $datas[$urlAnim]["info"]["title"] ?></h1>
				<span class="card-desc"><b><?= $datas[$urlAnim]["info"]["author"] ?></b></p>
                <p class="card-desc"><?= $datas[$urlAnim]["info"]["description"] ?></p>
            </div>
        </div>
    </div>
    
    <div>
        <h1 class="card-title title-content">DAFTAR CHARACTER</h1>
        <?php foreach($datas[$urlAnim]["characters"] as $data) :  ?>
        <div class="card">
            <div class="card-img"><img src="<?= $data["photo"] ?>" alt="<?= $data["name"] ?><"></div>
            <div class="card-title"><h2><?= $data["name"] ?></h2></div>
            <div class="card-desc"><?= $data["height"] ?> cm</div>
            <div class="card-desc"><?= $data["age"] ?></div>
        </div>
        <?php endforeach; ?>

    </div>

<?php include_once("templates/footer.php"); ?>
