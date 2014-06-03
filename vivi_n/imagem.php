<?php // imagem.php
$imagem = $_GET['imagem'];
echo "<a href='imagem.php?imagem=$imagem'><img src= '$imagem' width='200' height='200' /></a>";
echo "<a href='excluir.php?imagem=$imagem'>Excluir</a>";
?>