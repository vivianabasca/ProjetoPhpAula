<?php // upload.php

insclue_once('funcao.php');

/* Insira aqui a pasta que deseja salvar o arquivo*/
$uploaddir = 'C:\';
$uploadfile = $uploaddir.$_FILES['arquivo']['name'];
echo ($_FILES['arquivo']['size'])."<br>";
echo ($_FILES['arquivo']['type'])."<br>";
echo ($_FILES['arquivo']['name'])."<br>";
$nome_da_imagem = $_FILES['arquivo']['name'];

// aqui abaixo faz o upload
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)){
echo "<h1>Arquivo Enviado</h1>";

// envio da imagem para a lista que mora no arquivo de texto.
$arquivo = "imagens.txt";
$fp = fopen($arquivo,"r");
$imagem = fgets($fp);
fclose($fp);


// concatenando a imagem nova com as velhas 
$login = $_POST['login'];
$imagem = $imagem."/".$nome_da_imagem."-".$login;
$fp = fopen($arquivo,"w");  
fwrite($fp, $imagem);
fclose($fp);

mostra_imagem($imagem,$login);

}
else {
echo "Arquivo nao enviado";
}
?>

<a href="fotos.php">Retorne ao album!</a> </p>
