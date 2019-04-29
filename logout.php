<?php

session_start();
$_SESSION['username'] = '';
$_SESSION['is_login'] =false;
unset($_SESSION['username']);
session_destroy();
header('location:login.php');