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


<div id="servicos" class="row row-eq-height">

<div class="col-lg-1 col-md-1 col-sm-1 sombra-topo linha-verdeclaro-lateral verde-2 hidden-xs margleftneg">&nbsp;</div>
<div class="col-lg-12 col-md-12 col-sm-12 sombra-interna bg-cinza-claro boxex bordatopverd2">
    <h2 class="tit-verde1"><span class="barra1"></span><?php echo strtoupper($servico->name); ?></h2>

    <div class="panel-group sanfona-servicos" id="accordion" role="tablist" aria-multiselectable="true">

            <?php foreach($servicos as $s) : ?>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <?php echo $s->name; ?><spam class="pull-right"><img src="img/seta-servicos-down.png" height="10" width="11"></spam>
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body mright10 mleft10">
                  <div class="col-md-13 pleft0 pright0">

                    <?php echo $s->content; ?>

                    <div class="panel with-nav-tabs panel-success abas-servcos">
                        <div class="panel-heading no-shadow">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1success" data-toggle="tab"><?php echo $s->tab_1_title; ?></a></li>
                                    <li><a href="#tab2success" data-toggle="tab"><?php echo $s->tab_2_title; ?></a></li>
                                </ul>
                        </div>
                        <div class="panel-body fundo-aba mleft10 mright10">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1success">
                                  <?php echo $s->tab_1_content; ?>
                                </div>
                                <div class="tab-pane fade" id="tab2success">

                                  <?php echo $s->tab_2_content; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
      <?php endforeach; ?>

        </div>
    </div>
</div>


</div> <!-- .container-fluid -->