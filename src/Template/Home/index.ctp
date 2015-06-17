<div class="container-fluid">
    <div class="row">
        <?php echo $this->element("menu"); ?>

        <?php echo $this->element("home_slider"); ?>
    </div> <!-- .row -->
</div> <!-- .container-fluid -->

<?php echo $this->element("mobile_menu"); ?>

<div class="container-fluid">

    <div id="ancora" class="row">

        <div class="col-lg-1 sombra-topo linha-verdeclaro-lateral verde-2 hidden-xs height-servicos">&nbsp;</div>

        <?php echo $this->element("home_box_servicos"); ?>

        <?php echo $this->element("home_box_parceiros"); ?>

        <?php echo $this->element("home_box_planos"); ?>

    </div> <!-- #ancora -->

    <div class="row row-eq-height">
        <div class="col-lg-1 linha-verde-lateral sombra-topo verde-3 hidden-xs margleftneg"></div>

        <?php echo $this->element("home_box_noticias"); ?>
        <?php echo $this->element("home_box_newsletter"); ?>

    </div> <!-- .row -->

</div> <!-- .container-fluid -->


<div class="modal fade ultimasNoticias" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="content-modal">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Titulo noticia</h4>
          </div>
          <div class="modal-body">
            <p>Sub titulo</p>
            <p>Bacon ipsum dolor amet pancetta shoulder short ribs, chicken picanha andouille jerky
                hamburger short loin pastrami chuck. Turducken rump shoulder spare ribs, porchetta bacon
                chicken. Swine pork loin boudin pancetta kielbasa beef sirloin bresaola spare ribs flank
                doner andouille capicola ball tip. Ground round landjaeger biltong doner fatback rump,
                t-bone corned beef. </p>

            <p>12 de janeiro de 2016, Rio de Janeiro, Rj</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-verde" data-dismiss="modal">FECHAR</button>
          </div>
        </div>
    </div>
</div>