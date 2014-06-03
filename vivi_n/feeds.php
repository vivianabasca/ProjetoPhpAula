<?php include 'files/header.php'; ?>
<?php
session_start();
session_name('secreta');
if ($_SESSION['validacao'] == 1) {
    $avatar = $_SESSION['avatar'];
    echo "<img src='imagens/$avatar' width='90' height='80' />";
    echo "<br />";
    echo " Bem vindo " . $_SESSION['nome'] . " <br>";
    echo "<br />";
    ?>
        Recado:<br />
        <form id="form1" name="form1" method="post" action="">
            <label> 
                <textarea name="mensagem" id="textarea" cols="45" rows="5"></textarea>
            </label>
            <label> <br />
                <input type="submit" name="button" id="button" value="Enviar Mensagem" />
            </label>

            <input type="hidden" value="<?php $_SESSION['nome'] ?>" />
        </form>

        <p>
            <?php
            $mensagem = $_POST['mensagem'];
            $arquivo = "texto.txt";         // Transforma o arquivo em variavel
            $fp = fopen($arquivo, "r");      // Le o arquivo
            $texto = fgets($fp);            // Captura o que ta no texto e joga na variavel
            $texto = $mensagem . "*" . $texto;  // Concatena a nova mensagem com a antiga
            $fp = fopen($arquivo, "w");
            fwrite($fp, $texto);
            $texto = explode("*", $texto);
            for ($i = 1; $i < sizeof($texto); $i++) {
                echo "Recado: $texto[$i] <br>";
            }
            ?>

            <br /><a href="secreta.php">Retorne ao perfil!</a> </p>
    <?php
} else {
    echo " acesso negado ";
}
?>
<br />
<br />
<a href="deslogar.php">Sair</a>
<?php include 'files/footer.php'; ?>