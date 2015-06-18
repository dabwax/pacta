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

    <?php if(empty($this->request->query['page'])) { ?>

    <div id="ancora" class="row">

        <div class="col-lg-1 sombra-topo linha-verdeclaro-lateral verde-2 hidden-xs height-servicos">&nbsp;</div>

        <div id="box-servicos" class="col-lg-6 sombra-interna bg-cinza-claro boxex height-servicos bordatopverde2">
          <h2 class="tit-verde1" style="text-transform: uppercase;"><span class="barra1"></span><?php echo $institucional->name; ?></h2>

          <?php echo $institucional->content; ?>
        </div> <!-- #box-servicos -->
        <div id="box-servicos" class="col-lg-6 sombra-interna bg-cinza-claro boxex height-servicos bordatopverde2">
          <h2 class="tit-verde1" style="text-transform: uppercase;"><span class="barra1"></span><?php echo $o_que_fazemos->name; ?></h2>

          <?php echo $o_que_fazemos->content; ?>

            <div id="tabs-isntitucional">
                      <div class="col-lg-13 col-md-13 col-sm-13 col-xs-13  bhoechie-tab-container">
                          <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 bhoechie-tab-menu aba-insti">
                            <div class="list-group">
                            <?php $i = 0; foreach($o_que_fazemos->page_blocks as $pb) { ?>
                              <a href="#" class="list-group-item <?php if($i == 0) : ?> active <?php endif; ?>">
                               <?php echo $pb->name; ?> <span class="pull-right">>></span>
                              </a>
                              <?php $i++; } ?>
                            </div>
                          </div>
                          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 bhoechie-tab aba-insti pleft5 pright0">

                            <?php $i = 0; foreach($o_que_fazemos->page_blocks as $pb) { ?>
                              <!-- flight section -->
                              <div class="bhoechie-tab-content <?php if($i == 0) : ?> active <?php endif; ?>">
                                    <?php echo $pb->content; ?>
                              </div>
                              <?php $i++; } ?>

                          </div>
                      </div>
                </div> <!-- #tab -->

        </div> <!-- #box-servicos -->

    </div> <!-- #ancora -->

        <?php } ?>

    <div class="row row-eq-height">
        <div class="col-lg-1 linha-verde-lateral sombra-topo verde-3 hidden-xs margleftneg"></div>

        <?php echo $this->element("home_box_noticias"); ?>
        <?php echo $this->element("home_box_newsletter"); ?>

    </div> <!-- .row -->

</div> <!-- .container-fluid -->


<div class="modal fade ultimasNoticias" id="modalNoticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="content-modal">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="campo-titulo-noticia">Titulo noticia</h4>
          </div>
          <div class="modal-body">

          <div id="campo-conteudo-noticia"></div>

          <p id="campo-data-noticia"></p>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-verde" data-dismiss="modal">FECHAR</button>
          </div>
        </div>
    </div>
</div>