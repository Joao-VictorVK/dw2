<?php
    session_start();
    include("banco/bd.php");
        $idProduto = $_GET['idpd'];
        $del = "DELETE from tblprodutos WHERE idProduto=$idProduto";
        $resultado = mysqli_query($connect,$del);
        if($resultado == true){
            echo "Deletado com sucesso, volte a pagina do administrador";
            header("Location: ./admArea.php");
            $_SESSION['msg'] = "<p class='msgPd'>Produto Deletado com sucesso</p>";
        }
        else{
            echo("Erro ao deletar o registro".mysqli_error($connect));
        }
?>
<h1><a href="./admArea.php" style="color: red;">voltar</a></h1>