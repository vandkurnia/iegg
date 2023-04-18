<?php
	error_reporting(0);
	include 'koneksi.php';
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
        <link href="css/styles.css" rel="stylesheet" />
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
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="penetasan/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                               Penetasan
                            </a>
                            <a class="nav-link" href="monitor/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Monitor
                            </a>
                            <a class="nav-link" href="logout.php">
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Data Suhu dan Kelembapan
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Data Jumlah telur
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Table
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kloter Telur</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Jumlah Telur</th>
                                            <th>Prediksi Menetas</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Kloter Telur</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Jumlah Telur</th>
                                            <th>Prediksi Menetas</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $result = mysqli_query($koneksi, "SELECT * FROM PENETASAN ORDER BY ID_KLOTER ASC");
                                        while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['ID_KLOTER']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['TGL_MASUK']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['JMLH_TELUR']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['PRED_MENETAS']; ?>
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
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>

        <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#292b2c';
        
        // Area Chart Example
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
            labels: [
                <?php 
					$WAKTU = mysqli_query($koneksi,"SELECT WAKTU FROM MONITOR ORDER BY ID_MONITOR ASC");
                    $array = mysqli_fetch_array($WAKTU);

					echo $array['WAKTU'];
				?>
            ],
            datasets: [{
                label: "Sessions",
                lineTension: 0.3,
                backgroundColor: "rgba(2,117,216,0.2)",
                borderColor: "rgba(2,117,216,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 50,
                pointBorderWidth: 2,
                data: [
                    <?php 
					$SUHU = mysqli_query($koneksi,"SELECT SUHU FROM MONITOR ORDER BY ID_MONITOR ASC");
                    $array = mysqli_fetch_assoc($SUHU);

					echo $array['SUHU'];
				?>
                ],
            }],
            },
            options: {
            scales: {
                xAxes: [{
                time: {
                    unit: 'date'
                },
                gridLines: {
                    display: false
                },
                ticks: {
                    maxTicksLimit: 7
                }
                }],
                yAxes: [{
                ticks: {
                    min: 0,
                    max: 40,
                    maxTicksLimit: 5
                },
                gridLines: {
                    color: "rgba(0, 0, 0, .125)",
                }
                }],
            },
            legend: {
                display: false
            }
            }
        });
        </script>

    </body>
</html>
