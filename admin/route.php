<div class="wrapper">
    <?php include "header.php"; ?>
    <?php include "koneksi.php"; ?>
    <?php include "sidebar.php"; ?>
    <div class="content-wrapper">
        <section class="content-header">
        <?php
            if (isset($_GET['halaman'])) {
                if ($_GET['halaman']=="admin") {
                    include 'admin.php';
                }
            }else{
                include 'home.php';
            }

            ?>
        </section>
    </div>
</div>