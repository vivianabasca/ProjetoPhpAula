<?php // ver_clientes.php
$arquivo = "clientes.txt";
$fp = fopen($arquivo,"r");
$clientes = fgets($fp);
fclose($fp);
$clientes = explode("/",$clientes);

for($i=1;$i<sizeof($clientes);$i++){

    $partes = explode("*",$clientes[$i]);
	echo "NOME: ".$partes[0]."<br />";
	echo "LOGIN: ".$partes[1]."<br />";
	echo "SENHA: ".$partes[2]."<br />";
	echo "<a href='excluir2.php?cliente=".$partes[0]."'>REMOVER ".$partes[0]."</a><br /><br />";
}
?>
<br /><br />

Retorne a pagina inicial <a href="index.php">Clique aqui!</a> </p>
