<div class="col-lg-12 col-md-12 col-sm-12 element pleft0 pright0 col-slider">

<?php if(!empty($banners->toArray())) : ?>
<div id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php $i = 0; foreach($banners as $b) { ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) : ?>active<?php endif; ?>"></li>
        <?php $i++; } ?>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
      <?php $i = 0; foreach($banners as $b) { ?>
        <div class="item item-slider <?php if($i == 0) : ?>active<?php endif; ?>">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url('<?php echo $this->Url->build("/uploads/" . $b->attachment); ?>');">
            <?php if(!empty($b->url)) : ?>
              <a href="<?php echo $b->url; ?>" style="position: absolute; left: 0 px; top: 0px; width:  100%; height: 100%;"></a>
            <?php endif; ?>
            </div>

            <div class="main-text hidden-xs">
              <div id="texto-banner" class="col-lg-4 col-md-6 col-sm-6 col-xl-9 center-block">
                  <h2><?php echo $b->title; ?></h2>
                  <p class="txt-slide"><?php echo $b->description; ?></p>
                  <div class="clearfix"></div>
                  <div id="icon-down" class="center-block"><a href="#ancora" class="scroll"><img src="<?php echo $this->Url->build("/img/icon-content-banner.png"); ?>" height="20" width="21"></a></div>
              </div>
            </div>

        </div> <!-- .item -->
        <?php $i++; } ?>
    </div> <!-- .carousel-inner -->

</div> <!-- #myCarousel -->
<?php else: ?>
  <div class="alert alert-danger">Não há banners para este idioma.</div>
<?php endif; ?>

  <a id="flag-br" href="<?php echo $language_urls['pt']; ?>"><img src="<?php echo $this->Url->build("/img/bandeira-br.png"); ?>" height="21" width="22"  alt="" title=""></a>
  <a id="flag-us" href="<?php echo $language_urls['en']; ?>"><img src="<?php echo $this->Url->build("/img/bandeira-usa.png"); ?>" height="21" width="22" alt="" title=""></a>
  <a id="flag-fr" href="<?php echo $language_urls['fr']; ?>"><img src="<?php echo $this->Url->build("/img/bandeira-franca.png"); ?>" height="21" width="22" alt="" title=""></a>
  <a id="flag-es" href="<?php echo $language_urls['es']; ?>"><img src="<?php echo $this->Url->build("/img/bandeira-espanha.png"); ?>" height="21" width="22" alt="" title=""></a>


  <div id="login">
   <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="<?php echo $this->Url->build("/img/icon-login.png"); ?>" rel="tooltip" data-placement="left" title="ASSINANTES"></a>
   <ul class="dropdown-menu" style="padding: 15px 0px 15px 15px;min-width: 245px;margin-left:-195px;">
      <li>
         <div class="row">
            <div class="col-md-13">


               <?php if(!$user_logged) : ?>
                <?php echo $this->Form->create($affiliateEntity); ?>
               <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="form-login">
                  <h2 class="txt-center"><?php echo __('LOGIN'); ?></h2>
                  <div class="form-group">
                     <label class="sr-only" for="exampleInputEmail2"><?php echo __('USUÁRIO'); ?></label>
                     <?php echo $this->Form->input("responsible_email", ['label' => false, 'div' => false] ); ?>
                     <input type="email" class="form-control" id="exampleInputEmail2" placeholder="<?php echo __('Endereço de E-mail'); ?>" required>
                  </div>
                  <div class="form-group">
                     <label class="sr-only" for="exampleInputPassword2"><?php echo __('SENHA'); ?></label>
                     <input type="password" class="form-control" id="exampleInputPassword2" placeholder="<?php echo __('Senha'); ?>" required>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-success btn-block btn-login"><?php echo __('ENVIAR'); ?></button>
                  </div>
                  <p id="esqueceu-senha" class="txt-center"><a href="#"><?php echo __('Esqueci minha senha'); ?></a></p>
               <?php echo $this->Form->end(); ?>
             <?php endif; ?>

               <?php if($user_logged) : ?>
               <section id="menu-usuario">
                  <h2 class="txt-center"><?php echo __('EMPRESA'); ?></h2>
                  <p class="dados-usuarios">meuemail@email.com</p>
                  <p class="dados-usuarios"><?php echo __('Plano Adquirido:'); ?> FAREM Consulting</p>
                  <ul  class="nav nav-pills nav-stacked">
                    <li role="presentation" class="divider"></li>
                    <li role="presentation"><a href="#"><?php echo __('MEU PERFIL'); ?></a></li>
                    <li role="presentation"><a href="#">GED</a></li>
                    <li role="presentation"><a href="#"><?php echo __('RISCO BRASIL'); ?></a></li>
                    <li role="presentation"><a href="#"><?php echo __('NETWORK BRASIL'); ?></a></li>
                    <li role="presentation"><a href="#"><?php echo __('SAIR'); ?></a></li>
                  </ul>
               </section>
             <?php endif; ?>

            </div>
         </div>
      </li>
   </ul>
  </div> <!-- #login -->

</div> <!-- .col -->