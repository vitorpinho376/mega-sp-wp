
<!-- Load Header -->
<?php get_header(); ?>

<!-- Custom Nav Structure -->

<body class="custom-nav-fix">

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

<!-- WP Section Styles -->

          <?php while( have_rows('mega_imoveis', 'option') ): the_row();

                // vars
                $imoveisimage = get_sub_field('featured_image');

                ?>
                <style>

                .nav-hero-item.nav-imoveis { transform: skewX(10deg); border-right: 8px solid #FFF; background: url(<?php echo $imoveisimage ?>) no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; }

                <?php endwhile; ?>

                <?php while( have_rows('mega_negocios', 'option') ): the_row();

                      // vars
                      $negociosimage = get_sub_field('featured_image');

                      ?>


                    .nav-hero-item.nav-negocios { transform: skewX(10deg); border-left: 8px solid #FFF;  background: url(<?php echo $negociosimage ?>) no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; }
                    <?php endwhile; ?>

.nav-imoveis::after { content: ''; position: absolute; top: 0; right: 0; bottom: 0; left: 0; width: 100%; background: rgba(246,111,103,0.48);  }
.nav-negocios::after { content: ''; position: absolute; top: 0; right: 0; bottom: 0; left: 0; width: 100%; background: rgba(44,110,225,0.48);  }

</style>

      <!-- Custom Hero Nav -->

    <div class="custom-nav-hero d-flex desk">

        <!-- Imoveis Section -->

        <?php while( have_rows('mega_imoveis', 'option') ): the_row();

              // vars
              $imoveistitle = get_sub_field('titulo');
              $imoveistagline = get_sub_field('tagline');

              ?>

      <div class="p-2 flex-fill nav-hero-item nav-imoveis">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="full-anchor"></a>
        <div class="content-block">
          <div class="image-holder">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-imoveis-white.png" />
          </div>
          <h1 class="headline-white"><?php echo $imoveistitle ?></h1>
          <p class="headline-p-white"><?php echo $imoveistagline ?></p>
        </div>
      </div>

      <?php endwhile; ?>

      <!-- Negocios Section -->

      <?php while( have_rows('mega_negocios', 'option') ): the_row();

            // vars
            $negociostitle = get_sub_field('titulo');
            $negociostagline = get_sub_field('tagline');

            ?>


      <div class="p-2 flex-fill nav-hero-item nav-negocios">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios" class="full-anchor"></a>
        <div class="content-block">
          <div class="image-holder">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-negocios-white.png" />
          </div>
          <h1 class="headline-white"><?php echo $negociostitle ?></h1>
          <p class="headline-p-white"><?php echo $negociostagline ?></p>
        </div>
      </div>

      <?php endwhile; ?>

    </div>

    <div class="main-nav-triggers mob">
     <div class="container">
       <div class="row">
         <div class="col">

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
