<div id="box-newsletter" class="col-lg-6 sombra-topo borda-verde2 bg-cinza-escuro boxex">
    <h2 class="tit-verde2"><span class="barra2"></span><?php echo strtoupper($newsletter->name); ?></h2>

    <?php echo $newsletter->content; ?>

    <?php echo $this->Form->create($newsletterEntity, ['class' => 'validate', 'url' => ['controller' => 'newsletter', 'action' => 'add'] ]); ?>

        <div class="input-group">
            <?php echo $this->Form->input("email", ['class' => 'form-control input-news', 'div' => false, 'label' => false]); ?>
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default btn-news">ASSINATURA DE NEWSLETTER</button>
            </span>
        </div>
        <br>

        <?php echo $this->Form->end(); ?>

    <img class="img-responsive" src="http://placehold.it/1000x250/34495e/2c3e50" alt="Third slide">

</div>