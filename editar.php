<?php
    include("banco/bd.php");
    $idProduto = $_GET['idpd'];
    $produto = "SELECT * FROM tblprodutos WHERE idProduto = $idProduto";
    $procuraCatg = "SELECT * FROM categoria";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="loja.css">
    <title>Editar Produto</title>
</head>
<body>
    <div class="container">
        <?php include("header.php");    
        ?>
        <div class="registro">
        <span>Editar Produto Ou <a href="./admArea.php">Voltar</a></span>
            <form action="./finalizarEdit.php" method="post">
            <?php
                $comando = mysqli_query($connect,$produto);
                while($catPd =mysqli_fetch_assoc($comando)){
            ?>
                <table>
                    <tr>
                        <td><label for="txtnome">Nome</label></td>
                        <td><input type="text" name="txtnome" id="txtnome" placeholder="EX:xiaomi redmi note 9" value="<?=$catPd['nomeProduto']?>"></td>
                        <td><input type="hidden" name="txtid" value="<?=$catPd['idProduto']?>"></td>
                    </tr>
                    <tr>
                        <td><label for="preco">Preco</td>
                        <td><input type="text" name="txtPreco" id="preco" placeholder="somente use o ponto para separar reais de centavos" value="<?=$catPd['preco']?>"></td>
                    </tr>
                    <tr>
                        <td><label for="caixa">Ficha tecnica</label></td>
                        <td><textarea class="boxDescPD" name="txtCaixa" id="caixa" placeholder="insira a descricao"><?=$catPd['descProduto']?></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="peso">Peso</td>
                        <td><input type="text" name="txtPeso" id="peso" placeholder="e ponto no lugar de virgula OBS:esse item e opcional" value="<?=$catPd['peso']?>"></td>
                    </tr>
                    <tr>
                        <td><label for="ativ">Ativar agora?</label></td>
                        <td>
                            <select name="txtAtivo" id="ativ">
                            <option value="">selecione uma opcao....</option>
                        <?php if($catPd['ativo'] == true){
                        ?>
                            <option value="1" selected>sim</option>
                            <option value="0">não</option>
                        <?php
                        }else{
                        ?>
                            <option value="0" selected>não</option>
                            <option value="1">sim</option>
                        <?php
                        }
                        ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="categoria">Categotia</label></td>
                        <td>
                            <select name="txtCate" id="categoria">
                                <option value="">selecione a categoria......</option>
                            <?php
                                $resultado = mysqli_query($connect,$procuraCatg);
                                while($cat =mysqli_fetch_assoc($resultado)){
                            ?>
                                <?php
                                if($cat['idcategoria'] == $catPd['idcategoria']){
                                ?>
                                    <option value="<?=$cat['idcategoria']?>" selected><?=$cat['categoria']?></option>
                                <?php
                                }else{
                                ?>
                                    <option value="<?=$cat['idcategoria']?>"><?=$cat['categoria']?></option>
                            <?php
                                }
                            }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="botao-registro" type="submit" nome="registrar">Confirmar</button></td>
                        <td><button type="reset" class="botao-limpar" name="limpar">limpar</button></td>
                    </tr>
                </table>
                <?php
                }
                ?>
            </form>
        </div>
        <?php include("./rodape.php"); ?>
    </div>
</body>
</html>