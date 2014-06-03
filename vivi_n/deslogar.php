<?php // deslogar.php
session_start();
session_name("secreta");
unset($_SESSION['validacao']);
unset($_SESSION['login']);
session_destroy();
header("Location: index.php");
?>
