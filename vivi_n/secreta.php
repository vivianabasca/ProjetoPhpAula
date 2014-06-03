<?php // secreta.php

echo '<link rel="stylesheet" href="css/estilo.css">';//inclui o css na pagina!!
session_start();
session_name('secreta');
if($_SESSION['validacao']==1){

$avatar = $_SESSION['avatar'];

echo "<img src='imagens/$avatar' width='90' height='80' />";
echo "<br />";
echo " Bem vindo ".$_SESSION['nome']." <br>";
echo "<br />";
?>
<div id="bold_p"><a href="fotos.php">Fotos</a></div>
<div id="bold_p"><a href="recado.php">Recados</a></div>
<?php
}else{
echo " acesso negado ";
}
?>
<br />
<br />
<a href="deslogar.php">Sair</a>