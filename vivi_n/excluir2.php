<?php // excluir.php

session_start();
session_name("excluir");

$nome = $_SESSION['nome'];
$login = $_SESSION['login'];

$usuario_excluir = $_GET['cliente'];

//echo $verifica = $nome."*".$login;

//$verifica = "cr7*cr7*cr7*cr7*cr7.jpg";

echo "<br>";
$arquivo 	= "clientes.txt"; //
$fp 		= fopen($arquivo,"r");
$clientes	= fgets($fp);
$clientes 	= explode("/",$clientes);

for($i = 0; $i < sizeof($clientes); ++$i){



   $partes = explode("*", $clientes[$i]);
	
	if ($usuario_excluir == $partes[1]){
	echo  $nome   = $partes[0];
	
	}

	  ++$cont;
	
	 
}
		
		

	//if($cliente[$i] == ){
		//unset($cliente[$i]);
		//echo "entrou";
		
	//	session_start();
	//	session_name("secreta");
	//	$_SESSION['excluir'] = 1;
		
		//echo "<br><br>excluir<br><br>";	
		//echo "[$cliente[$i]]";
		
		
	//
	// 	$clientes = implode("/",$cliente);
		
	//	$fp = fopen($arquivo,"w");  
	//	fwrite($fp, $clientes);
	//	fclose($fp);
	//}
		


/*

header("Location: index.php");
*/

?>
