<!-- Footer -->

<footer class="desk">
  <div class="container-fluid">
    <div class="row">

        <!-- 1st col -->

      <div class="col-md-6 col-sm-12">
         <div class="brand-footer">
           <img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-grey.png" />
           <p class="footer-tagline"><?php the_field('slogan_mega_sp', 'option'); ?></p>
           <p class="footer-address"><?php the_field('endereco_fisico', 'option'); ?></p>
           <span class="footer-phone"><?php the_field('telefone_fixo', 'option'); ?></span>
           <span class="footer-phone"><?php the_field('Celular', 'option'); ?></span>
         </div>
         <div class="social-grid">
           <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="sm-social"><i class="icon icon-facebook"></i></a>
           <a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="sm-social"><i class="icon icon-instagram"></i></a>
           <a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank" class="sm-social"><i class="icon icon-whatsapp"></i></a>
         </div>
         <div class="link-grid">
           <a href="<?php echo get_bloginfo( 'wpurl' );?>/contato" class="neutral-link">Contato</a>
           <a href="<?php echo get_bloginfo( 'wpurl' );?>/termos-e-privacidade" class="neutral-link">Termos e Privacidade</a>
           <a href="<?php echo get_bloginfo( 'wpurl' );?>/sobre-nos" class="neutral-link">Sobre Nós</a>
         </div>
         <div class="signature-holder">
           <span class="signature">© Mega São Paulo - <?php echo date("Y"); ?></span>
           <span class="creci-span"><?php the_field('creci_jur', 'option'); ?></span>
         </div>
      </div>


      <!-- 2nd Col -->

      <div class="col-md-3 col-sm-12">
        <div class="imoveis-links">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-imoveis-grey.png" />
          <nav class="link-grid">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="neutral-link">Imóveis</a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/imoveis-novos" class="neutral-link">Imóveis Novos</a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/comprar" class="neutral-link">Comprar</a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/alugar" class="neutral-link">Alugar</a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/anuncie" class="neutral-link">Anuncie um imóvel</a>
          </nav>
        </div>
      </div>

      <!-- 3rd Col -->

      <div class="col-md-3 col-sm-12">
        <div class="negocios-links">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-negocios-grey.png" />
          <nav class="link-grid">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios" class="neutral-link">Negócios</a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios/em-operacao" class="neutral-link">Empresas em Operação</a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/anuncie" class="neutral-link">Anuncie um negócio</a>
          </nav>
        </div>
      </div>

      </div>
  </div>
</footer>

<!-- Footer Mobile -->

<footer class="mob">
  <div class="container-fluid">
    <div class="row">

        <!-- 1st col -->

      <div class="col-sm-12">
         <div class="brand-footer">
           <img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-grey.png" />
           <p class="footer-tagline"><?php the_field('slogan_mega_sp', 'option'); ?></p>
           <p class="footer-address"><?php the_field('endereco_fisico', 'option'); ?></p>
           <span class="footer-phone"><?php the_field('telefone_fixo', 'option'); ?></span>
           <span class="footer-phone"><?php the_field('Celular', 'option'); ?></span>
         </div>
         <div class="social-grid">
           <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="sm-social"><i class="icon icon-facebook"></i></a>
           <a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="sm-social"><i class="icon icon-instagram"></i></a>
           <a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank" class="sm-social"><i class="icon icon-whatsapp"></i></a>
         </div>
         <div class="link-grid">
           <a href="<?php echo get_bloginfo( 'wpurl' );?>/contato" class="neutral-link">Contato</a>
           <a href="<?php echo get_bloginfo( 'wpurl' );?>/termos-e-privacidade" class="neutral-link">Termos e Privacidade</a>
           <a href="<?php echo get_bloginfo( 'wpurl' );?>/sobre-nos" class="neutral-link">Sobre Nós</a>
         </div>
      </div>


      <!-- 2nd Col -->

      <div class="col-sm-12">
        <div class="imoveis-links">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-imoveis-grey.png" />
          <nav class="link-grid">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="neutral-link">Imóveis</a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/imoveis-novos" class="neutral-link">Imóveis Novos</a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/comprar" class="neutral-link">Comprar</a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/alugar" class="neutral-link">Alugar</a>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/anuncie" class="neutral-link">Anuncie um imóvel</a>
          </nav>
        </div>
      </div>

      <!-- 3rd Col -->

      <div class="col-sm-12">
        <div class="negocios-links">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-negocios-grey.png" />
          <nav class="link-grid">
            <nav class="link-grid">
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios" class="neutral-link">Negócios</a>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios/em-operacao" class="neutral-link">Empresas em Operação</a>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/anuncie" class="neutral-link">Anuncie um negócio</a>
          </nav>
        </div>
      </div>

      <!-- 4th Col -->

      <div class="col-sm-12">
        <div class="signature-holder">
          <span class="signature">© Mega São Paulo - <?php echo date("Y"); ?></span>
          <span class="creci-span"><?php the_field('creci_jur', 'option'); ?></span>
        </div>
      </div>


      </div>
  </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
