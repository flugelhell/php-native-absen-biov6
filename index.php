<?php
session_start();
if (isset($_SESSION['data'])) {
    header('location: dashboard.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance | Login</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>

    <div class="container bg-grey">
        <form action="login.php" method="post">
            <div class="row">Login Attendance</div>
            <div class="row">
                <label class="form-control" for="user">Username</label>
                <input class="form-control" type="text" name="user" id="user" autocomplete="off">
            </div>
            <div class="row">
                <label class="form-control" for="pwd">Password</label>
                <input class="form-control" type="password" name="pwd" id="pwd">
            </div>
            <div class="row"><input class="btn btn-small" type="submit" value="Submit"></div>
        </form>
    </div>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>

</html>