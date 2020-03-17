<?php
/**
 * Template Name: Sobre Nos
 */
get_header(); ?>

  <!-- Custom Nav Structure -->

  <body>

      <!-- Main Header - Mega SP -->

    <header class="main-header desk">
      <div class="container-fluid">
        <div class="row align-item-center">
          <div class="col">
            <div class="brand-holder">
              <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="main-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary.png" /></a>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="neutral-link">Imóveis</a>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios" class="neutral-link">Negócios</a>
            </div>
          </div>
          <div class="col">
            <div class="float-right">
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/contato" class="btn neutral-btn">Entre em Contato</a>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/anuncie" class="btn primary-btn">Anuncie Aqui</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Mob Header -->

    <header class="main-header mob">
      <div class="container-fluid">
        <div class="row align-item-center">
          <div class="col">
            <div class="brand-holder">
              <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="main-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary.png" /></a>
            </div>
          </div>
          <div class="col">
            <div class="float-right">
              <a href="#" class="btn neutral-btn mob-menu" data-toggle="modal" data-target="#landingModalMenu"><i class="icon icon-menu"></i></a>
            </div>
          </div>
        </div>
      </div>
    </header>

      <!-- MSP Content -->

    <div class="msp-content">
     <div class="container">
       <div class="row">
         <div class="col">
           <div class="msp-content-holder">
             <h1 class="main-page-title"><?php the_field('titulo_de_sobre_nos'); ?></h1>
             <p class="block-content-p"><?php the_field('texto_do_sobre_nos'); ?></p>
           </div>
         </div>
         <div class="col">
           <div class="msp-image-holder">
             <img src="<?php the_field('imagem_de_background'); ?>" />
           </div>
         </div>
       </div>
     </div>
    </div>

    <!-- MSP Neutral Content -->

    <div class="msp-neutral-content">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2 class="block-content-heading"><?php the_field('titulo_do_bloco'); ?></h2>
            <?php if( have_rows('bloco') ): ?>

            <?php while( have_rows('bloco') ): the_row();

                 // vars
                 $novoparagrafo = get_sub_field('paragrafo_do_bloco');

                 ?>
            <p class="block-content-p"><?php echo $novoparagrafo ?></p>

          <?php endwhile; ?>

         <?php endif; ?>
            <div class="social-grid-holder">
              <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="sm-social"><i class="icon icon-facebook"></i></a>
              <a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="sm-social"><i class="icon icon-instagram"></i></a>
              <a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank" class="sm-social"><i class="icon icon-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Menu - Landing -->

    <div class="modal fade" id="landingModalMenu" tabindex="-1" role="dialog" aria-labelledby="landingModalMenuLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content mob-menu-content">
           <nav class="mob-menu-nav">
             <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="mob-menu-link">Imóveis</a>
             <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios" class="mob-menu-link">Negócios</a>
             <a href="<?php echo get_bloginfo( 'wpurl' );?>/contato" class="mob-menu-link">Entre em Contato</a>
             <a href="<?php echo get_bloginfo( 'wpurl' );?>/anuncie" class="btn primary-btn">Anuncie Aqui</a>
           </nav>
        </div>
      </div>
    </div>

    <!-- Load Footer -->
    <?php get_footer(); ?>
