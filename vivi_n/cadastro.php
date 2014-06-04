<?php
// cadastro.php
//$uploaddir = 'C:/';
$uploaddir = 'imagens/';
$uploadfile = $uploaddir . $_FILES['arquivo']['name'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$senha2 = $_POST['confirmasenha'];
$foto = $_FILES['arquivo']['name'];
$cliente = $nome . "*" . $login . "*" . $senha . "*" . $senha2 . "*" . $foto;


if ($senha != $senha2) {
    echo "Senha invalida";
} else if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
    $arquivo = "clientes.txt";
    $fp = fopen($arquivo, "r");
    $clientes = fgets($fp);
    fclose($fp);
    $clientes = $clientes . "/" . $cliente;
    $fp = fopen($arquivo, "w");
    fwrite($fp, $clientes);
    fclose($fp);
    echo " Cliente inserido ";
} else {
    echo " Erro ao incluir ";
}
?>
<br />
<br />
Retorne a pagina inicial <a href="index.php">Clique aqui!</a> </p>