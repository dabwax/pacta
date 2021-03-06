<?php
        $this->assign("title", "Localização"); ?>
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

  <div id="onde-estamos" class="row row-eq-height">
      <div class="col-lg-1 col-md-1 col-sm-1 sombra-topo verde3 hidden-xs">&nbsp;</div>
      <div class="col-lg-12 col-md-12 col-sm-12 sombra-interna  bgCinzaClaro boxex bordatopverde">
          <h2 class="tit-verde2"><span class="barra2"></span><?php echo __('ONDE ESTAMOS'); ?></h2>

          <div class="col-lg-7 col-md-7 col-sm-7 col-xl-13">
            <p><?php echo __('Nossas representações fora do país são escritórios que atuam em áreas de tributação, fiscalidade e
            contabilidade, atendendo tanto empresas locais, quanto multinacionais. Sua vasta experiência no
            mercado local, conciliada ao interessante portfolio de clientes internacionais que já atenderam, nos
            permite confiar o repasse de assistência em fases finais de estabelecimento de filiais no estrangeiro,
            por exemplo.'); ?></p>

          </div>

          <div id="filtro-locarizacao" class="col-lg-6 col-md-6 col-sm-6 col-xl-13">

              <ul class="list-inline">
                <li><input type="radio" class="img checkbox-pin" name="a" value="farem"> <?php echo __('FAREM'); ?></li>
                <li class="separator">|</li>
                <li><input type="radio" class="img checkbox-pin" name="a" value="pacta"> <?php echo __('PACTA'); ?></li>
                <li class="separator">|</li>
                <li><input type="radio" name="a" class="img checkbox-pin" value="todos" checked="checked"><?php echo __('TODOS'); ?></li>
              </ul>

          </div>

          <div id="mapa" style="width: 100%; height: 700px; display: inline-block; clear: both;" data-pins='<?php echo json_encode($pins); ?>'></div>


          <div class="clearfix"></div>

          <?php if(empty($pins->toArray())) : ?>
            <div class="alert alert-danger">
                Não há pins para este idioma.
            </div>
          <?php endif; ?>

          <div class="clearfix"></div>

      </div>
  </div>

</div> <!-- .container-fluid -->