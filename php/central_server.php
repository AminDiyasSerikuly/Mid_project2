<?php
session_start();
$username = $_POST['mail'];
$_SESSION['un']= $username;
echo $_SESSION['un'];


 ?>
