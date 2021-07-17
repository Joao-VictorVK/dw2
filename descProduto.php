<?php
    include("banco/bd.php");
    $id = $_GET['idpd'];
    $procuraPd = "SELECT * FROM tblprodutos WHERE idProduto=$id";
    function calculaParcelas($preco){
        $valor = $preco / 12;
        return $valor;
    }
    $resultado = mysqli_query($connect,$procuraPd);
    $comando = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="loja.css">
    <title><?=$comando['nomeProduto']?></title>
</head>
<body>
    <div class="container">
        <?php include("header.php"); ?>
        <div class="containerproduto">
            <div class="DescPdbox">
                <div class="DescImagem">
                    <a href="javascript:history.go(-1)" class="link_Desc">voltar</a>
                    <img class="imagemPrincipal" src="./imagens/no-image-found.png" alt="imagem">
                    <div class="subImagemPs">
                        <img class="subimagem" src="./imagens/no-image-found.png" alt="imagem">
                        <img class="subimagem" src="./imagens/no-image-found.png" alt="imagem">
                        <img class="subimagem" src="./imagens/no-image-found.png" alt="imagem">
                    </div>
                    <span class="boobles">
                    <a href="#" class="boobles"><ion-icon class="star_style" name="heart"></ion-icon> <span>Curtir</span></a>
                    <a href="#" class="boobles"><ion-icon class="star_style" name="share-social"></ion-icon> <span>Compartilhar</span></a>
                    </span>
                </div>
                <div class="info_total">
                    <h2><?=$comando['nomeProduto']?></h2>
                    <span>
                        <ion-icon class="star_style" name="star-outline"></ion-icon>
                        <ion-icon class="star_style" name="star-outline"></ion-icon>
                        <ion-icon class="star_style" name="star-outline"></ion-icon>
                        <ion-icon class="star_style" name="star-outline"></ion-icon>
                        <ion-icon class="star_style" name="star-outline"></ion-icon>
                    </span>
                    <div class="info_ficha">
                        <p><?=$comando['descProduto']?></p>
                    </div>
                    <a href="./ficha.php?idpd=<?=$comando['idProduto']?>" class="link_Desc">mais informações</a>
                </div>
                <div class="finalizarCompra">
                    <form action="./carrinho.php" method="post">
                        <input type="hidden" name="txtId" value="<?=$comando['idProduto']?>">
                        <p class="precoDesc">R$ <?=$comando['preco']?></p>
                        <p class="precoSub">Ate 12x de <?=calculaParcelas($comando['preco'])?> sem juros no cartao</p>
                        <button type="submit" class="bnt-confCompra">Comprar</button>
                    </form>
                </div>
            </div>
        </div>
        <?php include("./rodape.php"); ?>
    </div>
</body>
</html>