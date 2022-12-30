<?php
session_start();
ob_start();
include "baglanti.php";
include "header.php";
include "oturumKontrol.php";
$sec= $baglanti->query("SELECT * FROM bloglar");
$blogsayi = $sec->num_rows;
$sec= $baglanti->query("SELECT * FROM yonetici");
$yoneticisayi= $sec->num_rows;
$sec= $baglanti->query("SELECT * FROM iletisim");
$iletisim= $sec->num_rows;

?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Genel Bilgiler</h1>
        <a href="./blogekle.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Blog Ekle</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Toplam Blog Sayısı</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $blogsayi ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Toplam Yonetici Sayısı</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $yoneticisayi ?></div>
                        </div>
                        <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>


   

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                          Gelen Mesajlar  </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $iletisim ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

   

   

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include "footer.php";
?>