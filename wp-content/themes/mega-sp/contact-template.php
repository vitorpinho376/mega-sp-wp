<?php
/**
 * Template Name: Template de Contato (Contato)
 */
get_header(); ?>

  <!-- Custom Nav Structure -->

  <body>

      <!-- Main Header - Mega SP -->

    <header class="main-header floating-header desk">
      <div class="container-fluid">
        <div class="row align-item-center">
          <div class="col">
            <div class="brand-holder">
              <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="main-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-white.png" /></a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Header - Mega SP -->

  <header class="main-header floating-header mob">
    <div class="container-fluid">
      <div class="row align-item-center">
        <div class="col">
          <div class="brand-holder-mob">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="main-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary.png" /></a>
          </div>
        </div>
      </div>
    </div>
  </header>

      <!-- Custom Hero Nav -->

    <div class="form-diagonal">

        <!-- Imoveis Section -->

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="diagonal-bg">
              <img src="<?php the_field('imagem_de_background'); ?>" />
            </div>
          </div>
          <div class="col-md-7">
            <div class="heading-holder">
              <h1><?php the_field('titulo_do_contato'); ?></h1>
              <p><?php the_field('texto_do_contato'); ?></p>
              <div class="form-holder">
                <?php echo do_shortcode('[contact-form-7 id="198" title="Novo Contato"]'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>


  <!-- Load Footer -->
  <?php get_footer(); ?>
