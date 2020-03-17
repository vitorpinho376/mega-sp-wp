<?php
/**
 * Template Name: Filtro de Negocios (Passo o Ponto)
 */
get_header(); ?>

  <!-- Custom Nav Structure -->

  <body>

    <!-- Main Header - Mega SP -->

  <header class="custom-header desk">
    <div class="container">
      <div class="row align-item-center">
        <div class="col-md-1">
          <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios" class="main-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary-negocios.png" /></a>
        </div>
        <div class="col-md-11">
          <div class="header-action-holder">
            <form class="form-search-holder" action="" onsubmit="onSearch(event)" method="get">
              <input type="text" class="form-control" name="q" placeholder="Busque por endereço ou código…" value="<?php echo isset($_GET['q']) ? $_GET['q']: '' ?>" />
            </form>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/anuncie" class="btn neutral-btn">Anuncie Aqui</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Mobile Menu - Filter Type -->

  <header class="main-header mob">
    <div class="container-fluid">
      <div class="row align-item-center">
        <div class="col">
          <div class="brand-holder-mob">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios" class="main-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary-negocios.png" /></a>
          </div>
        </div>
        <div class="col">
          <div class="float-right">
            <a href="#" class="btn neutral-btn mob-menu" data-toggle="modal" data-target="#mobFilterModal"><i class="icon icon-menu"></i></a>
          </div>
        </div>
      </div>
    </div>
  </header>

      <!-- Imoveis Hero -->

    <div class="filter-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 desk">

            <!-- Filter Block -->

            <div class="filter-card-block">

              <div class="filter-block-content">
                <h3>Valor (R$)</h3>
                <div class="filter-form-group">
                  <input class="form-control" type="text" placeholder="Mínimo" name="negociomin_price" value="<?php echo isset($_GET['negociomin_price']) ? $_GET['negociomin_price']: '' ?>">
                  <input class="form-control" type="text" placeholder="Máximo" name="negociomax_price" value="<?php echo isset($_GET['negociomax_price']) ? $_GET['negociomax_price']: '' ?>">
                </div>
              </div>

              <div class="filter-block-content">
                <h3>Faturamento (R$)</h3>
                <div class="filter-form-group">
                  <input class="form-control" type="text" placeholder="Mínimo" name="negociomin_fat" value="<?php echo isset($_GET['negociomin_fat']) ? $_GET['negociomin_fat']: '' ?>">
                  <input class="form-control" type="text" placeholder="Máximo" name="negociomax_fat" value="<?php echo isset($_GET['negociomax_fat']) ? $_GET['negociomax_fat']: '' ?>">
                </div>
              </div>

              <div class="filter-block-content">
                <h3>Funcionários</h3>
                <div class="checkbox-group">
                  <input class="negocios-check" type="checkbox" name="funcionarios" value="" <?php echo isset($_GET['funcionarios']) && isset($_GET['funcionarios']) ? 'checked' : '' ?>>
                  <label>Possui Funcionários</label>
                </div>
              </div>

              <div class="action-holder">
                <button onclick="filter()" class="btn negocios-btn">Filtrar</button>
              </div>

            </div>

          </div>
          <div class="col-md-8 col-sm-12">

            <!-- Tab Navigation -->

            <div class="tab-navigation type-filter">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <!-- Form Trigger -->
                <li class="nav-item">
                  <a class="custom-pill negocios-pill" href="<?php echo get_bloginfo( 'wpurl' );?>/negocios/em-operacao">Em Operação</a>
                </li>
                <!-- WhatsApp Trigger -->
                <li class="nav-item">
                  <a class="custom-pill negocios-pill active" href="<?php echo get_bloginfo( 'wpurl' );?>/negocios/passo-o-ponto">Passo o Ponto</a>
                </li>
                <!-- Phone Trigger -->
                <li class="nav-item">
                  <a class="custom-pill negocios-pill" href="<?php echo get_bloginfo( 'wpurl' );?>/negocios/franquias">Franquias</a>
                </li>
              </ul>
            </div>

              <!-- Card Holder -->

              <div class="container-fluid">

                <?php

                $meta_query = [];

                //Valor
                if(isset($_GET['negociomin_price'])){
                  $min_price = $_GET['negociomin_price'];
                  array_push($meta_query, [
                      'key' => 'preco_do_negocio',
                      'value' => $min_price,
                      'compare' => '>=',
                      'type' => 'NUMERIC'
                  ]);
              }
              if(isset($_GET['negociomax_price'])){
                  $max_price = $_GET['negociomax_price'];
                  array_push($meta_query, [
                      'key' => 'preco_do_negocio',
                      'value' => $max_price,
                      'compare' => '<=',
                      'type' => 'NUMERIC'
                  ]);
              }

              //Faturamento
              if(isset($_GET['negociomin_fat'])){
                $min_fat = $_GET['negociomin_fat'];
                array_push($meta_query, [
                    'key' => 'valor_do_faturamento',
                    'value' => $min_fat,
                    'compare' => '>=',
                    'type' => 'NUMERIC'
                ]);
            }
            if(isset($_GET['negociomax_fat'])){
                $max_fat = $_GET['negociomax_fat'];
                array_push($meta_query, [
                    'key' => 'valor_do_faturamento',
                    'value' => $max_fat,
                    'compare' => '<=',
                    'type' => 'NUMERIC'
                ]);
            }


                //Funcionários
                if(isset($_GET['funcionarios'])){
                        array_push($meta_query, [
                            'key' => 'funcionarios',
                            'value' => true
                        ]);
                  }


                    // Query Search

                    if(isset($_GET['q'])){
                      $q = $_GET['q'];
                      array_push(
                          $meta_query,
                          array(
              			    'relation' => 'OR',
                              array(
                                  'key'     => 'endereco_rua',
                                  'value'   => $q,
                                  'compare' => 'LIKE',
                              ),
                              array(
                                  'key'     => 'bairro',
                                  'value'   => $q,
                                  'compare' => 'LIKE',
                              ),
                              array(
                                  'key'     => 'cidade',
                                  'value'   => $q,
                                  'compare' => 'LIKE',
                              ),
              		    )
                      );
                  }

                   // Query Imóveis Novos
                   $passopnegocios_query = new WP_Query( array(
                      'post_type' => 'negocio',
                      'category_name' => 'passo-op',
                      'meta_query' => $meta_query
                   ));
                ?>



                <div class="row">

                  <?php

                  if ($passopnegocios_query -> have_posts() ) :
                  while ($passopnegocios_query -> have_posts()) : $passopnegocios_query -> the_post();

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
                  $negociocprofit = get_field('lucratividade');
                  $negociodescricao = get_field('sobre_o_negocio');
                  $negocioobs = get_field('obs_info');
                  $negociocondic = get_field('condicoes_de_pagamento');

                  ?>

                  <!-- Negócio Cards -->

                  <div class="col-md-6">
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
                <?php
                else : ?>
                <div class="no-results-holder">
                    <span class="icon icon-error"></span>
                    <h3>Negócios não encontrados</h3>
                    <p>Não conseguimos encontrar nenhum negócio com essas especificações. Limpe o seu filtro e comece novamente.</p>
                    <a href="<?php echo get_bloginfo( 'wpurl' );?>/negocios/passo-o-ponto" class="btn neutral-btn">Limpar Filtro</a>
                  </div>
                    <?php
                endif; ?>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Contato Lightbox -->

      <div class="modal fade" id="mobFilterModal" tabindex="-1" role="dialog" aria-labelledby="mobFilterModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Filtre Negócios</h4>
              <a href="#" class="neutral-link close" data-dismiss="modal" aria-label="Close">Fechar <i class="icon icon-close"></i></a>
            </div>
            <div class="modal-body">

                  <!-- Filter Card -->

                  <div class="filter-card-block">

                    <form class="form-search-holder" action="" onsubmit="onSearch(event)" method="get">
                      <input type="text" class="form-control" name="q" placeholder="Busque por endereço ou código…" value="<?php echo isset($_GET['q']) ? $_GET['q']: '' ?>" />
                    </form>

                    <div class="filter-block-content">
                      <h3>Valor (R$)</h3>
                      <div class="filter-form-group">
                        <input class="form-control" type="text" placeholder="Mínimo" name="negociomin_price" value="<?php echo isset($_GET['negociomin_price']) ? $_GET['negociomin_price']: '' ?>">
                        <input class="form-control" type="text" placeholder="Máximo" name="negociomax_price" value="<?php echo isset($_GET['negociomax_price']) ? $_GET['negociomax_price']: '' ?>">
                      </div>
                    </div>

                    <div class="filter-block-content">
                      <h3>Faturamento (R$)</h3>
                      <div class="filter-form-group">
                        <input class="form-control" type="text" placeholder="Mínimo" name="negociomin_fat" value="<?php echo isset($_GET['negociomin_fat']) ? $_GET['negociomin_fat']: '' ?>">
                        <input class="form-control" type="text" placeholder="Máximo" name="negociomax_fat" value="<?php echo isset($_GET['negociomax_fat']) ? $_GET['negociomax_fat']: '' ?>">
                      </div>
                    </div>

                    <div class="filter-block-content">
                      <h3>Funcionários</h3>
                      <div class="checkbox-group">
                        <input class="negocios-check" type="checkbox" name="funcionarios" value="" <?php echo isset($_GET['funcionarios']) && isset($_GET['funcionarios']) ? 'checked' : '' ?>>
                        <label>Possui Funcionários</label>
                      </div>
                    </div>

                    <div class="action-holder">
                      <button onclick="filter()" class="btn negocios-btn">Filtrar</button>
                    </div>

                  </div>


            </div>
          </div>
        </div>
      </div>


    <script>
         var $ = document.querySelector.bind(document);
         var $$ = document.querySelectorAll.bind(document);
         var locate = window.location.pathname + "?";
         function filter(){
             var filters = [ ...Object.entries($$('input:checked')).map((checked) => ({ name: checked[1].name, value: checked[1].value})), ...Object.entries($$('input[type="text"]')).map((input) => ({ name: input[1].name, value: input[1].value})).filter((input) => input.value !== "")];
             var newLocate = locate;
             filters.map((filter) => {
                 newLocate += "&" + filter.name + "=" + filter.value;
             });
             window.location.href = newLocate;
             newLocate = locate
         }

         function onSearch(e){
                 e.preventDefault();
                 filter();
                }
    </script>

    <!-- Load Footer -->
    <?php get_footer(); ?>
