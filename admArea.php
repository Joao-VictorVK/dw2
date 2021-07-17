<?php
    session_start();
    include("banco/bd.php");
    if($_POST == true){
        header("Location: ./admArea.php");
    }
    $procuraPd = "SELECT * FROM tblprodutos";
    $resultado = mysqli_query($connect,$procuraPd);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="loja.css">
    <title>ADM dashboard</title>
</head>
<body>
    <div class="container">
        <?php include("header.php"); ?>
        <?php if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <h1 class="carrinho-nome">Produtos Disponiveis</h1>
        <div class="container_admCart">
            <div class="carrinhoConteudo">
                <p class="nomeTipo">Produto</p>
                <ul class="lista-carrinho">
                <?php
                    while($linha = mysqli_fetch_assoc($resultado)){
                ?>
                    <li class="li_carrinho">
                        <img class="Pedido-IMG" src="" alt="sem imagem">
                        <p class="nome-carrinho"><?=$linha['nomeProduto']?></p>
                    </li>
                <?php
                    }
                ?>
                </ul>
            </div>
            <div class="carrinhoConteudo">
                <p class="nomeTipo">id</p>
                <ul class="lista-carrinho">
                <?php
                    $procuraPd = "SELECT * FROM tblprodutos";
                    $resultado = mysqli_query($connect,$procuraPd);
                    while($linha = mysqli_fetch_assoc($resultado)){
                ?>
                    <li class="li_carrinho"><p class="nome-carrinho"><?=$linha['idProduto']?></p></li>
                <?php
                    }
                ?>
                </ul>
            </div>
            <div class="carrinhoConteudo">
                <p class="nomeTipo">preco</p>
                <ul class="lista-carrinho">
                <?php
                    $procuraPd = "SELECT * FROM tblprodutos";
                    $resultado = mysqli_query($connect,$procuraPd);
                    while($linha = mysqli_fetch_assoc($resultado)){
                ?>
                    <li class="li_carrinho"><p class="carrinho-preco"><?=$linha['preco']?></p></li>
                <?php
                    }
                ?>    
                </ul>
            </div>
            <div class="carrinhoConteudo">
                <p class="nomeTipo">editar</p>     
                <ul class="lista-carrinho">
                <?php
                    $procuraPd = "SELECT * FROM tblprodutos";
                    $resultado = mysqli_query($connect,$procuraPd);
                    while($linha = mysqli_fetch_assoc($resultado)){
                    if($linha['ativo'] == true){
                ?>
                    <li class="li_carrinho">                        
                        <a href="./editar.php?idpd=<?=$linha['idProduto']?>" class="bnt-edit">editar</a> 
                        <a href="./delpage.php?idpd=<?=$linha['idProduto']?>" class="bnt-del">deletar</a>
                        <a href="./ficha.php?idpd=<?=$linha['idProduto']?>"class="bnt-desc">descrição</a> 
                    </li>
                <?php
                    }else{
                ?>
                    <li class="li_carrinho">
                        <a href="./ativarpd.php?idpd=<?=$linha['idProduto']?>" class="bnt-atv">ativar</a>                         
                        <a href="./editar.php?idpd=<?=$linha['idProduto']?>" class="bnt-edit">editar</a> 
                        <a href="./delpage.php?idpd=<?=$linha['idProduto']?>" class="bnt-del">deletar</a>
                        <a href="./ficha.php?idpd=<?=$linha['idProduto']?>"class="bnt-desc">descrição</a>
                    </li>
                <?php
                    }
                }
                ?>
                </ul>
            </div>
        </div>
        <div class="container_admUtils">     
            <p class="nomeTipo">Ferramentas disponiveis</p>
            <div class="utilsADM">
            <p class="LinksUtils"><a href="./novoProduto.php" class="LinksUtils">adcionar novo produto</p></a>
            </div>
        </div>
        <?php include("./rodape.php"); ?>
    </div>
</body>
</html>