<?php
//is the user authenticated?

session_start();

if(!isset($_SESSION['login'])){
    //redirect to login.php
    header("location: login.php");
}
?>

<h1> wister </h1>
