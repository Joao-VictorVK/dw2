<?php
    session_start();
    $id = $_GET['idpd'];
    include("banco/bd.php");
    $ativar = "UPDATE tblprodutos SET ativo=1 WHERE idProduto= $id";
    $resultado = mysqli_query($connect,$ativar);
    if($resultado == true){
        header("Location: ./admArea.php");
        $_SESSION['msg'] = "<p class='msgPd'>Produto ativado com sucesso</p>";
    }
    else{
        die("Erro ao inserir registro".mysqli_error($connect));
    }
?>
<h1><a href="./admArea.php" style="color: red;">voltar</a></h1>