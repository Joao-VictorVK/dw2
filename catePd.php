<?php
    include("banco/bd.php");
    $id = $_GET['idCate'];
    $nome = $_GET['cat'];
    $procuraPd = "SELECT * FROM tblprodutos WHERE idcategoria =$id";
    $resultado = mysqli_query($connect,$procuraPd);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="loja.css">
    <title><?=$nome?></title>
</head>
<body>
    <div class="container">
        <?php include("header.php"); ?>
        <div class="containerproduto">
            <?php
            while($cat =mysqli_fetch_assoc($resultado)){
                if($cat['ativo'] == true){
            ?>
            <div class="produto">
                <a href="./descProduto.php?idpd=<?=$cat['idProduto']?>">            
                <ul class="produtoitem">
                <li value="<?=$cat['idProduto']?>"><img src="./imagens/no-image-found.png" alt="produto" class="imgproduto"></li>
                <li value="<?=$cat['idProduto']?>"><p class="nomeProduto"><?=$cat['nomeProduto']?></p></li>
                <li value="<?=$cat['idProduto']?>"><span class="PrecoProduto">R$ <?=$cat['preco']?></span></li>
                </a>            
            </div>
            <?php
                }else{}
            }
            ?>
        </div>
        <?php include("./rodape.php"); ?>
    </div>
</body>
</html>