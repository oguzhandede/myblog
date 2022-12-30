<?php
session_start();
ob_start();
include "baglanti.php";
include "header.php";
include "oturumKontrol.php";

if (isset($_POST["paylas"])) {
    $baslik = $_POST["baslik"];
    $aciklama = $_POST["aciklama"];
    $blogonyazi = $_POST["blogonyazi"];
  
    $ekle = "INSERT INTO bloglar (blogbaslik,blogonyazi,blogaciklama) VALUES('$baslik','$blogonyazi','$aciklama')";
    $calistirekle = mysqli_query($baglanti, $ekle);
    if ($calistirekle) {
        echo '<div class="alert alert-success" role="alert">
           Kayıt başarılı bir şekilde eklendi
         </div>';
        header("location:bloglar.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Kayıt eklenemedi.
      </div>';
    }
    mysqli_close($baglanti);
}








?>
<div class="container  p-5">
    <div class="card m-5 p-4">
        <form action="blogekle.php" method="POST">


            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Blog Başlıgı</label>
                <input name="baslik" type="text"  id="disabledTextInput" required class="form-control" placeholder="Başlık Giriniz">
            </div>
            <div class="form-floating">

                <label for="floatingTextarea">Ön yazı</label>
                <textarea class="form-control" placeholder="Kısa ön açıklma giriniz" name="blogonyazi"  id="floatingTextarea"></textarea>

            </div>


            <div class="form-group">
                <label>Açıklma</label>
                <textarea name="aciklama" required class="ckeditor" >                </textarea>

            </div>
            <button type="submit" class="btn btn-primary" name="paylas">Paylaş!</button>


        </form>
    </div>
</div>

<?php
include "footer.php";
?>