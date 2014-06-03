<?php

$uploaddir = 'fotos/';
$uploadfile = $uploaddir . $_FILES['arquivo']['name'];
$foto = $_FILES['arquivo']['name'];
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)){
$arquivo = "imagens.txt";
$fp = fopen($arquivo,"r");
$imagens= fgets($fp);
fclose($fp);
$imagens = $imagens."/".$imagens;
$fp = fopen($arquivo,"w");  
fwrite($fp, $imagens);
fclose($fp);
echo " Imagenm inserida ";
}else{
echo " erro ao incluir ";
}

?>

<br>
<form
action="fotos.php" method="post" enctype="multipart/form-data" name="form1" id="form1">  
  <label>
    <input type="file" name="arquivo" id="fileField" />
    </label>
    </p>
  <p>
    <label>
    <input type="submit" name="button" id="button" value="Enviar" />
    </label>
</form>