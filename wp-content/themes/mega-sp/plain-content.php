<?php
/**
 * Template Name: Plain Content
 */
get_header(); ?>

  <!-- Custom Nav Structure -->

  <body>

      <!-- Main Header - Mega SP -->

    <header class="main-header">
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

      <!-- MSP Content -->

    <div class="msp-content">
     <div class="container">
       <div class="row">
         <div class="col">
           <div class="msp-content-holder">
             <h1 class="main-page-title"><?php the_field('heading_primaria'); ?></h1>
             <p class="block-content-p"><?php the_field('texto_da_pagina'); ?></p>
           </div>
         </div>
       </div>
     </div>
    </div>


    <!-- Load Footer -->
    <?php get_footer(); ?>
