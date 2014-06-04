<?php include 'files/header.php';?>

        <form id="msform" name="form" method="post" action="senha.php">
            <fieldset>
                <h1>Login</h1>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"> </span></span>
                    <input type="text" class="form-control" placeholder="Username" name="login" id="login">
                </div></br>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"> </span></span>
                    <input type="password" class="form-control" placeholder="•••••••••••" name="senha" id="senha">
                </div>
                </br>
                <input type="submit" class="btn btn-success"/>
                <p></p>
                <p>Ainda não é cadastrado? <a href="cadastrar.php">Clique aqui! </a> </p>
                <p><p>
                        <br /><br />
                        <a href="ver_clientes.php">Usuários Cadastrados!</a> </p>
                    <br /><br />
            </fieldset>
        </form>
   
<?php include 'files/footer.php';?>