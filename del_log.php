<?php
// add log to db

require_once('conn.php');
session_start();
if (!isset($_SESSION['data'])) {
    header('location: index.php');
}
$ses_data = (object) $_SESSION['data'];
$pin = $ses_data->pin;

$query = "delete logdata where pin='$pin' and tanggal >= CONVERT(date, getdate())";

$stmt = sqlsrv_query($conn, $query);
if ($stmt) {
    echo 'Delete Log berhasil';
    header('refresh:2; url=dashboard.php');
} else {
    die(print_r(sqlsrv_errors(), true));
}
