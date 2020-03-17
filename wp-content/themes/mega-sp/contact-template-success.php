<?php
/**
 * Template Name: Sucesso de Formulário
 */
get_header(); ?>

  <!-- Custom Nav Structure -->

  <body>

      <!-- Main Header - Mega SP -->

    <header class="main-header floating-header">
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
            <div class="success-content nav-card-holder">
              <h1 class="alert-heading"><?php the_field('heading_de_alerta'); ?></h1>
              <p class="main-p"><?php the_field('texto_do_alerta'); ?></p>
              <div class="action-holder">

                <?php while( have_rows('mega_imoveis', 'option') ): the_row();

                      // vars
                      $imoveistitle = get_sub_field('titulo');
                      $imoveistagline = get_sub_field('tagline');

                      ?>

                <!-- Trigger Custom Card -->

                <div class="msp-nav-card">
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="full-anchor"></a>
                  <div class="nav-card-container">
                    <div class="image-holder">
                      <img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary-imoveis.png" />
                    </div>
                    <div class="nav-card-content">
                      <h2><?php echo $imoveistitle ?></h2>
                      <p><?php echo $imoveistagline ?></p>
                    </div>
                    <span class="icon icon-arrow-right"></span>
                  </div>
                </div>

                <?php endwhile; ?>

                <?php while( have_rows('mega_negocios', 'option') ): the_row();

                      // vars
                      $negociostitle = get_sub_field('titulo');
                      $negociostagline = get_sub_field('tagline');

                      ?>

                <!-- Trigger Custom Card -->

                <div class="msp-nav-card">
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios" class="full-anchor"></a>
                  <div class="nav-card-container">
                    <div class="image-holder">
                      <img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary-negocios.png" />
                    </div>
                    <div class="nav-card-content">
                      <h2><?php echo $negociostitle ?></h2>
                      <p><?php echo $negociostagline ?></p>
                    </div>
                    <span class="icon icon-arrow-right"></span>
                  </div>
                </div>

                <?php endwhile; ?>

              </div>
            </div>
          </div>
        </div>
      </div>

  </div>


  <!-- Load Footer -->
  <?php get_footer(); ?>
