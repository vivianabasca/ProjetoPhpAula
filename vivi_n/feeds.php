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
        if ($mensagem != null) {
            $numLine = 0;
            $f = fopen('files/feeds.txt', 'r');
            $feeds = explode(';', fgets($f));
            fclose($f);
            $numLine=$feeds[0]+1;
            $mensagem = trim(preg_replace('/\s+/', ' ', $mensagem));
            $mensagem.="\n" . file_get_contents('files/feeds.txt');
            $salvar = "$numLine" . ";" . "0;" . $mensagem;
            file_put_contents('files/feeds.txt', $salvar);
        }
        $arquivo = fopen('files/feeds.txt', 'r');
        if ($arquivo == false)
            die('Não foi possível abrir o arquivo.');
        while (!feof($arquivo)) {
            $linha = fgets($arquivo);
            $feedLine = explode(";", $linha);
            $user = "Anonimo:";
            $users = fopen('files/users.txt', 'r');
            while (true) {
                $userFile = fgets($users);
                $userLine = explode(';', $userFile);
                if ($userLine[0] == $feedLine[1]) {
                    $user = $userLine[1];
                    break;
                }
                if ($userFile == null) {
                    break;
                }
            }
            fclose($users);
            echo "$user" . ": " . "$feedLine[2]" . "<br />";
        }
        fclose($arquivo);
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