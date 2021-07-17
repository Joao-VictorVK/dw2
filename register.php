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
    <title>Registrar-se</title>
</head>
<body>
    <div class="container">
        <?php include("header.php");?>
        <div class="registro">
            <span>Cadastre-se</span>
            <form action="" method="post">
                <table>
                    <tr>
                        <td><label for="txtnome">Nome</label></td>
                        <td><input type="text" name="txtnome" id="txtnome" placeholder="insira seu nome"></td>
                    </tr>
                    <tr>
                       <td><label for="txtemail">Email</label></td>
                       <td><input type="email" name="txtemail" id="txtemail" placeholder="insira seu Email ex:ageof@gmail.com"></td>
                   </tr>
                    <tr>
                        <td><label for="txtapelido">Apelido</label></td> 
                        <td><input type="text" name="txtapelido" id="txtapelido" placeholder="insira seu Apelodo ex:jujuba real"></td>
                    </tr>
                    <tr>
                       <td><label for="txtsenha">senha</label></td> 
                        <td><input type="password" name="txtsenha" id="txtsenha" placeholder="insira sua senha"></td>
                    </tr>
                    <tr>
                        <td><label for="txtconfsenha">Confirme a senha</label></td> 
                        <td><input type="textconfsenha" name="txtconfsenha" id="txtconfsenha" placeholder="confirme sua senha"></td>
                    </tr>
                    <tr>
                        <td><button class="botao-registro" type="submit" nome="registrar">Criar Conta</button></td>
                    </tr>
                </table>
            </form>
            <p>Ja esta cadastrado? se sim <a href="login.php">entre</a></p>
        </div>
        <?php include("./rodape.php"); ?>
    </div>
</body>
</html>