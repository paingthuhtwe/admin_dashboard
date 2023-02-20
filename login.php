<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email = 'admin@gmail.com' && $password =='panda') {
    $_SESSION['login'] = true;
    require('index.php');
} else {
    require('index.php');
}
