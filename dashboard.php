<?php
session_start();
if (!isset($_SESSION['data'])) {
    header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance | Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <a class="btn" href="add_log.php">Log Me</a>
            <a class="btn" href="add_log_in.php">Log Me In</a>
            <a class="btn" href="add_log_out.php">Log Me Out</a>
            <a class="btn" href="del_log.php">Delete Log</a>
            <a class="btn" href="logout.php">Logout</a>
        </div>
    </div>
</body>

</html>