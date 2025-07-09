<?php if(!class_exists('Rain\Tpl')){exit;}?> <footer class="site-footer">
  <div class="footer-content">
    <div class="footer-col">
      <h2>Michael A. C. Site Teste</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis.</p>
      <div class="footer-social">
        <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
      </div>
    </div>

    <div class="footer-col">
      <h2>Navegação</h2>
      <ul>
        <li><a href="#">Minha Conta</a></li>
        <li><a href="#">Meus Pedidos</a></li>
        <li><a href="#">Lista de Desejos</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h2>Categorias</h2>
      <ul>
        <?php require $this->checkTemplate("categories-menu");?>
      </ul>
    </div>

    <div class="footer-col">
      <h2>Newsletter</h2>
      <p>Receba novidades e promoções no seu e-mail:</p>
      <form action="#">
        <input type="email" placeholder="Digite seu e-mail">
        <button type="submit">Cadastrar</button>
      </form>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; Dev Michael A. C. 2022 - <?php echo date('Y'); ?> <a href="http://www.michaelti.com.br" target="_self">www.michaelti.com.br</a></p>
    <div class="footer-card-icons">
      <i class="fa fa-cc-discover"></i>
      <i class="fa fa-cc-mastercard"></i>
      <i class="fa fa-cc-paypal"></i>
      <i class="fa fa-cc-visa"></i>
    </div>
  </div>
</footer>

   
      <!-- JS do Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            autoplay: {
            delay: 3000,
            },
            pagination: {
            el: '.swiper-pagination',
            clickable: true,
            },
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            }
        });
    </script>
  </body>
</html>