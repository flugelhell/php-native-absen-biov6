<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

require_once('conn.php');
require_once('userlist.php');

// print_r($users);

if (isset($_SESSION['data'])) {
    header('location: dashboard.php');
    die();
}

if (!isset($_POST['user']) || !isset($_POST['pwd'])) {
    return_index('Please login first ...');
} else {
    login($_POST['user'], $_POST['pwd']);
}


function return_index($msg)
{
    echo $msg;
    header('refresh:2; url=index.php');
    die();
}

function login($user, $pwd)
{
    global $users;
    if ($user == '' && $pwd == '') {
        return_index('Username or Password are invalid!');
    } else { }

    if ($pwd ==  $users[$user]['password']) {
        $_SESSION['data']->username = $user;
        $_SESSION['data']->password = $pwd;
        $_SESSION['data']->nip = $users[$user]['nip'];
        $_SESSION['data']->pin = $users[$user]['pin'];
        header('location: dashboard.php');
    } else {
        return_index('Username or Password are invalid!!');
    }
};
