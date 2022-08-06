<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Jual/Beli Sapi - Dashboard</title>
    <link rel="shortcut icon" href="img/logo_sapi.jpg" type="image/x-icon">
    <link rel="stylesheet" href="vendor/fontawesome-free-5.15.4-web/css/all.css">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="img/logo_sapi.jpg" class="img-thumbnail rounded-circle" alt="">
                </div>
                <div class="sidebar-brand-text mx-4">Jual/Beli Sapi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Login</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Sebagai:</h6>
                        <a class="collapse-item" href="login.php"> <i class="fas fa-user-tie mx-2"></i> Penjual</a>
                        <a class="collapse-item" href="login2.php"> <i class="fas fa-user mx-2"></i> Pembeli</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->

                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <img src="img/logo_sapi.jpg" class="img-thumbnail img-fluid rounded-circle mb-4 mx-auto d-block">
                    <h1 class="text-center text-dark"> Selamat Datang Di Jual/Beli Sapi</h1>
                    <p class="text-center text-dark">kini semua orang dapat berjualan sapi secara online dengan
                        mudah
                        <br>
                        yuk upload sapi di Jual/Beli Sapi, tingkatkan pendapatan, dan dapatkan respon WhatsApp/
                        Telpon
                        <br>dari orang yang cari sapi.
                    </p>
                    <br> <br><br><br>

                    <!-- <div class="row"> -->

                    <!-- <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                <div class="card mb-3">
                  <div class="card-body">
                    <a href="https://www.google.com/maps/@-3.4484731,119.1471847,16z">
                      <i class="fas fa-map-marked-alt fa-5x" style="color: rgb(0, 59, 236);" ></i> 
                    </a>
                      <div class="mt-2 font-weight-bold text-center ">Lokasi</div>
                  </div>
                </div>
              </div> 

              <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                <div class="card mb-3">
                  <div class="card-body">
                    <i class="fas fa-book fa-5x" style="color: rgb(0, 59, 236);"></i> 
                  <div class="mt-2 font-weight-bold text-center ">Panduan</div>
                  </div>
                </div>
              </div> 

              <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                <div class="card mb-3">
                  <div class="card-body">
                    <a href="jualan.html">
                    <i class="fas fa-store-alt fa-5x" style="color: rgb(0, 59, 236);"></i> 
                    </a>
                  <div class="mt-2 font-weight-bold text-center ">Jualan</div>
                  </div>
                </div>
              </div>
              
              <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                <div class="card mb-3">
                  <div class="card-body">
                    <a href="profile.html">
                    <i class="fas fa-user fa-5x" style="color: rgb(0, 59, 236);"></i>
                    </a>
                  <div class="mt-2 font-weight-bold text-center ">Akun</div>
                  </div>
                </div>
              </div>  -->


                    <!-- </div> -->
                    <!-- Footer -->
                    <footer id="footer" class="footer mt-6 text-center">
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
                <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Siap untuk Meninggalkan?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">
                                Cancel
                            </button>
                            <a class="btn btn-primary" href="login.php">Logout</a>
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
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>