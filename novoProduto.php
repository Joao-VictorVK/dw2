<?php
    include("banco/bd.php");
    $procuraCatg = "SELECT * FROM categoria";
    $resultado = mysqli_query($connect,$procuraCatg);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="loja.css">
    <title>Cadastrar Novo Produto</title>
</head>
<body>
    <div class="container">
        <?php include("header.php"); ?>
        <div class="registro">
        <span>Cadastrar novo produto ou <a href="./admArea.php">Voltar</a></span>
            <form action="./criarPd.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="txtnome">Nome</label></td>
                        <td><input type="text" name="txtnome" id="txtnome" placeholder="EX:xiaomi redmi note 9"></td>
                    </tr>
                    <tr>
                        <td><label for="preco">Preco</td>
                        <td><input type="text" name="txtPreco" id="preco" placeholder="somente use o ponto para separar reais de centavos"></td>
                    </tr>
                    <tr>
                        <td><label for="caixa">Ficha tecnica</label></td>
                        <td><textarea class="boxDescPD" name="txtCaixa" id="caixa" placeholder="insira a descricao"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="peso">Peso</td>
                        <td><input type="text" name="txtPeso" id="peso" placeholder="e ponto no lugar de virgula OBS:esse item e opcional"></td>
                    </tr>
                    <tr>
                        <td><label for="ativ">Ativar agora?</label></td>
                        <td>
                            <select name="txtAtivo" id="ativ">
                            <option value="">selecione uma opcao....</option>
                            <option value="1">sim</option>
                            <option value="0">não</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="categoria">Categotia</label></td>
                        <td>
                            <select name="txtCate" id="categoria">
                                <option value="">Selecione uma categoria....</option>
                            <?php
                                while($cat =mysqli_fetch_assoc($resultado)){
                            ?>
                                <option value="<?=$cat['idcategoria']?>"><?=$cat['categoria']?></option>
                            <?php
                            }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><button class="botao-registro" type="submit" nome="registrar">Adcionar Produto</button></td>
                        <td><button type="reset" class="botao-limpar" name="limpar">limpar</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <?php include("./rodape.php"); ?>
    </div>
</body>
</html>