<?php
error_reporting();
include '../koneksi.php';

if (isset($_POST['simpan'])) {

	$ID_KLOTER = $_POST['ID_KLOTER'];
	$TGL_MASUK = $_POST['TGL_MASUK'];
	$JMLH_TELUR = $_POST['JMLH_TELUR'];
	$PRED_MENETAS = $_POST['PRED_MENETAS'];
	$KET_MENETAS = $_POST['KET_MENETAS'];

	$query = "INSERT INTO PENETASAN VALUES ('$ID_KLOTER', '$TGL_MASUK', '$JMLH_TELUR', '$PRED_MENETAS', '$KET_MENETAS')";
	$result = mysqli_query($koneksi, $query);

	if (!$result) {
		die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
			" - " . mysqli_error($koneksi));
	} else {
		echo "<script>window.location.href='index.php'</script> ";
	}

}