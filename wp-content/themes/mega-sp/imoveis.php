<?php
/**
 * Template Name: Lista de Imoveis
 */
get_header(); ?>

  <!-- Custom Nav Structure -->

  <body>

    <style>
    .section-hero.imoveis-hero { background: url(<?php the_field('imagem_de_background'); ?>) no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; }
    .section-hero.imoveis-hero::after { content: ''; position: absolute; top: 0; right: 0; bottom: 0; left: 0; width: 100%; background: rgba(246,111,103,0.8);  }
    </style>

      <!-- Main Header - Mega SP -->

    <header class="neutral-header desk">
      <div class="container">
        <div class="row align-item-center">
          <div class="col">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios" class="white-link"><i class="icon icon-arrow-left"></i> Ver Negócios</a>
          </div>
          <div class="col">
            <div class="float-right">
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/contato" class="btn ghost-btn">Entre em Contato</a>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/anuncie" class="btn neutral-btn">Anuncie Aqui</a>
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
            <div class="brand-holder-mob">
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="main-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary-imoveis.png" /></a>
            </div>
          </div>
          <div class="col">
            <div class="float-right">
              <a href="#" class="btn neutral-btn mob-menu" data-toggle="modal" data-target="#imoveisModalMenu"><i class="icon icon-menu"></i></a>
            </div>
          </div>
        </div>
      </div>
    </header>

      <!-- Imoveis Hero -->

    <div class="section-hero imoveis-hero">
      <div class="container">
        <div class="row">
          <div class="col">

            <!-- Hero Section -->

            <div class="section-hero-grid">
              <div class="section-hero-content">
                <img class="section-logo desk" src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-imoveis-white.png" />
                <h1 class="heading-white"><?php the_field('imoveis_slogan_heading'); ?></h1>
                <p class="main-p-white"><?php the_field('imoveis_slogan_tagline'); ?></p>
              </div>

              <!--  Filter Holder -->

              <div class="filter-holder imoveis-filter">

                <!--  Span Tag -->

                 <div class="span-tag">
                   <h2>O que você procura?</h2>
                 </div>

                 <!--  Form -->

                 <form class="search-form" action="" onsubmit="onSearch(event)" method="get">

                    <!--  Pill Nav -->

                    <div class="nav-pill-holder nav nav-pills" role="tablist">
                      <label>Tipo de contrato</label>
                      <a href="#" name="comprar" data-toggle="pill" role="tab" aria-controls="pills-comprar" aria-selected="true" class="custom-pill imoveis-pill active">Comprar</a>
                      <a href="#" name="alugar" data-toggle="pill" role="tab" aria-controls="pills-alugar" aria-selected="false" class="custom-pill imoveis-pill">Alugar</a>
                      <a href="#" name="imoveis-novos" data-toggle="pill" role="tab" aria-controls="pills-imoveis" aria-selected="false" class="custom-pill imoveis-pill">Imóveis Novos</a>
                    </div>

                 <!-- Endereço -->

                  <div class="form-group">
                    <label for="bairroInput">Bairro/Cidade</label>
                    <input type="text" class="form-control" name="q" placeholder="Busque por bairro ou cidade…" value="<?php echo isset($_GET['q']) ? $_GET['q']: '' ?>">
                  </div>
                  <div class="action-holder align-self-end">
                    <button onclick="filter()" type="submit" class="btn imoveis-btn">Buscar Imóveis</button>
                  </div>

                </form>

              </div>
            </div>



          </div>
        </div>
      </div>
    </div>


      <!-- Cards Section - Imóveis Novos -->

      <div class="card-section">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="section-title-block">
                <h2>Imóveis Novos</h2>
                <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/imoveis-novos" class="btn neutral-btn float-right">Ver Mais</a>
              </div>
            </div>
          </div>

            <?php
               // Query Imóveis Novos
               $newimoveis_query = new WP_Query( array(
                  'post_type' => 'imovel',
                  'category_name' => 'imoveis-novos',
                  'posts_per_page' => 3,
               ));
            ?>

          <div class="row">

            <?php while ($newimoveis_query -> have_posts()) : $newimoveis_query -> the_post();

             $imovelgallery = get_field('fotos_do_imovel');
             $imovelaluguel = get_field('venda_ou_aluguel');
             $imovelcondominio = get_field('condominio');
             $imovelrua = get_field('endereco_rua');

            ?>

            <!-- Imoveis Cards -->

            <div class="col-md-4">
              <div class="object-card-holder">
                <a href="<?php the_permalink() ?>" class="full-anchor"></a>
                <?php
                 if( $imovelgallery ): ?>
                    <div class="image-holder">
                      <img src="<?php echo $imovelgallery[0] ?>" />
                    </div>
                <?php endif; ?>
                <div class="card-info">
                  <h3 class="card-title-tag"><?php the_title(); ?></h3>
                  <div class="location-tag">
                    <i class="icon icon-location imoveis-type"></i>
                    <span class="address-span imoveis-type"><?php if( $imovelrua ): ?> <?php the_field('endereco_rua'); ?> - <?php endif; ?><?php the_field('bairro'); ?> - <?php the_field('cidade'); ?></span>
                  </div>
                  <div class="price-tag">
                    <span class="imoveis-type price"><?php the_field('valor_do_imovel'); ?></span>
                    <?php if( $imovelaluguel == 'aluguel' ): ?>
                       <span class="imoveis-type mensalidade">Mês</span>
                    <?php endif; ?>
                  </div>
                  <?php if( $imovelcondominio == true ): ?>
                    <div class="microcopy-holder">
                      <span class="microcopy">Condomínio: <?php echo $imovelcondominio ?></span>
                    </div>
                  <?php endif; ?>
                  <?php if( $imovelcondominio == false ): ?>
                    <div class="microcopy-holder">
                      <span class="microcopy">Sem Condomínio</span>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>


          <?php
          endwhile;
          wp_reset_postdata();
          ?>
        </div>

        </div>
      </div>

      <!-- Cards Section - Comprar -->

      <div class="card-section">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="section-title-block">
                <h2>Comprar</h2>
                <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/comprar" class="btn neutral-btn float-right">Ver Mais</a>
              </div>
            </div>
          </div>
          <?php
             // Query Imóveis Novos
             $compraimoveis_query = new WP_Query( array(
                'post_type' => 'imovel',
                'category_name' => 'compra',
                'posts_per_page' => 3,
             ));
          ?>

        <div class="row">

          <?php while ($compraimoveis_query -> have_posts()) : $compraimoveis_query -> the_post();

           $imovelgallery = get_field('fotos_do_imovel');
           $imovelcondominio = get_field('condominio');
           $imovelrua = get_field('endereco_rua');

          ?>

          <!-- Imoveis Cards -->

          <div class="col-md-4">
            <div class="object-card-holder">
              <a href="<?php the_permalink() ?>" class="full-anchor"></a>
              <?php
               if( $imovelgallery ): ?>
                  <div class="image-holder">
                    <img src="<?php echo $imovelgallery[0] ?>" />
                  </div>
              <?php endif; ?>
              <div class="card-info">
                <h3 class="card-title-tag"><?php the_title(); ?></h3>
                <div class="location-tag">
                  <i class="icon icon-location imoveis-type"></i>
                  <span class="address-span imoveis-type"><?php if( $imovelrua ): ?> <?php the_field('endereco_rua'); ?> - <?php endif; ?><?php the_field('bairro'); ?> - <?php the_field('cidade'); ?></span>
                </div>
                <div class="price-tag">
                  <span class="imoveis-type price"><?php the_field('valor_do_imovel'); ?></span>
                </div>
                <?php if( $imovelcondominio == true ): ?>
                  <div class="microcopy-holder">
                    <span class="microcopy">Condomínio: <?php echo $imovelcondominio ?></span>
                  </div>
                <?php endif; ?>
                <?php if( $imovelcondominio == false ): ?>
                  <div class="microcopy-holder">
                    <span class="microcopy">Sem Condomínio</span>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>

        <?php
        endwhile;
        wp_reset_postdata();
        ?>

        </div>

        </div>
      </div>

      <!-- Cards Section - Alugar -->

      <div class="card-section">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="section-title-block">
                <h2>Alugar</h2>
                <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/alugar" class="btn neutral-btn float-right">Ver Mais</a>
              </div>
            </div>
          </div>
          <?php
             // Query Imóveis Novos
             $aluguelimoveis_query = new WP_Query( array(
                'post_type' => 'imovel',
                'category_name' => 'aluguel',
                'posts_per_page' => 3,
             ));
          ?>

        <div class="row">

          <?php while ($aluguelimoveis_query -> have_posts()) : $aluguelimoveis_query -> the_post();

           $imovelgallery = get_field('fotos_do_imovel');
           $imovelcondominio = get_field('condominio');
           $imovelrua = get_field('endereco_rua');

          ?>

          <!-- Imoveis Cards -->

          <div class="col-md-4">
            <div class="object-card-holder">
              <a href="<?php the_permalink() ?>" class="full-anchor"></a>
              <?php
               if( $imovelgallery ): ?>
                  <div class="image-holder">
                    <img src="<?php echo $imovelgallery[0] ?>" />
                  </div>
              <?php endif; ?>
              <div class="card-info">
                <h3 class="card-title-tag"><?php the_title(); ?></h3>
                <div class="location-tag">
                  <i class="icon icon-location imoveis-type"></i>
                  <span class="address-span imoveis-type"><?php if( $imovelrua ): ?> <?php the_field('endereco_rua'); ?> - <?php endif; ?><?php the_field('bairro'); ?> - <?php the_field('cidade'); ?></span>
                </div>
                <div class="price-tag">
                  <span class="imoveis-type price">R$ <?php the_field('valor_do_imovel'); ?></span>
                  <span class="imoveis-type mensalidade">Mês</span>
                </div>
                <?php if( $imovelcondominio == true ): ?>
                  <div class="microcopy-holder">
                    <span class="microcopy">Condomínio: R$ <?php echo $imovelcondominio ?></span>
                  </div>
                <?php endif; ?>
                <?php if( $imovelcondominio == false ): ?>
                  <div class="microcopy-holder">
                    <span class="microcopy">Sem Condomínio</span>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>

        <?php
        endwhile;
        wp_reset_postdata();
        ?>

        </div>

        </div>
      </div>


      <!-- Modal Menu - Imoveis -->

      <div class="modal fade" id="imoveisModalMenu" tabindex="-1" role="dialog" aria-labelledby="landingModalMenuLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content mob-menu-content">
            <div class="mob-menu-nav">
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios" class="primary-link"><i class="icon icon-arrow-left"></i>Ver Negócios</a>
            </div>
             <nav class="mob-menu-nav">
               <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/alugar" class="mob-menu-link">Imóveis Novos</a>
               <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/alugar" class="mob-menu-link">Alugar</a>
               <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/alugar" class="mob-menu-link">Comprar</a>
               <a href="<?php echo get_bloginfo( 'wpurl' );?>/contato" class="mob-menu-link">Entre em Contato</a>
               <a href="<?php echo get_bloginfo( 'wpurl' );?>/anuncie" class="btn imoveis-btn">Anuncie Aqui</a>
             </nav>
          </div>
        </div>
      </div>

      <script>
           var $ = document.querySelector.bind(document);
           var $$ = document.querySelectorAll.bind(document);
           var locate = window.location.pathname;
           function filter(){
               var filters = [ ...Object.entries($$('.active')).map((checked) => ({ name: checked[1].name, value: checked[1].value})), ...Object.entries($$('input[type="text"]')).map((input) => ({ name: input[1].name, value: input[1].value})).filter((input) => input.value !== "")];
               var newLocate = locate;
               filters.map((filter) => {
                   newLocate += filter.name + "/?=" + filter.value;
               });
               window.location.href = newLocate;
               newLocate = locate;
           }

           function onSearch(e){
                   e.preventDefault();
                   filter();
                  }
    </script>


      <!-- Load Footer -->
      <?php get_footer(); ?>
