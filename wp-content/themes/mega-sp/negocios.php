<?php
/**
 * Template Name: Lista de Negocios
 */
get_header(); ?>

  <!-- Custom Nav Structure -->

  <body>

    <style>
    .section-hero.negocios-hero { background: url(<?php the_field('imagem_de_background'); ?>) no-repeat; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; }
    .section-hero.negocios-hero::after { content: ''; position: absolute; top: 0; right: 0; bottom: 0; left: 0; width: 100%; background: rgba(44,110,225,0.8);  }
    </style>

      <!-- Main Header - Mega SP -->

    <header class="neutral-header desk">
      <div class="container">
        <div class="row align-item-center">
          <div class="col">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="white-link"><i class="icon icon-arrow-left"></i> Ver Imóveis</a>
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
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="main-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary-negocios.png" /></a>
            </div>
          </div>
          <div class="col">
            <div class="float-right">
              <a href="#" class="btn neutral-btn mob-menu" data-toggle="modal" data-target="#negociosModalMenu"><i class="icon icon-menu"></i></a>
            </div>
          </div>
        </div>
      </div>
    </header>

      <!-- Imoveis Hero -->

    <div class="section-hero negocios-hero">
      <div class="container">
        <div class="row">
          <div class="col">

            <!-- Hero Section -->

            <div class="section-hero-grid">
              <div class="section-hero-content">
                <img class="section-logo desk" src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-negocios-white.png" />
                <h1 class="heading-white"><?php the_field('negocios_slogan_heading'); ?></h1>
                <p class="main-p-white"><?php the_field('negocios_slogan_tagline'); ?></p>
              </div>
            </div>

            <!--  Filter Holder -->

            <div class="filter-holder negocios-filter">

              <!--  Span Tag -->

               <div class="span-tag">
                 <h2>O que você procura?</h2>
               </div>

               <!--  Form -->

               <form class="search-form negocios" action="" onsubmit="onSearch(event)" method="get">

                  <!--  Pill Nav -->

               <div class="nav-pill-holder nav nav-pills" role="tablist">
                 <label>Tipo de Negócios</label>
                 <a href="#" name="em-operacao" data-toggle="pill" role="tab" aria-controls="pills-op" aria-selected="true" class="custom-pill negocios-pill active">Comércios</a>
                   <!-- Hide Other Sections
                 <a href="#" name="passo-o-ponto" data-toggle="pill" role="tab" aria-controls="pills-pop" aria-selected="false" class="custom-pill negocios-pill">Passo o Ponto</a>
                 <a href="#" name="franquias" data-toggle="pill" role="tab" aria-controls="pills-fran" aria-selected="false" class="custom-pill negocios-pill">Franquias</a> -->
               </div>

               <!-- Endereço -->

                <div class="form-group">
                  <label for="bairroInput">Bairro/Cidade</label>
                  <input type="text" name="q" class="form-control" placeholder="Busque por bairro ou cidade…" value="<?php echo isset($_GET['q']) ? $_GET['q']: '' ?>">
                </div>
                <div class="action-holder align-self-end">
                  <button onclick="filter()" type="submit" class="btn negocios-btn">Buscar</button>
                </div>

              </form>

            </div>

          </div>
        </div>
      </div>
    </div>

  <!-- Cards Section - Empresas em Operação -->

      <div class="card-section">
        <div class="container">
          <div class="row">
          </div>

          <?php
             // Query Imóveis Novos
             $opnegocios_query = new WP_Query( array(
                'post_type' => 'negocio',
             ));
          ?>


          <div class="row">

            <?php while ($opnegocios_query -> have_posts()) : $opnegocios_query -> the_post();

            $negocioref = get_field('referencia');
            $negociogallery = get_field('fotos_do_negocio');
            $negocioempresa = get_field('nome_da_empresa');
            $negociorua = get_field('endereco_rua');
            $negociobairro = get_field('bairro');
            $negociocidade = get_field('cidade');
            $negociotype = get_field('tipo_do_negocio');
            $negocioprice = get_field('preco_do_negocio');
            $negociofat = get_field('faturamento');
            $negociofatvalue = get_field('valor_do_faturamento');
            $negociobirth = get_field('criada_em');
            $negociofunc = get_field('funcionarios');
            $negociofolha = get_field('folha_de_pagamento');
            $negocioprofit = get_field('lucratividade');
            $negociodescricao = get_field('sobre_o_negocio');
            $negocioobs = get_field('obs_info');
            $negociocondic = get_field('condicoes_de_pagamento');

            ?>

            <!-- Negócio Cards -->

            <div class="col-md-4">
              <div class="object-card-holder">
                <a href="<?php the_permalink() ?>" class="full-anchor"></a>
                <?php
                 if( $negociogallery ): ?>
                    <div class="image-holder">
                      <img src="<?php echo $negociogallery[0] ?>" />
                    </div>
                <?php endif; ?>
                <div class="card-info">
                  <h3 class="card-title-tag"><?php the_title(); ?></h3>
                  <div class="price-tag">
                    <span class="negocios-type price"><?php the_field('preco_do_negocio'); ?></span>
                  </div>
                  <div class="status-info">
                    <h4>Referência</h4>
                    <span><?php echo $negocioref ?></span>
                  </div>
                  <?php if( $negociofat == 'sob consulta' ): ?>
                    <div class="status-info">
                      <h4>Faturamento</h4>
                      <span>Sob Consulta</span>
                    </div>
                  <?php endif; ?>
                  <?php if( $negociofat == 'com faturamento' ): ?>
                    <div class="status-info">
                      <h4>Faturamento</h4>
                      <span><?php echo $negociofatvalue ?></span>
                    </div>
                  <?php endif; ?>
                  <?php if( $negocioprofit ): ?>
                    <div class="status-info">
                      <h4>Lucratividade</h4>
                      <span><?php echo $negocioprofit ?></span>
                    </div>
                  <?php endif; ?>
                  <div class="location-tag">
                    <i class="icon icon-location negocios-type"></i>
                    <span class="address-span negocios-type"><?php if( $negociorua ): ?> <?php the_field('endereco_rua'); ?> - <?php endif; ?><?php the_field('bairro'); ?> - <?php the_field('cidade'); ?></span>
                  </div>
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

          <!-- Modal Menu - Negocios -->

          <div class="modal fade" id="negociosModalMenu" tabindex="-1" role="dialog" aria-labelledby="negociosModalMenuLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content mob-menu-content">
                <div class="mob-menu-nav">
                  <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="primary-link"><i class="icon icon-arrow-left"></i>Ver Imóveis</a>
                </div>
                 <nav class="mob-menu-nav">
                   <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios/em-operacao" class="mob-menu-link">Em Operação</a>
                   <a href="<?php echo get_bloginfo( 'wpurl' );?>/contato" class="mob-menu-link">Entre em Contato</a>
                   <a href="<?php echo get_bloginfo( 'wpurl' );?>/anuncie" class="btn negocios-btn">Anuncie Aqui</a>
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
