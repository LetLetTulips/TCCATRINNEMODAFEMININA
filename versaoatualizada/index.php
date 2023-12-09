<?php
require "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/carrosselprincipal.css">
    <link rel="stylesheet" href="css/tipos-maisvendidos.css">
    <link rel="stylesheet" href="css/bannerpreorder.css">
    <link rel="stylesheet" href="css/interacaocomamidia.css">
    <link rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="css/mapa.css">
    <link rel="stylesheet" href="css/modallogin.css">
    <link rel="stylesheet" href="css/tiposderoupa.css">
    <title>Atrinne Moda Feminina</title>

    <!-- ionicon -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  

</head>

<body>
    
<!-- <div class="container-fluid"> -->
  <header>
    <div class="container">
      <nav class="nav-bar">
          <div class="logo">
              <a href="INDEX.HTML"><p>ATRINNE MODA FEMININA</p></a>
          </div>
        <div class="botoes-header">
          <a href="GALERIA.html"><div class="login-button">
           <button><ion-icon name="shirt-outline"></ion-icon></button>
              <br>
              <span class="titulomenu">Produtos</span>
          </div></a>
          <div class="login-button">
              <button><a href="#"><ion-icon name="heart-outline"></ion-icon></a></button><br>
              <span class="titulomenu">Favoritos</span>
          </div>

          <div class="login-button">
              <button><a href="#"><ion-icon name="cart-outline"></ion-icon></a></button><br>
              <span class="titulomenu">Carrinho</span>
          </div>

          <div class="login-button">
              <button><a href="#"><ion-icon name="person-outline"></ion-icon></a></button><br>
               <span class="titulomenu">Perfil</span>
          </div>
      </div>

          <div class="mobile-menu-icon">
              <button onclick="menuShow()"><ion-icon class="icon" name="menu-outline"></ion-icon></button>
          </div>
      </nav>
      <div class="mobile-menu">
          <div class="login-button-mobile">
              <center><a href="#"><H3>PRODUTOS</H3></a></center>
          </div>
          <div class="login-button-mobile">
              <center><a href="#"><H3>FAVORITOS</H3></a></center>
          </div>

          <div class="login-button-mobile">
              <center><a href="#"><H3>CARRINHO</H3></a></center>
          </div>

          <div class="login-button-mobile">
              <center><a href="#"><H3>PERFIL</H3></a></center>
          </div>
      </div>
    </div>
  </header>
    <!-- Carrossel principal-->
    <section class="sliderprincipal">
<div id="demo" class="carousel slide" data-bs-ride="carouselp" >

    <!--  INDICADORES -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- OS SLIDES DO CARROSSEL -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenstcc/sliderp1.png" alt="ATRINNE" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="imagenstcc/sliderp2.png" alt="ATRINNE" class="d-block" style="width:100%">
      </div>
      <div class="carousel-item">
        <img src="imagenstcc/sliderp3.png"  alt="ATRINNE" class="d-block" style="width:100%">
      </div>
    </div>
    
    <!-- CONTROLES -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
    </section>
    <!-- tipos de roupa -->
    <section class="product">
      <div class="product-containerzao">
      <center><h2 class="product-category">ENCONTRE O QUE VOCÊ PROCURA...</h2></center>
      <button class="pre-btn"><ion-icon CLASS="ARROW"  name="arrow-forward-circle-outline"></ion-icon></button>
      <button class="nxt-btn"><ion-icon CLASS="ARROW" name="arrow-forward-circle-outline"></ion-icon></button>
      <div class="product-container">
      <div class="product-card">
        
              <div class="product-image-type">
            <A href="BLUSAS.HTML" STYLE="text-decoration: NONE;COLOR:BLACK;">
                  <img src="imagenstcc/tproupablusa.png" class="product-thumb" alt="">
                 
              </div>
              <div class="product-info">
                
                  <CENTER><h2 class="product-brand">Blusa</h2></CENTER>
                  
              </div>
            </A>
</div><!--fim produto -->
<div class="product-card">
  <div class="product-image-type">
<A href="#" STYLE="text-decoration: NONE;COLOR:BLACK;">
      <img src="imagenstcc/tproupashort.png" class="product-thumb" alt="">
     
  </div>
  <div class="product-info">
    
      <CENTER><h2 class="product-brand">SHORT</h2></CENTER>
      
  </div>
</A>
</div><!--fim produto -->

<div class="product-card">
  <div class="product-image-type">
<A href="#" STYLE="text-decoration: NONE;COLOR:BLACK;">
      <img src="imagenstcc/tproupaconjunto" class="product-thumb" alt="">
     
  </div>
  <div class="product-info">
    
      <CENTER><h2 class="product-brand">CONJUNTO</h2></CENTER>
      
  </div>
</A>
</div><!--fim produto -->

<div class="product-card">
  <div class="product-image-type">
<A href="#" STYLE="text-decoration: NONE;COLOR:BLACK;">
      <img src="imagenstcc/tproupavestido.png" class="product-thumb" alt="">
     
  </div>
  <div class="product-info">
    
      <CENTER><h2 class="product-brand">VESTIDO</h2></CENTER>
      
  </div>
</A>
</div><!--fim produto -->

<div class="product-card">
  <div class="product-image-type">
<A href="#" STYLE="text-decoration: NONE;COLOR:BLACK;">
      <img src="imagenstcc/tproupamacaquinho.png" class="product-thumb" alt="">
     
  </div>
  <div class="product-info">
    
      <CENTER><h2 class="product-brand">MACACÃo</h2></CENTER>
      
  </div>
</A>
</div><!--fim produto -->

<div class="product-card">
  <div class="product-image-type">
<A href="#" STYLE="text-decoration: NONE;COLOR:BLACK;">
      <img src="imagenstcc/tproupacalca.png" class="product-thumb" alt="">
     
  </div>
  <div class="product-info">
    
      <CENTER><h2 class="product-brand">CALÇA</h2></CENTER>
      
  </div>
</A>
</div><!--fim produto -->


          </div>
            </div>
            </section>
            </div>
    </section>

    <!-- MAIS VENDIDOS -->
      <section class="product-maisvendidos"> 
      
        <center><h2 class="product-category">MAIS VENDIDOS</h2><center>
        <div class="maisvendidos-container">
        <button class="pre-btn"><ion-icon CLASS="ARROW"  name="arrow-forward-circle-outline"></ion-icon></button>
        <button class="nxt-btn"><ion-icon CLASS="ARROW" name="arrow-forward-circle-outline"></ion-icon></button>
        <div class="product-container">
          <!-- inicio produto -->
<div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">30% off</span>
                    <img src="imagenstcc/Body Any. R$ 59,90_.jpg" class="product-thumb" alt="">
                    <button class="card-btn"><a href="#"><ion-icon name="cart-outline"></ion-icon></a></button>
                </div>
                <div class="product-info">
                
            
                    <h2 class="product-name">Blusa Bonita</h2>
                    <!-- <p class="product-short-description">Clique e Saiba</p> -->
                    <span class="priceproduct">R$60,00</span> <!--<span class="actual-price">$40</span> -->
                </div>
 </div><!--fim produto -->

          
            

            </div>
        </div>
</div>
    </section>
   <!-- BANNER MARKETING -->

   <div class="bannerpreorder" style="display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;">
    <img src="imagenstcc/bannerpreorder.png">
  </div>

  <!-- FIM DO BANNER -->

<!-- INTERAÇÃO COM A MÍDIA -->
<section class="interacao"> 
  <section class="interacaoecomamidia">
      <div class="videointeracao">
          <video width="100%" controls autoplay>
              <source src="imagenstcc/videorells.mp4" type="video/mp4">
          </video>
      </div>
  
      <div class="carousel-containerp">
          <div class="carouselp">
              <div class="carousel-slidep">
                  <img src="imagenstcc/sliderp1.png" alt="Imagem 1">
              </div>
              <div class="carousel-slide">
                  <img src="imagenstcc/sliderp2.png" alt="Imagem 1">
              </div>
              <div class="carousel-slide">
                  <img src="imagenstcc/sliderp3.png" alt="Imagem 1">
              </div>
          </div>
          <h1 class="looks"> Use #LOOKDAATRINNE no instagram e apareça aqui</h1>
      </div>
  </section>
  </section>
  <!-- mapa -->
<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.1844917243334!2d-43.25070292397651!3d-22.646908979438855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997591c669277f%3A0x94a0efb05d07d372!2sAtrinne%20moda%20feminina!5e0!3m2!1spt-BR!2sbr!4v1700088893708!5m2!1spt-BR!2sbr"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
  
  <!-- rodapé -->
  <footer>
    <div class="footer-container">
        <div class="footer-section">
            <h2>Perguntas Frequentes:</h2>
              <p>Não aceitamos troca ou devolução</p>
            <p>Pagamento realizado pelo whatsapp</p>
        </div>
        <div class="footer-section">
          <img src="imagenstcc/manequim.png" width="180" height="140" 
          id="Logo">
          <div id="Fonte1"> Atrine Moda Feminina
          </div>
        </div>
        <div class="footer-section">
          <div id="Home1"> <a href="#topo"> <!--Entre as "" tem que colocar o id da div referente a chamada-->
            <font color="white"> <h2>Home</h2></font></a>
            <br>
         
     </div></a>
     <div id="Blog1"> <a href="#"> <font color="white"> <h2>Blog</h2> </font>
      <br>
        </a>
   </div></a>
   <div id="Sobre1"> <a href="SOBRENOS.HTML">
    <font color="white"> <h2>Sobre nós</h2> </font></a>
    <br>
</div></a>

        </div>
        <div class="footer-section">
          <div id="Duvidas1"> <a href="#">
            
        </div></a>
    
        <div id="Contato1"> 
          <h2>Contato</h2>
            </div>
           <a href="https://www.instagram.com/atrinnemodafeminina/?hl=pt"><img src="imagenstcc/insta_icon.png" width="67" height="65" 
                id="instagram">
    
                <a href="https://api.whatsapp.com/message/RKUYXZFHCGHTM1?autoload=1&app_absent=0"><img src="imagenstcc/whatsapp-logo-2022.svg" width="77" height="75" 
                    id="whats">
    </div>
          </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 Atrinne Moda Feminina. Todos os direitos reservados.</p>
    </div>
</footer>
</div>

<button id="openModal">X</button>

<div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Bem vindo fulaninho do TCC</p>
        </div>
    </div>

<script src="js/header.js"></script>
    <script src="js/interacaocomamidia.js"></script>
    <script src="js/tipos-maisvendidos.js"></script>
    <script src="js/modallogin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ionicon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>


</html>