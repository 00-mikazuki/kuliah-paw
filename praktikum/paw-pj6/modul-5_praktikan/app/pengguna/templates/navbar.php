<div class="navbar-container">


    <div class="navbar-menu">
        <div class="navbar-logo">
            <img src="<?= BASEURL ?>/assets/images/logo-pengguna-dark.png" alt="Logo Pengguna" >
        </div>
        <nav class="<?php if($page == "beranda") echo 'active'; ?> ">
            <a href="<?= BASEURL ?>/app/pengguna/">Beranda</a>
        </nav>
        <nav class="<?php if($page == "ProP") echo 'active'; ?> ">
            <a href="<?= BASEURL ?>/app/pengguna/produk.php">Produk</a>
        </nav>
        <nav class="<?php if($page == "katProP") echo 'active'; ?> ">
            <a href="<?= BASEURL ?>/app/pengguna/kategori.php">Kategori Produk</a>
        </nav>
        <nav class="<?php if($page == "dfps") echo 'active'; ?> ">
            <a href="<?= BASEURL ?>/app/pengguna/daftar_pesanan.php">Daftar Pesanan</a>
        </nav>
    </div>

</div>