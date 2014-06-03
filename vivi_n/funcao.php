<?php //esta funcao mostra as fotos do album
function mostra_imagem($imagem, $login)
{
	$vetor = explode("/",$imagem);
	$tam = sizeof($vetor); // tamanho de um vetor
	// exibir as imagens no navegador
	for($i=1;$i<$tam;$i++){
		$nome = explode("-",$vetor[$i]);
		if($login == $nome[1])
		{
			echo "<a href='imagem.php?imagem=$vetor[$i]'><img src= '$nome[0]' width='70' height='70' /></a>";
			$val = 1;
		}
		else
		{
			$val = 0;
		}
	}

	
	return $val;
}
?>