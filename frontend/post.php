<?php
include "../backend/baglanti.php";
include "header.php";
$gelenid = $_GET["blogid"];
$sec = "SELECT * FROM `bloglar` WHERE  `bloglar`.`blogid`=' $gelenid'";
$sonuc = mysqli_query($baglanti, $sec);
$cek = $sonuc->fetch_assoc();

?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 justify-content-center ">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading mt-5">
                    <h1> <?= $cek['blogbaslik']  ?></h1>
                    <span class="meta">


                        <?= $cek['blogtarih']  ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p> <?= $cek['blogonyazi']  ?></p>
                <!-- <h2 class="section-heading">The Final Frontier</h2> -->
                <p> <?= $cek['blogaciklama']  ?></p>            
                  <!-- <a href="#!"><img class="img-fluid" src="assets/img/post-sample-image.jpg" alt="..." /></a> -->
             
            </div>
        </div>
    </div>
</article>

<?=include"footer.php"?>