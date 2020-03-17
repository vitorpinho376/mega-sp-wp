<?php

get_header();
the_post();


// vars

$imovelgallery = get_field('fotos_do_imovel');
$imovelrua = get_field('endereco_rua');
$imoveltype = get_field('venda_ou_aluguel');
$imovelmobilia = get_field('possui_mobilia');
$imovelcontract = get_field('tipo_de_contrato');
$imovelsobre = get_field('sobre_o_imovel');

$imovelvalue = get_field('valor_do_imovel');
$imoveltotal = get_field('imovel_total');

$imovelcond = get_field('condominio');
$imoveliptu = get_field('iptu');
$imoveltx = get_field('outras_taxas');

?>

  <!-- Custom Nav Structure -->

  <body class="page-bg">

      <!-- Main Header - Mega SP -->

    <header class="custom-header desk">
      <div class="container">
        <div class="row align-item-center">
          <div class="col-md-1">
            <a href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis" class="main-logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/msp-primary-imoveis.png" /></a>
          </div>
          <div class="col-md-11">
            <div class="header-action-holder">
              <form class="form-search-holder" action="<?php echo get_bloginfo( 'wpurl' );?>/alugar" onsubmit="onSearch(event)" method="get">
                <input type="text" class="form-control" name="q" placeholder="Busque por endereço ou código…" value="<?php echo isset($_GET['q']) ? $_GET['q']: '' ?>" />
              </form>
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
              <a href="#" class="btn neutral-btn mob-menu" data-toggle="modal" data-target="#imovelModalMenu"><i class="icon icon-menu"></i></a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Page Section - Imóvel -->

    <div class="page-section page-imovel">
      <div class="container">
        <div class="row desk">
          <div class="col-md-12">

            <!-- breadcrumb -->

              <nav class="breadcrumb-holder">
                <a class="breadcrumb-normal" href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis">Imóveis</a>
                <span class="bc-arrow icon icon-arrow-right"></span>
                <?php if( $imoveltype == 'aluguel' ): ?>
                   <a class="breadcrumb-normal" href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/alugar">Alugar</a>
                <?php endif; ?>
                <?php if( $imoveltype == 'venda' ): ?>
                   <a class="breadcrumb-normal" href="<?php echo get_bloginfo( 'wpurl' );?>/imoveis/comprar">Comprar</a>
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
               if( $imovelgallery ): ?>

               <div class="photo-holder-carousel">

                 <div class="photo-container">

                    <?php foreach( $imovelgallery as $imovelgallery ): ?>

                   <!-- Photo Card -->

                   <div class="photo-view-object">
                     <div class="photo-image-holder">
                       <img src="<?php echo $imovelgallery ?>" />
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
                       <div class="location-tag">
                         <i class="icon icon-location imoveis-type"></i>
                         <span class="address-span imoveis-type"><?php if( $imovelrua ): ?> <?php the_field('endereco_rua'); ?> - <?php endif; ?><?php the_field('bairro'); ?> - <?php the_field('cidade'); ?></span>
                       </div>
                     </div>

                     <div class="topic-block-holder">
                       <div class="topic-block">
                         <span class="icon icon-dimensions imoveis-type"></span>
                         <span class="topic-type"><?php the_field('dimensoes'); ?> m²</span>
                       </div>
                       <div class="topic-block">
                         <span class="icon icon-bedroom imoveis-type"></span>
                         <span class="topic-type"><?php the_field('numero_de_quartos'); ?> Quarto(s)</span>
                       </div>
                       <div class="topic-block">
                         <span class="icon icon-bathroom imoveis-type"></span>
                         <span class="topic-type"><?php the_field('numero_de_banheiros'); ?> Banheiro(s)</span>
                       </div>

                       <?php if( $imovelmobilia == true ): ?>

                         <div class="topic-block">
                           <span class="icon icon-mobilia imoveis-type"></span>
                           <span class="topic-type">Mobiliado</span>
                         </div>

                       <?php endif; ?>

                       <?php if( $imovelmobilia == false ): ?>

                         <div class="topic-block">
                           <span class="icon icon-mobilia neutral"></span>
                           <span class="topic-type">Sem Mobília</span>
                         </div>

                       <?php endif; ?>

                     </div>

                     <div class="object-info-holder">
                       <?php if( $imovelsobre ): ?>
                        <h2 class="neutral-content-title">Sobre o imóvel</h2>
                        <p class="neutral-content-p"><?php the_field('sobre_o_imovel'); ?></p>
                       <?php endif; ?>
                       <span class="reference">ref.: <?php the_field('referencia'); ?></span>
                     </div>


                     <?php if( $imovelcontract ): ?>

                     <div class="object-info-holder">
                       <h2 class="neutral-content-title">Tipo de Contrato</h2>
                       <p class="neutral-content-p"><?php echo $imovelcontract; ?></p>
                     </div>

                     <?php endif; ?>

                   </div>

                   <!-- Second Col -->

                   <div class="col-md-4 divine">

                     <!-- Contact Card -->

                     <div class="contact-card">
                       <?php if( $imoveltype == 'aluguel' ): ?>
                         <div class="contact-card-row">
                           <span class="card-normal-span">Aluguel</span>
                               <span class="card-featured-span imoveis-type float-right"><?php the_field('valor_do_imovel'); ?></span>
                         </div>
                      <?php endif; ?>
                       <?php if( $imoveltype == 'venda' ): ?>
                         <div class="contact-card-row">
                           <span class="card-normal-span">Valor do Imóvel</span>
                           <span class="card-featured-span imoveis-type float-right"><?php the_field('valor_do_imovel'); ?></span>
                         </div>
                       <?php endif; ?>

                       <?php if( $imovelcond ): ?>
                       <div class="contact-card-row">
                         <span class="card-normal-span">Condomínio</span>
                         <span class="card-normal-span float-right"><?php the_field('condominio'); ?></span>
                       </div>
                        <?php endif; ?>
                         <?php if( $imoveliptu ): ?>
                       <div class="contact-card-row">
                         <span class="card-normal-span">IPTU</span>
                         <span class="card-normal-span float-right"><?php the_field('iptu'); ?></span>
                       </div>
                       <?php endif; ?>
                       <?php if( $imoveltax ): ?>
                       <div class="contact-card-row">
                         <span class="card-normal-span">Outras Taxas</span>
                         <span class="card-normal-span float-right"><?php the_field('outras_taxas'); ?></span>
                       </div>
                       <?php endif; ?>
                       <div class="action-holder">
                         <a href="#" class="btn imoveis-btn" data-toggle="modal" data-target="#contactModal">Tenho Interesse</a>
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

    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
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
                  <a class="custom-pill imoveis-pill active" id="pills-email" data-toggle="pill" href="#mail-section" role="tab" aria-controls="pills-home" aria-selected="true">E-mail</a>
                </li>
                <!-- WhatsApp Trigger -->
                <li class="nav-item">
                  <a class="custom-pill imoveis-pill" id="pills-whatsapp" data-toggle="pill" href="#whatsapp-section" role="tab" aria-controls="pills-profile" aria-selected="false">WhatsApp</a>
                </li>
                <!-- Phone Trigger -->
                <li class="nav-item">
                  <a class="custom-pill imoveis-pill" id="pills-phone" data-toggle="pill" href="#phone-section" role="tab" aria-controls="pills-contact" aria-selected="false">Telefone</a>
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
                    <?php echo do_shortcode('[contact-form-7 id="199" title="Request - Imóveis"]'); ?>
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
                     <a href="<?php the_field('whatsapp', 'option'); ?>" target="_blank" class="btn whatsapp-btn"><?php the_field('Celular', 'option'); ?></a>
                   </div>
                 </div>
              </div>

              <!-- Phone Section -->

              <div class="tab-pane fade" id="phone-section" role="tabpanel" aria-labelledby="pills-phone">
                <div class="neutral-holder">
                  <div class="featured-content">
                    <span class="icon icon-phone imoveis-type"></span>
                    <h4 class="modal-title">Entre em contato via Telefone</h4>
                    <div class="page-info">
                      <h5 class="main-page-title"><?php the_title(); ?></h5>
                      <span class="reference">ref.: <?php the_field('referencia'); ?></span>
                  </div>
                    <a href="tel:551124560002" class="btn neutral-btn"><?php the_field('telefone_fixo', 'option'); ?></a>
                    <a href="tel:5511918290023" class="btn neutral-btn"><?php the_field('Celular', 'option'); ?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Menu - Imoveis -->

    <div class="modal fade" id="imovelModalMenu" tabindex="-1" role="dialog" aria-labelledby="imoveilModalMenu" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content mob-menu-content">
          <form class="form-search-holder" action="<?php echo get_bloginfo( 'wpurl' );?>/alugar" method="get">
            <input type="text" class="form-control" placeholder="<?php echo esc_attr_x( 'Busque por endereço ou código…', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
          </form>
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



    <!-- Load Footer -->
    <?php get_footer(); ?>
