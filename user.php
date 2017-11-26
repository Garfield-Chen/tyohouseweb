<?php
session_start();

if (!isset($_SESSION["islogin"]))
{
    include_once 'login.php';
}
else
{
    include_once 'user_home.php';
}

?>