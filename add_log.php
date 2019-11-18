<?php
// add log to db

require_once('conn.php');
session_start();
if (!isset($_SESSION['data'])) {
    header('location: index.php');
}
$ses_data = (object) $_SESSION['data'];
$pin = $ses_data->pin;

$query = "insert into logdata (pin, tanggal, flag, islog, serial, lokasi, wcode) 
values($pin,getdate(),2,0,null,'Lantai UG',null)";

$stmt = sqlsrv_query($conn, $query);
if ($stmt) {
    echo 'Login berhasil';
    header('refresh:2; url=dashboard.php');
} else {
    die(print_r(sqlsrv_errors(), true));
}
