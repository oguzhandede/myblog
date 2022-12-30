<?php
session_start();
ob_start();
include "baglanti.php";
include "header.php";
include "oturumKontrol.php";

$cekilenid = $_GET["blogid"];
$sec = "SELECT * FROM `bloglar` WHERE  `bloglar`.`blogid`=' $cekilenid'";
$sonuc = mysqli_query($baglanti, $sec);
$cek = $sonuc->fetch_assoc();



if (isset($_POST["guncelle"])) {




    $baslik = $_POST["baslik"];
    $aciklama = $_POST["aciklama"];
    $blogonyazi = $_POST["blogonyazi"];

    $veriguncelle = "UPDATE `bloglar` SET `blogbaslik` = '$baslik', `blogonyazi` = '$blogonyazi', `blogaciklama` = '$aciklama' WHERE `bloglar`.`blogid` ='$cekilenid'";
    $vericalistir = mysqli_query($baglanti, $veriguncelle);

    if ($vericalistir) {
        echo '<div class="alert alert-success" role="alert">
        Kayıt Güncellendi.
      </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Kayıt Güncellenemedi.
      </div>';
    }
    mysqli_close($baglanti);
}












?>
<div class="container  p-5">
    <div class="card m-5 p-4">
        <form action="blogguncelle.php?blogid=<?= $cekilenid ?>" method="POST">


            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Blog Başlıgı</label>
                <input name="baslik" type="text" value="<?= $cek['blogbaslik']  ?> " id="disabledTextInput" required class="form-control" placeholder="Başlık Giriniz">
            </div>
            <div class="form-floating">

                <label for="floatingTextarea">Ön yazı</label>
                <textarea class="form-control" placeholder="Kısa ön açıklma giriniz" name="blogonyazi" id="floatingTextarea"><?= $cek['blogonyazi'] ?></textarea>

            </div>


            <div class="form-group">
                <label>Açıklma</label>
                <textarea name="aciklama" required class="ckeditor">     <?= $cek['blogaciklama'] ?>            </textarea>

            </div>
            <button type="submit" class="btn btn-primary" name="guncelle">Güncelle!</button>


        </form>
    </div>
</div>

<?php
include "footer.php";
?>