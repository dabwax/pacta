<div class="container-fluid">
    <div class="row">
        <?php echo $this->element("menu"); ?>

        <?php if(empty($this->request->query['page'])) { ?>

        <?php echo $this->element("home_slider"); ?>

        <?php } ?>
    </div> <!-- .row -->
</div> <!-- .container-fluid -->

<?php echo $this->element("mobile_menu"); ?>

<div class="container-fluid">

    <div id="oportunidades" class="row row-eq-height">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xl-1 sombra-topo linha-verdeclaro-lateral verde-2 hidden-xs "></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 sombra-interna bg-cinza-claro boxex bordatopverde2">
            <h2 class="tit-verde1"><span class="barra1"></span><?php echo __('Oportunidades'); ?></h2>

            <?php foreach($oportunidades as $o) : ?>
            <section class="vagas">
                <a class="ver-vagas-disponiveis" href="javascript:;" data-json='<?php echo json_encode($o); ?>'><img src="img/icone-leia-mais-vagas.png" height="22" width="21"></a>
                <div class="col-md-12 col-xl-12 pleft0">
                    <h3 class="tit-vagas-disponiveis"><?php echo $o->name; ?>  </h3>
                    <p class="font14 mbottom0"><?php echo $o->city; ?> – <?php echo $o->state; ?> – <?php echo $o->country; ?></p>
                    <p class="font14"><abbr class="timeago" title="<?php echo $o->created->format('c'); ?>"><?php echo $o->created->format('c'); ?></abbr> | <?php echo $o->role; ?> </p>
                </div>
                <div class="clearfix"></div>
            </section>
        <?php endforeach; ?>


            <div class="text-center">
                <nav id="paginacao-noticias">
                  <ul class="pagination">
                    <?= $this->Paginator->numbers() ?>
                  </ul> <!-- .pagination -->
                </nav> <!-- #paginacao-noticias -->
            </div> <!-- .text-center -->

    </div>

    <div class="col-lg-6 col-md-6 col-sm-6 col-xl-6 sombra-topo borda-verde1 bg-cinza-claro boxex height-oportunidades bordatopverde2">
        <h2 class="tit-verde1"><span class="barra1"></span><?php echo __('Cadastro'); ?></h2>
        <p><?php echo __('Conheça melhor as formas de se envolver na primeira representação da plataforma
            FAREM no Brasil. Envie seu currículo para análise, e vire um consultor da primeira
            rede de intenções de negócios internacionais, conectando China, Europa e América Latina.'); ?> </p>

        <?php echo $this->Form->create($entityOpportunityCard, ['type' => 'file', 'id' => 'form-cadastro', 'class' => 'validate form' ,'url' => ['controller' => 'oportunidades', 'action' => 'cadastro'] ] ); ?>

            <div class="form-group">
                <?php echo $this->Form->input("name", ['label' => false, 'div' => false, 'placeholder' => __('Digite seu nome'), 'class' => 'form-control', 'required' => true]); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input("email", ['label' => false, 'div' => false, 'placeholder' => __('Digite seu e-mail'), 'class' => 'form-control', 'required' => true]); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->input("linkedin", ['label' => false, 'div' => false, 'placeholder' => __('Digite o endereço do seu LinkedIn'), 'class' => 'form-control', 'required' => true]); ?>
            </div>
            <div class="form-group">
                <button type='button' class='btn btn-verde btn-file btn-corriculo'><?php echo __('ANEXAR CURRÍCULO'); ?></button>
                <?php echo $this->Form->input("attachment", ['label' => false, 'div' => false, 'type' => 'file', 'class' => 'hidden']); ?>
            </div>
            <button type="submit" class="btn btn-success btn-verde"><?php echo __('ENVIAR'); ?></button>
        <?php echo $this->Form->end(); ?>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="content-modal">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="vaga-nome"><?php echo __('Nome da vaga'); ?></h4>
              </div>
              <div class="modal-body">
                <strong><?php echo __('Descrição da vaga'); ?></strong>

                <div id="vaga-descricao"></div>

                <strong><?php echo __('Localização da vaga'); ?></strong>

                <div id="vaga-localizacao"></div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-verde" data-dismiss="modal"><?php echo __('FECHAR'); ?></button>
              </div>
            </div>
        </div>
    </div>
</div>


</div> <!-- .container-fluid -->