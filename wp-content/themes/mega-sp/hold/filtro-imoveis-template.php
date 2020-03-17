<?php

/**
 * Template Name: Filtro de Imoveis (Alugar)
 */

get_header(); ?>

  <!-- Custom Nav Structure -->

  <body>

    <!-- Main Header - Mega SP -->

  <header class="custom-header">
    <div class="container">
      <div class="row align-item-center">
        <div class="col-md-1">
          <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="main-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary-imoveis.png" /></a>
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

      <!-- Imoveis Hero -->

    <div class="filter-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

            <!-- Filter Block -->

            <div class="filter-card-block">


              <div class="filter-block-content">
                <h3>Quartos</h3>
                <div class="checkbox-group">
                  <input class="imoveis-check" name="numero_de_quartos[1]" value="1" type="checkbox" <?php echo isset($_GET['numero_de_quartos']) && isset($_GET['numero_de_quartos'][1]) ? 'checked' : '' ?>>
                  <label>1 quarto</label>
                </div>
                <div class="checkbox-group">
                  <input class="imoveis-check" name="numero_de_quartos[2]" value="2" type="checkbox" <?php echo isset($_GET['numero_de_quartos']) && isset($_GET['numero_de_quartos'][2]) ? 'checked' : '' ?>>
                  <label>2 quartos</label>
                </div>
                <div class="checkbox-group">
                  <input class="imoveis-check" name="numero_de_quartos[3]" value="3" type="checkbox" <?php echo isset($_GET['numero_de_quartos']) && isset($_GET['numero_de_quartos'][3]) ? 'checked' : '' ?>>
                  <label>+3 quartos</label>
                </div>
              </div>

              <div class="filter-block-content">
                <h3>Banheiros</h3>
                <div class="checkbox-group">
                  <input class="imoveis-check" type="checkbox" name="numero_de_banheiros[1]" value="1" <?php echo isset($_GET['numero_de_banheiros']) && isset($_GET['numero_de_banheiros'][1]) ? 'checked' : '' ?>>
                  <label>1 banheiro</label>
                </div>
                <div class="checkbox-group">
                  <input class="imoveis-check" type="checkbox" name="numero_de_banheiros[2]" value="2" <?php echo isset($_GET['numero_de_banheiros']) && isset($_GET['numero_de_banheiros'][2]) ? 'checked' : '' ?>>
                  <label>+ 2 banheiros</label>
                </div>
              </div>

              <div class="filter-block-content">
                <h3>Mobília</h3>
                <div class="checkbox-group">
                  <input class="imoveis-check" type="checkbox" name="possui_mobilia" value="" <?php echo isset($_GET['possui_mobilia']) && isset($_GET['possui_mobilia']) ? 'checked' : '' ?>>
                  <label>Mobiliado</label>
                </div>
              </div>

              <div class="filter-block-content">
                <h3>Área (m²)</h3>
                <div class="filter-form-group">
                  <input class="form-control" type="text" name="imovelmin_area" value="<?php echo isset($_GET['imovelmin_area']) ? $_GET['imovelmin_area']: '' ?>" placeholder="Mínimo">
                  <input class="form-control" type="text" name="imovelmax_area" value="<?php echo isset($_GET['imovelmax_area']) ? $_GET['imovelmax_area']: '' ?>" placeholder="Máximo">
                </div>
              </div>

              <div class="filter-block-content">
                <h3>Valor (R$)</h3>
                <div class="filter-form-group">
                  <input class="form-control" type="text" name="imovelmin_valor" value="<?php echo isset($_GET['imovelmin_valor']) ? $_GET['imovelmin_valor']: '' ?>" placeholder="Mínimo">
                  <input class="form-control" type="text" name="imovelmax_valor" value="<?php echo isset($_GET['imovelmax_valor']) ? $_GET['imovelmax_valor']: '' ?>" placeholder="Máximo">
                </div>
              </div>

              <div class="action-holder">
                <button onclick="filter()" class="btn imoveis-btn">Filtrar</button>
              </div>

            </div>

          </div>
          <div class="col-md-8">

            <!-- Tab Navigation -->

            <div class="tab-navigation type-filter">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <!-- Form Trigger -->
                <li class="nav-item">
                  <a class="custom-pill imoveis-pill" href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/comprar">Comprar</a>
                </li>
                <!-- WhatsApp Trigger -->
                <li class="nav-item">
                  <a class="custom-pill imoveis-pill active" href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/alugar">Alugar</a>
                </li>
                <!-- Phone Trigger -->
                <li class="nav-item">
                  <a class="custom-pill imoveis-pill" href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/imoveis-novos">Imóveis Novos</a>
                </li>
              </ul>
            </div>

              <!-- Card Holder -->

              <div class="container-fluid">
                <?php

                $meta_query = [];

                //Numero de Quartos
                if(isset($_GET['numero_de_quartos'])){
                    $numero_de_quartos = $_GET['numero_de_quartos'];
                    if($numero_de_quartos[1] == 1){
                        array_push($meta_query, [
                            'key' => 'numero_de_quartos',
                            'value' => '1'
                        ]);
                    }
                    if($numero_de_quartos[2] == 2){
                        array_push($meta_query, [
                            'key' => 'numero_de_quartos',
                            'value' => '2'
                        ]);
                    }
                    if($numero_de_quartos[3] >= 3){
                        array_push($meta_query, [
                            'key' => 'numero_de_quartos',
                            'value' => '3',
                            'compare' => '>='
                        ]);
                    }
                  }

                  //Numero de Banheiros
                  if(isset($_GET['numero_de_banheiros'])){
                      $numero_de_banheiros = $_GET['numero_de_banheiros'];
                      if($numero_de_banheiros[1] == 1){
                          array_push($meta_query, [
                              'key' => 'numero_de_banheiros',
                              'value' => '1'
                          ]);
                      }
                      if($numero_de_banheiros[2] >= 2){
                          array_push($meta_query, [
                              'key' => 'numero_de_banheiros',
                              'value' => '2',
                              'compare' => '>='
                          ]);
                      }
                    }

                    //Mobília
                    if(isset($_GET['possui_mobilia'])){
                            array_push($meta_query, [
                                'key' => 'possui_mobilia',
                                'value' => true
                            ]);
                      }

                      //Area
                      if(isset($_GET['imovelmin_area'])){
                        $min_area = $_GET['imovelmin_area'];
                        array_push($meta_query, [
                            'key' => 'dimensoes',
                            'value' => $min_area,
                            'compare' => '>=',
                            'type' => 'NUMERIC'
                        ]);
                    }
                    if(isset($_GET['imovelmax_area'])){
                        $max_area = $_GET['imovelmax_area'];
                        array_push($meta_query, [
                            'key' => 'dimensoes',
                            'value' => $max_area,
                            'compare' => '<=',
                            'type' => 'NUMERIC'
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
                   $aluguelimoveis_query = new WP_Query( array(
                      'post_type' => 'imovel',
                      'category_name' => 'aluguel',
                      'meta_query' => $meta_query
                   ));
                ?>

              <div class="row">

                <?php

                while ($aluguelimoveis_query -> have_posts()) : $aluguelimoveis_query -> the_post();

                 $imovelgallery = get_field('fotos_do_imovel');
                 $imovelcondominio = get_field('condominio');
                 $imovelrua = get_field('endereco_rua');


                ?>

                <!-- Imoveis Cards -->

                <div class="col-md-6">
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
