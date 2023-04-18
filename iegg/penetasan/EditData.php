<?php
 error_reporting();
 include '../koneksi.php';
 $ID_KLOTER=$TGL_MASUK=$JMLH_TELUR=$PRED_MENETAS=$KET_MENETAS="";

 if (isset($_GET["id"])) {
 	$id = ($_GET["id"]);

 	$result = mysqli_query($koneksi, "SELECT * FROM PENETASAN WHERE ID_KLOTER='$id'");

 	while($row = mysqli_fetch_array($result)) {
 		$ID_KLOTER = $row["ID_KLOTER"];
 		$TGL_MASUK = $row["TGL_MASUK"];
        $JMLH_TELUR = $row["JMLH_TELUR"];
        $PRED_MENETAS = $row["PRED_MENETAS"];
        $KET_MENETAS = $row["KET_MENETAS"];
 	}

 } else {
 	header("location:index.php");
 }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitisional//EN" "http://www/w3.org/TR/xhtml1/DTD/xhtml1-transitisional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equive="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="../assets/image/pitikk.png">
    <title>Edit Data Penetasan Telur</title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
</head>

<body>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="form.html">IEGG</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Penetasan
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Monitor
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Penetasan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Penetasan</li>
                        </ol>
    <form action="ProsesEditData.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <fieldset>   
            <legend><h3>Edit Data Penetasan Telur</h3></legend>
            <table>
                <tr>
                    <td>Kloter</td>
                    <td>:</td>
                    <td><input name="ID_KLOTER" type="number" id="ID_KLOTER" size="50" style="width:100%;" readonly value="<?php echo $ID_KLOTER; ?>" /></td>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td><input name="TGL_MASUK" type="date" id="TGL_MASUK" size="50" style="width:29%;" value="<?php echo $TGL_MASUK; ?>" ></td>
                </tr>
                <tr>
                    <td>Jumlah Telur</td>
                    <td>:</td>
                    <td><input name="JMLH_TELUR" type="number" id="JMLH_TELUR" size="50" style="width:100%;" value="<?php echo $JMLH_TELUR; ?>" /></td>
                </tr>
                <tr>
                    <td>Prediksi Menetas</td>
                    <td>:</td>
                    <td><input name="PRED_MENETAS" type="date" id="PRED_MENETAS" size="50" style="width:29%;" value="<?php echo $PRED_MENETAS; ?>" ></td>
                </tr>
                <tr>
                    <td>Keterangan Menetas</td>
                    <td>:</td>
                    <td><input name="KET_MENETAS" type="text" id="KET_MENETAS" size="50" style="width:100%;" value="<?php echo $KET_MENETAS; ?>" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                        <td><input type="submit" name="edit" id="edit" value="Edit" /></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>