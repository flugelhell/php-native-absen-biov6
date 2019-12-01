<?php
// add log to db

require_once('conn.php');
session_start();
if (!isset($_SESSION['data'])) {
    header('location: index.php');
}
$ses_data = (object) $_SESSION['data'];
$pin = $ses_data->pin;

$query = "update absensi set pulang=getdate() 
where pin='$pin' and tanggal=convert(date, getdate())";

$stmt = sqlsrv_query($conn, $query);
if ($stmt) {
    // echo 'Login berhasil';
    if (sqlsrv_rows_affected($stmt) > 0) {
        echo 'Logout berhasil';
    } else {
        echo 'Jadwal belum dibuat';
    }
    header('refresh:2; url=dashboard.php');
} else {
    die(print_r(sqlsrv_errors(), true));
}
