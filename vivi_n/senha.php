<?php //senha.php

$cont		= 0;
$login 		= $_POST['login']; //esses campos sao os que vem dos formularios
$senha 		= $_POST['senha'];
$arquivo 	= "clientes.txt"; //
$fp 		= fopen($arquivo,"r");
$clientes	= fgets($fp);
$clientes 	= explode("/",$clientes);

for($i = 0; $i < sizeof($clientes); ++$i){

    $partes = explode("*", $clientes[$i]);
	
	if(empty($login) || empty($senha)){
		echo 'Por favor, preencha todos os campos';
		break;
	} else if($login == $partes[1] && $senha == $partes[2]){
	  $nome   = $partes[0];
	  $avatar = $partes[3];
	  ++$cont;
	}
	 
}

if( $cont > 0){

	session_start();
	session_name("secreta");
	$_SESSION['validacao']	= 1;
	$_SESSION['login']		= $login;
	$_SESSION['nome']		= $nome;
	$_SESSION['avatar']		= $avatar;
	header("Location: secreta.php"); 
	
}else{
		echo "login ou senha invalidos "; 
}

?>
<br />
<br />
Retorne a pagina inicial <a href="index.php">Clique aqui!</a> </p>




