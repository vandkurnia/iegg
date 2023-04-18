<?php
	error_reporting(0);
	include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" href="../assets/image/pitikk.png">
        <title>Penetasanan - SB Admin</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
		
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="form.html">IEGG</a>
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
                            <a class="nav-link" href="index.php">
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
                        <h1 class="mt-4">Penetasanan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Penetasanan</li>
                        </ol>
                        
                        <form action="InputData.php" style="text-align: center;">
            <button style="text-align: center; border-color:#8B8989 ; color:#FFF; background-color:#000; font-size: medium; width: 10%;" class="button">Tambah Data</button>
        </form><br>
		<table class="table table-striped table-bordered" id="data">
        <thead>
			<tr>
				<th>No</th>
				<th>Kloter</th>
				<th>Tanggal Masuk</th>
				<th>Jumlah Telur</th>
				<th>Prediksi Menetas</th>
				<th>Keterangan</th>
				<th>Edit</th>
				<th>Hapus</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$no=0;
				$result = mysqli_query($koneksi, "SELECT * FROM PENETASAN ORDER BY ID_KLOTER ASC");
				while($row = mysqli_fetch_array($result)) {
					$no++
			?>
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $row['ID_KLOTER'];?></td>
					<td><?php echo $row['TGL_MASUK'];?></td>
					<td><?php echo $row['JMLH_TELUR'];?></td>
					<td><?php echo $row['PRED_MENETAS'];?></td>
					<td><?php echo $row['KET_MENETAS'];?></td>
					<td>
                        <a href="EditData.php?id=<?php echo $row['ID_KLOTER'];?>">Edit</a>
                    </td>
                    <td>
                        <a href="HapusData.php?id=<?php echo $row['ID_KLOTER'];?>">Hapus</a>
                    </td>
				</tr>
			<?php }	?>
			</tbody>
		</table>
		<script>
			$(document).ready(function() {
				$('#data').DataTable();
			} );
		</script>
                        
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
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
