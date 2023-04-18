<?php
	error_reporting(0);
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="assets/image/pitikk.png">
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">IEGG</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="../home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="../penetasan/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                               Penetasan
                            </a>
                            <a class="nav-link" href="../monitor/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Monitor
                            </a>
                            <a class="nav-link" href="../logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-circle-arrow-left"></i></div>
                               Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Monitor</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Suhu Inkubator</li>
                        </ol>                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Suhu
                            </div>
                            <div class="card-body" >
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id Suhu</th>
                                            <th>Suhu</th>
                                            <th>Kelembaban</th>
                                            <th>Waktu</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id Suhu</th>
                                            <th>Suhu</th>
                                            <th>Kelembaban</th>
                                            <th>Waktu</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $result = mysqli_query($koneksi, "SELECT * FROM MONITOR ORDER BY ID_MONITOR ASC");
                                        while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['ID_MONITOR']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['SUHU']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['KELEMBABAN']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['WAKTU']; ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">KELOMPOK 2 PBL 2023</div>
                            <div>
                                <a href="#">UNIVERSITAS SEBELAS MARET</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
