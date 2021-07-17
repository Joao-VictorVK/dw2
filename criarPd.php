<?php
    session_start();
    include("banco/bd.php");
    if($_POST == true){
        $nome = $_POST['txtnome'];
        $preco = $_POST['txtPreco'];
        $desc = $_POST['txtCaixa'];
        $peso = $_POST['txtPeso'];
        $categoria = $_POST['txtCate'];
        $ativo = $_POST['txtAtivo'];
        $criarProdut = "INSERT INTO tblprodutos(nomeProduto,preco,descProduto,peso,idcategoria,ativo) VALUES ('$nome','$preco','$desc','$peso','$categoria','$ativo')";
        $resultado = mysqli_query($connect,$criarProdut);
        if($resultado == true){
            echo "Registrado com sucesso, volte a pagina do administrador";
            header("Location: ./admArea.php");
            $_SESSION['msg'] = "<p class='msgPd'>Produto Criado com sucesso</p>";
        }
        else{
            die("Erro ao inserir registro".mysqli_error($connect));
        }
    }else{
        echo "nenhum registro inserido";
    }
?>
<h1><a href="./admArea.php" style="color: red;">voltar</a></h1>