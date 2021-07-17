<?php
    session_start();
    include("banco/bd.php");
    if($_POST == true){
        $nome = $_POST['txtnome'];
        $preco = $_POST['txtPreco'];
        $desc = $_POST['txtCaixa'];
        $peso = $_POST['txtPeso'];
        $categoria = $_POST['txtCate'];
        $id = $_POST['txtid'];
        $ativo = $_POST['txtAtivo'];

        $criarProdut = "UPDATE tblprodutos SET nomeProduto='$nome',descProduto='$desc',preco='$preco',peso='$peso',idcategoria=$categoria,ativo=$ativo WHERE idProduto= $id";
        $resultado = mysqli_query($connect,$criarProdut);
        if($resultado == true){
            header("Location: ./admArea.php");
            $_SESSION['msg'] = "<p class='msgPd'>Produto Editado com sucesso</p>";
        }
        else{
            die("Erro ao inserir registro".mysqli_error($connect));
        }
    }else{
        echo "nenhum registro inserido";
    }
?>
<h1><a href="javascript:history.go(-1)" style="color: red;">voltar</a></h1>