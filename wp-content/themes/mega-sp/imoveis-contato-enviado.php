<?php
/**
 * Template Name: Contato Enviado (Imoveis)
 */
get_header(); ?>

  <!-- Custom Nav Structure -->

  <body class="page-bg">

      <!-- Main Header - Mega SP -->

    <header class="custom-header">
      <div class="container">
        <div class="row align-item-center">
          <div class="col">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="btn neutral-btn">Voltar para Home</a>
          </div>
        </div>
      </div>
    </header>

    <!-- Page Section - Imóvel -->

    <div class="success-holder">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
             <div class="success-content-holder">
               <div class="success-content">
                 <img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary-imoveis.png" />
                 <h1 class="alert-heading"><?php the_field('heading_de_alerta'); ?></h1>
                 <p class="main-p"><?php the_field('texto_do_alerta'); ?></p>
                 <div class="action-holder">
                   <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="btn imoveis-btn">Ver outros imóveis</a>
                 </div>
               </div>
             </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Load Footer -->
    <?php get_footer(); ?>
