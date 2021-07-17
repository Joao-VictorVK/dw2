<?php
    include("banco/bd.php");
    $idproduto = $_GET['idpd'];
    $procuraPd = "SELECT * FROM tblprodutos WHERE idProduto = $idproduto";
    $resultado = mysqli_query($connect,$procuraPd);
    $comando = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loja.css">
    <title><?=$comando['nomeProduto']?></title>
</head>
<body>
    <div class="container">
        <?php include("header.php"); ?>
        <h1 class="carrinho-nome"><?=$comando['nomeProduto']?></h1>
        <div class="pdficha">
        <h2>Preço</h2>     
        <spam class="carrinho-preco"><?=$comando['preco']?></spam>
        <p class="textoTec"><?=$comando['descProduto']?></p>
        <p><a href="javascript:history.go(-1)" style="color: red;">Voltar Para a pagina anterior</a></p>
        </div>
        <?php include("./rodape.php"); ?>
    </div>
</body>
</html>