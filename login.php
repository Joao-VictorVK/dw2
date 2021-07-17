<?php
    include("banco/bd.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="loja.css">
    <title>lagar</title>
</head>
<body>
    <div class="container">
        <?php include("header.php");?>
        <div class="registro">
            <span>logar</span>
            <form action="" method="post">
                <table>
                    <tr>
                       <td><label for="txtlogar">Usuario</label></td>
                       <td><input type="text" name="txtlogar" id="txtlogar" placeholder="insira nome, email ou apelido"></td>
                   </tr>
                    <tr>
                       <td><label for="txtsenha">senha</label></td> 
                        <td><input type="password" name="txtsenha" id="txtsenha" placeholder="insira sua senha"></td>
                    </tr>
                    <tr>
                        <td><button class="botao-logar" type="submit" nome="registrar">Entrar</button></td>
                    </tr>
                </table>
            </form>
            <p>não tem uma conta?<a href="./register.php">crie aqui</a></p>
            <p>e um funcionario?<a href="./admlogin.php">entre aqui</a></p>
        </div>
        <?php include("./rodape.php"); ?>
    </div>
</body>
</html>