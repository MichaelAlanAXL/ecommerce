<?php if(!class_exists('Rain\Tpl')){exit;}?>   <!-- Swiper -->
<div class="swiper">
  <div class="swiper-wrapper">

    <!-- Slide 1 -->
    <div class="swiper-slide">
      <div class="slide-content">
        <img src="/res/site/img/h4-slide.png" alt="Slide 1">
        <div class="caption">
          <h2>iPhone 6 Plus</h2>
          <p>Dual SIM disponível</p>
          <a href="#" class="btn">Comprar agora</a>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="swiper-slide">
      <div class="slide-content">
        <img src="/res/site/img/h4-slide2.png" alt="Slide 2">
        <div class="caption">
          <h2>50% Off</h2>
          <p>Em mochilas e materiais escolares</p>
          <a href="#" class="btn">Aproveitar</a>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="swiper-slide">
      <div class="slide-content">
        <img src="/res/site/img/h4-slide3.png" alt="Slide 3">
        <div class="caption">
          <h2>iPod Apple</h2>
          <p>Disponível na loja</p>
          <a href="#" class="btn">Ver produto</a>
        </div>
      </div>
    </div>

    <!-- Slide 4 -->
    <div class="swiper-slide">
      <div class="slide-content">
        <img src="/res/site/img/h4-slide4.png" alt="Slide 4">
        <div class="caption">
          <h2>Promoção de iPhones</h2>
          <p>Ofertas imperdíveis</p>
          <a href="#" class="btn">Comprar</a>
        </div>
      </div>
    </div>

  </div>

  <!-- Botões de navegação -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>

  <!-- Bolinhas de paginação -->
  <div class="swiper-pagination"></div>
</div>

<section class="product-section">
    <div class="container">
        <h2>Produtos em Destaque</h2>

        <div class="product-grid">
            <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="<?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        <div class="product-hover">
                            <a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="add-to-cart-link">
                                <i class="fa fa-shopping-cart"></i> Comprar
                            </a>
                            <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="view-details-link">
                                <i class="fa fa-link"></i> Ver detalhes
                            </a>
                        </div>
                    </div>

                <h3 class="product-name">
                    <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                </h3>

                <div class="product-carousel-price">
                    <ins>R$<?php echo formatPrice($value1["vlprice"]); ?></ins>
                </div>
              </div>
            <?php } ?>
        </div>
    </div>
</section>
    
    <div class="brands-area">
        <div class=""></div>
        <div class="container">
            <div class="">
                <div class="">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="/res/site/img/brand1.png" alt="nokia">
                            <img src="/res/site/img/brand2.png" alt="canon">
                            <img src="/res/site/img/brand3.png" alt="samsung">
                            <img src="/res/site/img/brand4.png" alt="apple">
                            <img src="/res/site/img/brand5.png" alt="htc">
                            <img src="/res/site/img/brand6.png" alt="lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
        