<?php
//senha.php

$cont = 0;
$login = $_POST['login']; //esses campos sao os que vem dos formularios
$senha = $_POST['senha'];
$userId = 0;
$fp = fopen('files/users.txt', "r");

while (!feof($fp)) {
    $usrTry = explode(';', fgets($fp));
    if (empty($login) || empty($senha)) {
        echo 'Por favor, preencha todos os campos';
        break;
    } elseif ($usrTry[1] == $login && $usrTry[2] == $senha) {
        $nome = $usrTry[1];
        $avatar = $usrTry[3];
        $userId = $usrTry[0];
        ++$cont;
    }
}

if ($cont > 0) {

    session_start();
    session_name("secreta");
    $_SESSION['validacao'] = 1;
    $_SESSION['login'] = $login;
    $_SESSION['nome'] = $nome;
    $_SESSION['avatar'] = $avatar;
    $_SESSION['userId'] = $userId;
    header("Location: secreta.php");
} else {
    echo "login ou senha invalidos ";
}
?>
<br />
<br />
Retorne a pagina inicial <a href="index.php">Clique aqui!</a> </p>
