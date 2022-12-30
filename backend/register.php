<?php
include "baglanti.php";
if (isset($_POST['kayitol'])) {

    $yonad = $_POST["yonad"];
    @$yonkulad = $_POST["yonkulad"];

    $yonparola = password_hash($_POST["yonparola"], PASSWORD_DEFAULT);
    $yonparolatkr = $_POST["yonparolatkr"];
    if (!$yonparola || !$yonparolatkr) {
        echo '<div class="alert alert-danger" role="alert">
        Lütfen Gerekli Alanları Doldurunuz!!!
      </div>';
    } elseif ($_POST["yonparola"] !=  $_POST["yonparolatkr"]) {
        echo '<div class="alert alert-danger" role="alert">
        Parola Tekrar Uyuşmuyor!!!
      </div>';
    } else {
        $ekle = "INSERT INTO yonetici (yonad,yonkulad,yonparola) VALUES('$yonad','$yonkulad','$yonparola')";
        $calistirekle = mysqli_query($baglanti, $ekle);
        if ($calistirekle) {
            echo '<div class="alert alert-success" role="alert">
           Kayıt başarılı bir şekilde eklendi
         </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
        Kayıt eklenemedi.
      </div>';
        }
        mysqli_close($baglanti);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Kayıt</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Kayit Ol</h1>
                            </div>
                            <form action="register.php" method="POST" class="user">
                                <div class="form-group ">
                                    <div class="col-">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Adınız" name="yonad">
                                    </div>

                                </div>
                                <div class="form-group ">
                                    <div class="col-">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Kulalnıcı Adınız" name="yonkulad">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Parola" name="yonparola">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Parola Tekrar" name="yonparolatkr">
                                    </div>
                                </div>
                                <div class="formicon">
                                    <button type="submit" class="btn btn-primary" name="kayitol">Kayit Ol</button>
                                </div>
                                <hr>

                            </form>


                            <div class="text-center">
                                <a class="small" href="login.php">Hesabın Varmı? Giriş Yap</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>