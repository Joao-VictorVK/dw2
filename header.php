<?php
    require "banco/bd.php";
?>
<div class="navbar-fundo" id="topo">
    <div class="navbar">
        <div class="left">
            <a href="./index.php" ><img class="logo" src="imagens/logo.jpg" alt="logo"></a>
            <a href="./index.php" class="left-links">Inicio</a>
            <a href="./news.php" class="left-links">Noticias</a>
        </div>
        <div class="center">
            <form action="">
                <input type="search" name="Buscar" id="Buscar" placeholder="Buscar produto.....">
                <button type="submit" class="bnt-pesc">Pesquisar</button>
            </form>
        </div>
        <div class="right">
            <a href="./contate.php" class="right-links">
                <ion-icon name="call" class="navbar-icon"></ion-icon>
                <span>Contato</span>
            </a>
            <a href="./carrinho.php" class="right-links">
            <ion-icon name="cart" class="navbar-icon"></ion-icon>
                <span>Carrinho</span>
            </a>
            <a href="./login.php" class="right-links">
                <ion-icon name="person-circle" class="navbar-icon"></ion-icon>
                <span for="Conta">Minha Conta</span>
            </a>
        </div>
    </div>
</div>
<div class="categorias">
    <div class="menus-categoria">
        <a href="./index.php" class="menus-categoria">ultimos lancados</a>
        <a href="./catePd.php?idCate=1&cat=Celulares" class="menus-categoria">Celulares</a>
        <a href="./catePd.php?idCate=2&cat=Componentes De Computador" class="menus-categoria">Componentes De Computador</a>
        <a href="./catePd.php?idCate=3&cat=Tvs" class="menus-categoria">Tvs</a>
        <a href="./catePd.php?idCate=4&cat=Acessorios" class="menus-categoria">Acessorios</a>
    </div>
</div>