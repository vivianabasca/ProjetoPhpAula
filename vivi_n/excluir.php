<?php // excluir.php
$img     = $_GET['imagem'];
$arquivo = "imagens.txt";
$fp 	 = fopen($arquivo,"r");
$imagem  = fgets($fp);
fclose($fp);

$imagens = explode("/",$imagem);
// quebra as imagens em um vetor
for($i = 1; $i < sizeof($imagens); ++$i){
// procura a imagem que quero excluir
    if($imagens[$i] == $img){
		unset($imagens[$i]);
	}
}
$imagem = implode("/",$imagens);
$fp 	= fopen($arquivo,"w");
  
fwrite($fp, $imagem);
fclose($fp);
 manda de volta para o arquivo implodido
header("Location: fotos.php");
?>
