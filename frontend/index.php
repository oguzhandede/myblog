<?php

include "../backend/baglanti.php";
include "header.php";

$sec = "select * from bloglar";
$sonuc = $baglanti->query($sec);
?>
<header>
    <style>
        .kutu5 {
            width: 100%;
            margin: auto;
            text-align: center;
            /* background-color: #818181; */
            /* border: 1px solid black; */
            /* background-color: ; */

        }

        .kutu5 p {
            margin: auto;
            padding: 10px;
            font-size: 20px;
            /* color: white; */
            width: 60%;
            float: auto;
            /* display: inline-block;
             position: relative;
             text-align: center;     */
        }
    </style>
</header>
<!-- Page Content-->
<div class="container px-4 px-lg-5">
    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0 mt-4" src="./assets/dantel.jpeg" alt="..." /></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Neler Olup Bittigini Ögrenmek İstermisin?</h1>
            <p >Bu sayfanın kuruluş amacı kimin yaptıgını nasıl yaptıgını, resmdeki dantelin anlamını ??</p>
            <a class="btn btn-primary" href="./hakkimizda.php">Devamını Oku!!</a>
        </div>
    </div>
    <!-- Call to Action-->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <p class="text-white m-0">Eskcekids</p>
        </div>
    </div>
</div>
<!-- Content Row-->
<?php
if ($sonuc->num_rows > 0) {
    // verileri listeleyebiliriz
    while ($cek = $sonuc->fetch_assoc()) {
        $id = $cek["blogid"];
        $blogbaslik = $cek["blogbaslik"];
        $blogonyazi = $cek["blogonyazi"];


?>

        <div class="container p-3">
            <div class="card">
                <section>
                    <div class="kutu5">
                        <h3><?php echo $blogbaslik; ?></h3>
                        <!-- <hr width="700px"   color="dodgerblue"> -->
                        <p><?php echo $blogonyazi; ?></p>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="post.php?blogid=<?= $id ?>">Devamını Oku!!</a></div>
                    </div>
                </section>
            </div>
        </div>

        <!-- <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $blogbaslik; ?></h2>
                        <p class="card-text"> <?php echo $blogonyazi; ?></p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="post.php?blogid=<?= $id ?>">Devamını Oku!!</a></div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $blogbaslik; ?></h2>
                        <p class="card-text"><?php echo $blogonyazi; ?></p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Devamını Oku!!</a></div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $blogbaslik; ?></h2>
                        <p class="card-text"><?php echo $blogonyazi; ?></p>
                    </div>
                    <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Devamını Oku!!</a></div>
                </div>
            </div>
        </div> -->


<?php

    }
}

?>
</div>
<?php

include "footer.php";
?>