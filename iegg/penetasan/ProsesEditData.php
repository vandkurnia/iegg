<?php
error_reporting();
include '../koneksi.php';

if (isset($_POST['edit'])) {
	$ID_KLOTER = $_POST['ID_KLOTER'];
	$TGL_MASUK = $_POST['TGL_MASUK'];
	$JMLH_TELUR = $_POST['JMLH_TELUR'];
	$PRED_MENETAS = $_POST['PRED_MENETAS'];
	$KET_MENETAS = $_POST['KET_MENETAS'];


	$query = "UPDATE PENETASAN set TGL_MASUK = '$TGL_MASUK', JMLH_TELUR = '$JMLH_TELUR', PRED_MENETAS = '$PRED_MENETAS', KET_MENETAS = '$KET_MENETAS' where ID_KLOTER = '$ID_KLOTER'";

	$result = mysqli_query($koneksi, $query);

	if (!$result) {
		die("Data gagal di ubah; " . mysqli_errno($koneksi) . mysqli_error($koneksi));
	} else {
		echo "<script>window.location.href='index.php'</script> ";
	}
}

?>