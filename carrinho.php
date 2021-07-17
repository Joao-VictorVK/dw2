<?php
    session_start();
    include("banco/bd.php");
    if(isset($_POST['txtId'])){
        header("Location: ./carrinho.php");
        $id = $_POST['txtId'];
        $procuraPd = "SELECT * FROM tblprodutos WHERE idProduto=$id";
        $resultado = mysqli_query($connect,$procuraPd);
        $comando = mysqli_fetch_assoc($resultado);
        if(isset($_SESSION['carrinho'][$id])){
            $_SESSION['carrinho'][$id]['quantidade']++;
        }else{
            $_SESSION['carrinho'][$id] = array(
                "nome" => $comando['nomeProduto'], 
                "quantidade" => 1, 
                "preco" => $comando['preco'],
                "id" => $id 
            );
        } 
           
    }if(isset($_GET['idpd'])){
        $del = $_GET['idpd'];
        unset($_SESSION["carrinho"][$del]);
        header("Location: ./carrinho.php");
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="loja.css">
    <title>carrinho</title>
</head>
<body>
    <div class="container">
        <?php include("header.php"); ?>
        <div class="containerproduto">
                <h1>Carrinho</h1>
           <div class="tabela_cart-fundo">
                <table class="tabela-cart">
                    <tr class="tb_back-P">
                        <th class="tb-header">
                           <p>Nome Produto</p> 
                        </th>
                        <th class="tb-header">
                            <p>Quantidade</p>    
                        </th>
                        <th class="tb-header">
                            <p>Preco Total</p>    
                        </th>
                        <th class="tb-header">
                            <p>Confirmar ou Remover</p>    
                        </th>
                    </tr>
                    <?php
                    if( isset($_SESSION['carrinho'])) {
                        foreach ( $_SESSION['carrinho'] as $indice => $valor){
                    ?>
                    <tr class="tb_back-S">
                        <td class="tb-sub">
                            <p><?=$valor['nome']?></p>
                        </td>
                        <td class="tb-sub">
                            <p><?=$valor['quantidade']?></p> 
                        </td>
                        <td  class="tb-sub">
                            <p><?=$valor['preco']*$valor['quantidade']?></p>
                        </td>
                        <td  class="tb-sub2">
                            <a href="" class="cart-conf">confirmar</a>
                            <a href="./carrinho.php?idpd=<?=$valor['id']?>" class="cart-can">Cancelar</a>
                            <a href="./descProduto.php?idpd=<?=$valor['id']?>" class="cart-pg">Pagina do Produto</a>
                        </td>
                    </tr>
                    <?php
                     }
                    }
                    ?>
                </table>
           </div>
        </div>
        <?php include("./rodape.php"); ?>
    </div>
</body>
</html>