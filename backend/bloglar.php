<?php
session_start();
ob_start();
include "baglanti.php";
include "header.php";


$sec = "select * from bloglar";
$sonuc = $baglanti->query($sec);


if (isset($_GET['sil'])) {

    $blogsil = "DELETE FROM `bloglar` WHERE `bloglar`.`blogid` =?";
    $sorgusil = $baglanti->prepare($blogsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);
    header('location:bloglar.php');
}


?>




<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Bloglarım</h1>
                <a href="./blogekle.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Blog Ekle</a>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Duyuru Başlik</th>
                            <th>Duyuru Ön Yazı</th>
                            <th>tarih</th>
                            <th>İşlemler</th>


                        </tr>
                    </thead>
                    <?php

                    ?>
                    <tfoot>
                        <tr>
                            <th>Sıra</th>
                            <th>Duyuru Başlik</th>
                            <th>Duyuru Ön Yazı</th>
                            <th>tarih</th>
                            <th>İşlemler</th>


                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        if ($sonuc->num_rows > 0) {
                            // verileri listeleyebiliriz
                            while ($cek = $sonuc->fetch_assoc()) {
                                $id = $cek["blogid"];
                                $blogbaslik = $cek["blogbaslik"];
                                $blogonyazi = $cek["blogonyazi"];

                                $blogtarih = $cek["blogtarih"];
                              
                        ?>
                                <tr>
                                    <td> <?php echo $id; ?></td>
                                    <td> <?php echo $blogbaslik; ?></td>
                                    <td> <?php echo $blogonyazi; ?></td>
                                    <td> <?php echo $blogtarih; ?></td>
                                    <th>
                                        <a href="blogguncelle.php?blogid=<?= $id ?>" class="btn btn-primary m-1">Güncelle</a>
                                        <a href="?sil=<?= $id ?>" class="btn btn-primary m-1">Kaldır</a>
                                    </th>


                                </tr>
                        <?php

                            }
                        }

                        ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
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

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>