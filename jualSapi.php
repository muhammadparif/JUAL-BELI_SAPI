<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "jualbeli");
// cek apakah tombol jual sudah di tekan atau belum
if (isset($_POST['jual'])) {
    // ambil data dari tiap elemen 
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];

    // insert data
    $query = "INSERT INTO jualsapi VALUES (
        '', '$nama', '$alamat', '$nohp', '$harga', '$gambar')";

    mysqli_query($conn, $query);
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Jual/Beli Sapi - Jual Sapi</title>
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Jual Sapi</h1>
                            </div>
                            <form class="user" method="post" action="promosi.php">
                                <div class="form-group row">
                                    <div class="form-group mb-3">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control form-control-user" id="nama"
                                            placeholder="Nama " />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" name="alamat" class="form-control form-control-user"
                                            id="alamat" placeholder="Alamat" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="noHp">No Handphone/Whatsapp</label>
                                        <input type="text" name="nohp" class="form-control form-control-user" id="noHp"
                                            placeholder="No Handphone/Whatsapp" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="hargaSapi">Harga Sapi</label>
                                        <input type="text" name="harga" class="form-control form-control-user"
                                            id="hargaSapi" placeholder="Harga Sapi" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="fotoSapi">Gambar Sapi</label>
                                        <input type="file" name="gambar" class="form-control form-control-user"
                                            id="fotoSapi" placeholder="Gambar Sapi" />
                                    </div>
                                </div>
                                <a type="submit" href="promosi.php" name="jual"
                                    class="btn btn-primary btn-user btn-block">
                                    Jual
                                </a>
                        </div>
                        </form>
                        <hr />

                        <!-- Footer -->
                        <footer id="footer" class="footer mt-4 text-center">
                            <div class="copyright">
                                &copy; Copyright <strong><span>RPL-Lab</span></strong>. All Rights Reserved
                            </div>
                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by <a href="https://bootstrapmade.com/">Muh.Parif</a>
                            </div>
                        </footer>
                        <!-- End of Footer -->
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
<!-- <body>
    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Jual Sapi</h1><br>
                <form method="$_POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Masukan Nama">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" placeholder="Masukan alamat">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor Handphone/Whatsapp</label>
                        <input type="text" class="form-control" placeholder="Masukan Nomor Handphone/Whatsapp">

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body> -->

</html>