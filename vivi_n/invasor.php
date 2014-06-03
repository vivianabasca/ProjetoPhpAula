<?php
session_start();
session_name("secreta");
$_SESSION['validacao']=1;
$_SESSION['login']=jeremias;

header("Location: secreta.php");
?>