<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Michael TI</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
        
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7dfaa94841.js" crossorigin="anonymous"></script>
    
    <!-- Custom CSS -->
    <!-- CSS do Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="/res/site/css/reset.css">
    <link rel="stylesheet" href="/res/site/css/header.css">
    <link rel="stylesheet" href="/res/site/css/index.css">
    <link rel="stylesheet" href="/res/site/css/categories.css">
    <link rel="stylesheet" href="/res/site/css/product-details.css">
    <link rel="stylesheet" href="/res/site/css/cart.css">
    <link rel="stylesheet" href="/res/site/css/footer.css">
    <link rel="stylesheet" href="/res/site/css/responsive.css">
  </head>
  <body>
   <header class="topbar">
       <div class="container">
            <div class="topbar-left">
                <a href="/profile">Minha conta</a>
                <a href="#">Favoritos</a>
                <a href="/cart">Carrinho</a>
            </div>
            <div class="topbar-right">
                <select name="language">
                    <option value="pt" selected>Português</option>
                    <option value="en">Inglês</option>
                    <option value="es">Espanhol</option>
                </select>
                <select name="currency">
                    <option value="BRL" selected>BRL</option>
                    <option value="USD">USD</option>
                    <option value="BTC">BTC</option>
                </select>
            </div>
        </div>    
   </header>
    
    <div class="branding">
        <div class="container">
            <a href="/" class="logo">
                <img src="/res/site/img/logo.png" alt="Logo do site" />
            </a>
            <div class="search-bar">
                <input type="text" placeholder="Buscar produtos...">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
            <div>
                <a href="#">
                    <i class="fa-solid fa-boxes-stacked fa-2xl"></i>
                    <span>Meus pedidos</span>
                </a>
            </div>
            <div>
                <a href="#">
                    <i class="fa-regular fa-heart fa-2xl" ></i>
                    <span>Meus Favoritos</span>
                </a>
            </div> 
            <div class="cart-summary">
                <a href="/cart">
                    <i class="fa-solid fa-cart-shopping fa-2xl"></i>
                    <span class="cart-amount">R$<?php echo getCartVlSubTotal(); ?></span> 
                    <span class="cart-count"><?php echo getCartNrQtd(); ?></span>
                </a>
            </div>
        </div>
    </div>

    <nav class="main-nav">
        <div class="container">
            <ul class="menu">
                <li class="dropdown"><a href="javascript:void(0)">Departamentos</a>
                    <ul>
                        <li><a href="#">Celulares e Smarphones</a></li>
                        <li><a href="#">Eletrodomésticos</a></li>
                        <li><a href="#">Tvs e Vídeo</a></li>
                        <li><a href="#">Informática</a></li>
                        <li><a href="#">Automotivo</a></li>
                        <li><a href="#">Eletroportáteis</a></li>
                        <li><a href="#">Todos os Departamentos</a></li>
                    </ul>
                </li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="#">Mercado</a></li>
                <li><a href="#">Eletrônicos</a></li>
                <li><a href="#">Eletrodomésticos</a></li>
                <li><a href="#">Moda</a></li>
                <li><a href="#">Beleza</a></li>
                <li><a href="#">Esportes</a></li>
                <li><a href="#">Mais</a></li>
            </ul>
        </div>

    </nav>