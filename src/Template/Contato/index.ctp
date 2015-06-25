<?php
        $this->assign("title", "Contato"); ?>

<div class="container-fluid">
    <div class="row">
        <?php echo $this->element("menu"); ?>
    </div> <!-- .row -->
</div> <!-- .container-fluid -->

<?php echo $this->element("mobile_menu"); ?>

<div class="container-fluid">

  <div id="onde-estamos" class="row row-eq-height">
      <div class="col-lg-1 col-md-1 col-sm-1 sombra-topo verde3 hidden-xs">&nbsp;</div>

      <div class="col-lg-6 col-md-6 col-sm-6 sombra-interna borda-verde2 bg-cinza-escuro boxex bordatopverde">
                    <h2 class="tit-verde2"><span class="barra2"></span><?php echo __('CONTATO'); ?></h2>
                    <p><?php echo __('Preencha os campos abaixo para entrar em contato conosco, ou se preferir envie um e-mail para contato@pacta.com.br.'); ?></p>

                    <?php echo $this->Form->create($entityContact, ['class' => 'validate'] ); ?>
                    <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="form-contato">
                        <div class="form-group">
                            <?php echo $this->Form->input("name", ['label' => false, 'div' => false, 'placeholder' => __('Digite seu nome'), 'class' => 'form-control', 'required' => true ] ); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input("email", ['label' => false, 'div' => false, 'placeholder' => __('Digite seu e-mail'), 'class' => 'form-control', 'required' => true, 'type' => 'email' ] ); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input("subject", ['label' => false, 'div' => false, 'placeholder' => __('Digite o assunto'), 'class' => 'form-control', 'required' => true ] ); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input("message", ['label' => false, 'div' => false, 'placeholder' => __('Digite a mensagem'), 'class' => 'form-control', 'type' => 'textarea', 'required' => true ] ); ?>
                        </div>
                        <button type="submit" class="btn btn-success btn-verde"><?php echo __('ENVIAR'); ?></button>
                    <?php echo $this->Form->end(); ?>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 sombra-topo borda-verde2 bg-cinza-escuro boxex bordatopverde">
                    <h2 class="tit-verde2"><span class="barra2"></span><?php echo __('ENDEREÇO'); ?></h2>
                    <p><b>PACTA SUNT SERVANDA</b></br>
                        <?php echo __('Centro de Negócios Internacionais'); ?></br>
                        <?php echo __('Avenida Floriano Peixoto, 51 – 12º andar'); ?></br>
                        <?php echo __('Centro, 20020-906'); ?></p>

                        <div id="mapa-contato">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3676.6799056256887!2d-43.0965898!3d-22.8513292!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9984a73f18100b%3A0x64a95da8f5b6e677!2sR.+Mal.+Floriano+Peixoto%2C+51+-+Neves%2C+S%C3%A3o+Gon%C3%A7alo+-+RJ%2C+24425-470!5e0!3m2!1spt-BR!2sbr!4v1426710992182" width="100%" height="500" frameborder="0" style="border:0"></iframe>


                        </div>

                </div>

  </div>

</div> <!-- .container-fluid -->