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
    <title>login como adm</title>
</head>
<body>
    <div class="container">
        <?php include("header.php");?>
        <div class="registro">
            <span>logar como administrador</span>
            <form action="admArea.php" method="post">
                <table>
                    <tr>
                       <td><label for="txtlogar">Empresa</label></td>
                       <td><input type="text" name="txtlogar" id="txtlogar" placeholder="insira o email da empresa"></td>
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
            <p>deu miss click?<a href="./login.php">voltar</a></p>
        </div>
        <?php include("./rodape.php"); ?>
    </div>
</body>
</html>