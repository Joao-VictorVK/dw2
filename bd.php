<?php
    $connect = mysqli_connect("localhost","root","","projetoloja");
    if(!$connect){
        die("Conexao falhou: ".mysqli_connect_error());
    }

?>