<?php

include "../backend/baglanti.php";
include "header.php";
if (isset($_POST['gonder'])) {


    $adi = $_POST["adi"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $mesaj = $_POST["mesaj"];


    if (!$adi || !$email || !$telefon || !$mesaj) {
        echo '<script>
        alert("Lütfen Bütün Alanları Doldurunuz ");
      </script>';
    } else {
        $ekle = "INSERT INTO iletisim (adi,email,telefon,mesaj) VALUES('$adi','$email','$telefon','$mesaj')";
        $calistirekle = mysqli_query($baglanti, $ekle);
        if ($calistirekle) {
            echo '<script>
            alert("Mesajınız başarılı Bir Şekilde İletilmiştir.");
          </script>';
        } else {
            echo '<script>
            alert("Mesaj Gönderirken Bir Sorun Oluştu!!!");
          </script>';
        }
        mysqli_close($baglanti);
    }
}
?>
<main class="mb-4 mt-5">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="my-5 ">
                    <div class="card p-5">
                        <img src="../frontend//assets/dantel.jpeg" class="img-fluid" alt="..." width="600px">

                        <form action="iletisim.php" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <div class="form-floating mt-1">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" name="adi" />
                                <label for="name">Adınız</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mt-1">
                                <input class="form-control" id="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" name="email" />
                                <label for="email">Email Adres</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-floating mt-1">
                                <input class="form-control" id="phone" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" name="telefon" />
                                <label for="phone">Telefon Numaranız</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <div class="form-floating mt-1">
                                <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required" name="mesaj"></textarea>
                                <label for="message">Mesajınız</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <br />
                            <button class="btn btn-primary text-uppercase " id="submitButton" type="submit" name="gonder">Gönder</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>
<?php
include "footer.php";
?>