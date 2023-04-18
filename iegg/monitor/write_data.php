<?php
    include ('../koneksi.php');
    
    // Prepare the SQL statement
    $SUHU = $_GET['SUHU'];
    $KELEMBABAN = $_GET['KELEMBABAN'];

    $result = mysqli_query ($koneksi,"INSERT INTO monitor (SUHU, KELEMBABAN) VALUES ('$SUHU', '$KELEMBABAN')");    
    
    if (!$result) 
        {
            die ('Invalid query: '.mysqli_error($koneksi));
        }  
?>