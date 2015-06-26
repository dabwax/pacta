<div id="box-newsletter" class="col-lg-6 sombra-topo borda-verde2 bg-cinza-escuro boxex">

    <?php if(!empty($newsletter)) : ?>

    <h2 class="tit-verde2"><span class="barra2"></span><?php echo strtoupper($newsletter->name); ?></h2>

    <?php echo $newsletter->content; ?>

    <?php echo $this->Form->create($newsletterEntity, ['class' => 'validate', 'url' => ['controller' => 'newsletter', 'action' => 'add'] ]); ?>

        <div class="input-group">
            <?php echo $this->Form->input("email", ['class' => 'form-control input-news', 'div' => false, 'label' => false, 'data-url' => $this->Url->build(['controller' => 'newsletter', 'action' => 'ajax_email_existe']) ]); ?>
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default btn-news" disabled="disabled"><?php echo __('ASSINATURA DE NEWSLETTER'); ?></button>
            </span>

        </div>
            <div class="clearfix"></div>

            <p class="alerta-newsletter"></p>
        <br>

        <?php echo $this->Form->end(); ?>

    <img class="img-responsive" src="http://placehold.it/1000x250/34495e/2c3e50" alt="">

<?php else: ?>
    <div class="alert alert-danger">
        Não há página de newsletter para este idioma.
    </div>
<?php endif; ?>

</div>