<div class="sidebar-container">

    <div class="sidebar-logo">
        <img src="<?= BASEURL ?>/assets/images/logo-admin-light.png" alt="Logo Admin" >
    </div>

    <div class="sidebar-menu">
        <nav class="<?php if($page == "beranda") echo 'active'; ?> ">
            <a href="<?= BASEURL ?>/app/admin/">Beranda</a>
        </nav>
        <nav class="<?php if($page == "mjpr") echo 'active'; ?> ">
            <a href="<?= BASEURL ?>/app/admin/manajemen_produk.php">Manajemen Produk</a>
        </nav>
        <nav class="<?php if($page == "mjkt") echo 'active'; ?> ">
            <a href="<?= BASEURL ?>/app/admin/manajemen_kategori.php">Manajemen Kategori</a>
        </nav>
        <nav class="<?php if($page == "dfps") echo 'active'; ?> ">
            <!-- <a href="<?= BASEURL ?>/app/admin/daftar_pesanan.php">Daftar Pesanan</a> -->
        </nav>
    </div>

</div>
