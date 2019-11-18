
<?php
$serverName = "(localdb)\MSSQLLocalDB"; //serverName\instanceName
$connectionInfo = array("Database" => "biov6", "UID" => "yayat", "PWD" => "password");
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
    // echo "Connection established.<br />";
} else {
    echo "Connection could not be established.<br />";
    die(print_r(sqlsrv_errors(), true));
}
?>
