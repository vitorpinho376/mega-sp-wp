<?php

get_header();
the_post();


// vars

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

  <!-- Custom Nav Structure -->

  <body class="page-bg">

      <!-- Main Header - Mega SP -->

    <header class="custom-header">
      <div class="container">
        <div class="row align-item-center">
          <div class="col-md-1">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>" class="main-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary-negocios.png" /></a>
          </div>
          <div class="col-md-11">
            <div class="header-action-holder">
              <form class="form-search-holder" action="<?php echo get_bloginfo( 'wpurl' );?>/alugar" method="get">
                <input type="text" class="form-control" placeholder="<?php echo esc_attr_x( 'Busque por endereço ou código…', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
              </form>
              <a href="<?php echo get_bloginfo( 'wpurl' );?>/anuncie" class="btn neutral-btn">Anuncie Aqui</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Page Section - Imóvel -->

    <div class="page-section page-imovel">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <!-- breadcrumb -->

              <nav class="breadcrumb-holder">
                <a class="breadcrumb-normal" href="#">Negócios</a>
                <span class="bc-arrow icon icon-arrow-right"></span>
                <?php if( $negociotype == 'em operacao' ): ?>
                <a class="breadcrumb-normal" href="<?php echo get_bloginfo( 'wpurl' );?>/negocios/em-operacao">Em operação</a>
                <?php endif; ?>
                <?php if( $negociotype == 'passo o ponto' ): ?>
                <a class="breadcrumb-normal" href="<?php echo get_bloginfo( 'wpurl' );?>/negocios/passo-o-ponto">Passo o Ponto</a>
                <?php endif; ?>
                <?php if( $negociotype == 'franquia' ): ?>
                <a class="breadcrumb-normal" href="<?php echo get_bloginfo( 'wpurl' );?>/negocios/franquias">Franquias</a>
                <?php endif; ?>
                <span class="bc-arrow icon icon-arrow-right"></span>
                <a class="breadcrumb-normal active" href="#"><?php the_title(); ?></a>
              </nav>

          </div>
        </div>

        <div class="row">
          <div class="col-md-12">

            <!-- Imóvel Page Content -->

            <div class="page-content">

              <!-- Photo Carousel -->

              <?php
               if( $negociogallery ): ?>

               <div class="photo-holder-carousel">

                 <div class="photo-container">

                    <?php foreach( $negociogallery as $negociogallery ): ?>

                   <!-- Photo Card -->

                   <div class="photo-view-object">
                     <div class="photo-image-holder">
                       <img src="<?php echo $negociogallery ?>" />
                     </div>
                   </div>

                   <?php endforeach; ?>

                 </div>

               </div>

               <?php endif; ?>

               <div class="container">
                 <div class="row">
                   <!-- First Col -->
                   <div class="col-md-8">

                     <!-- Imóvel Content -->

                     <div class="page-content-info">
                       <h1 class="main-page-title"><?php the_title(); ?></h1>
                       <?php if( $negocioempresa ): ?>
                           <div class="business-tag">
                             <i class="icon icon-business negocios-type"></i>
                             <span class="business-type"><?php echo $negocioempresa ?></span>
                           </div>
                       <?php endif; ?>
                       <div class="location-tag">
                         <i class="icon icon-location negocios-type"></i>
                         <span class="address-span negocios-type"><?php if( $negociorua ): ?> <?php the_field('endereco_rua'); ?> - <?php endif; ?><?php the_field('bairro'); ?> - <?php the_field('cidade'); ?></span>
                       </div>
                     </div>

                     <div class="topic-block-holder">
                       <?php if( $negociobirth ): ?>
                       <div class="topic-block">
                         <span class="icon icon-inauguracao negocios-type"></span>
                         <span class="topic-type">Criada em <?php the_field('criada_em'); ?></span>
                       </div>
                       <?php endif; ?>
                       <?php if( $negociofunc ): ?>
                         <div class="topic-block">
                           <span class="icon icon-funcionarios negocios-type"></span>
                           <span class="topic-type"><?php the_field('funcionarios'); ?> Funcionários</span>
                         </div>
                       <?php endif; ?>
                       <?php if( $negociofat == 'sob consulta' ): ?>
                           <div class="topic-block">
                             <span class="icon icon-faturamento neutral"></span>
                             <span class="topic-type">Faturamento sob consulta</span>
                           </div>
                        <?php endif; ?>
                        <?php if( $negociofat == 'com faturamento' ): ?>
                            <div class="topic-block">
                              <span class="icon icon-faturamento negocios-type"></span>
                              <span class="topic-type"><?php the_field('valor_do_faturamento'); ?></span>
                            </div>
                         <?php endif; ?>
                        <?php if( $negocioprofit ): ?>
                         <div class="topic-block">
                           <span class="icon icon-dividas negocios-type"></span>
                           <span class="topic-type"><?php echo $negocioprofit ?></span>
                         </div>
                       <?php endif; ?>
                     </div>

                     <div class="object-info-holder">
                       <?php if( $negociodescricao ): ?>
                         <h2 class="neutral-content-title">Sobre o Negócio</h2>
                         <p class="neutral-content-p"><?php the_field('sobre_o_negocio'); ?></p>
                       <?php endif; ?>
                       <span class="reference">ref.: <?php the_field('referencia'); ?></span>
                     </div>

                     <?php if( $negocioobs ): ?>

                     <div class="object-info-holder">
                       <h2 class="neutral-content-title">Observações</h2>
                       <p class="neutral-content-p"><?php the_field('obs_info'); ?></p>
                     </div>

                     <?php endif; ?>

                     <?php if( $negociocondic ): ?>

                     <div class="object-info-holder">
                       <h2 class="neutral-content-title">Condições de Pagamento</h2>
                       <p class="neutral-content-p"><?php the_field('condicoes_de_pagamento'); ?></p>
                     </div>

                     <?php endif; ?>

                   </div>

                   <!-- Second Col -->

                   <div class="col-md-4 divine">

                     <!-- Contact Card -->

                     <div class="contact-card">
                       <div class="contact-card-row">
                         <span class="card-normal-span">Preço</span>
                         <span class="card-featured-span negocios-type float-right"><?php the_field('preco_do_negocio'); ?></span>
                       </div>
                       <?php if( $negociofat == 'sob consulta' ): ?>
                         <div class="contact-card-row">
                           <span class="card-normal-span">Faturamento</span>
                           <span class="card-normal-span float-right">Sob Consulta</span>
                         </div>
                       <?php endif; ?>
                       <?php if( $negociofat == 'com faturamento' ): ?>
                         <div class="contact-card-row">
                           <span class="card-normal-span">Faturamento</span>
                           <span class="card-normal-span float-right"><?php echo $negociofatvalue ?></span>
                         </div>
                       <?php endif; ?>
                       <?php if( $negocioprofit ): ?>
                         <div class="contact-card-row">
                           <span class="card-normal-span">Lucratividade</span>
                           <span class="card-normal-span float-right"><?php echo $negocioprofit ?></span>
                         </div>
                      <?php endif; ?>
                       <?php if( $negociofolha ): ?>
                         <div class="contact-card-row">
                           <span class="card-normal-span">Folha de Pagamento</span>
                           <span class="card-normal-span float-right"><?php echo $negociofolha ?></span>
                         </div>
                       <?php endif; ?>
                       <div class="action-holder">
                         <a href="#" class="btn negocios-btn" data-toggle="modal" data-target="#contactModalNegocios">Tenho Interesse</a>
                       </div>
                     </div>
                   </div>


                 </div>
               </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Contato Lightbox -->

    <div class="modal fade" id="contactModalNegocios" tabindex="-1" role="dialog" aria-labelledby="contactModalNegociosLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Entre em Contato</h4>
            <a href="#" class="neutral-link close" data-dismiss="modal" aria-label="Close">Fechar <i class="icon icon-close"></i></a>
          </div>
          <div class="modal-body">

                <!-- Tab Navigation -->

            <div class="tab-navigation">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <!-- Form Trigger -->
                <li class="nav-item">
                  <a class="custom-pill negocios-pill active" id="pills-email" data-toggle="pill" href="#mail-section" role="tab" aria-controls="pills-home" aria-selected="true">E-mail</a>
                </li>
                <!-- WhatsApp Trigger -->
                <li class="nav-item">
                  <a class="custom-pill negocios-pill" id="pills-whatsapp" data-toggle="pill" href="#whatsapp-section" role="tab" aria-controls="pills-profile" aria-selected="false">WhatsApp</a>
                </li>
                <!-- Phone Trigger -->
                <li class="nav-item">
                  <a class="custom-pill negocios-pill" id="pills-phone" data-toggle="pill" href="#phone-section" role="tab" aria-controls="pills-contact" aria-selected="false">Telefone</a>
                </li>
              </ul>
            </div>


            <!-- Tab Content -->

            <div class="tab-content" id="pills-tabContent">

              <!-- Mail Section -->

              <div class="tab-pane fade show active" id="mail-section" role="tabpanel" aria-labelledby="pills-email">
                  <span class="microcopy">Preencha o formulário abaixo ou navegue pelas opções de contato acima.</span>

                   <!-- Form Holder -->

                  <div class="form-holder">
                    <?php echo do_shortcode('[contact-form-7 id="201" title="Request - Negócios"]'); ?>
                  </div>
              </div>

              <!-- WhatsApp Section -->

              <div class="tab-pane fade" id="whatsapp-section" role="tabpanel" aria-labelledby="pills-whatsapp">
                 <div class="neutral-holder">
                   <div class="featured-content">
                     <img src="<?php echo get_bloginfo('template_directory'); ?>/img/whatsapp-img.png" />
                     <h4 class="modal-title">Entre em contato via WhatsApp</h4>
                     <div class="page-info">
                       <h5 class="main-page-title"><?php the_title(); ?></h5>
                       <span class="reference">ref.: <?php the_field('referencia'); ?></span>
                   </div>
                   <a href="https://wa.me/+5511918290023" target="_blank" class="btn whatsapp-btn">+55 11 91829-0023</a>
                 </div>
              </div>
            </div>

              <!-- Phone Section -->

              <div class="tab-pane fade" id="phone-section" role="tabpanel" aria-labelledby="pills-phone">
                <div class="neutral-holder">
                  <div class="featured-content">
                    <span class="icon icon-phone negocios-type"></span>
                    <h4 class="modal-title">Entre em contato via Telefone</h4>
                    <div class="page-info">
                      <h5 class="main-page-title"><?php the_title(); ?></h5>
                      <span class="reference">ref.: <?php the_field('referencia'); ?></span>
                  </div>
                    <a href="tel:551124560002" class="btn neutral-btn">+55 11 2456-0002</a>
                    <a href="tel:5511918290023" class="btn neutral-btn">+55 11 91829-0023</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Load Footer -->
    <?php get_footer(); ?>
