<div id="box-parceiros" class="col-lg-4 sombra-topo borda-verde1 bg-cinza-claro boxex height-servicos bordatopverde2">
    <h2 class="tit-verde1"><span class="barra1"></span><?php echo __('PARCEIROS'); ?></h2>

    <div id="carousel-parceiros" class="parceiros carousel slide" data-ride="parceiro">
        <div class="carousel-inner">

            <?php $i = 0; foreach($parceiros as $p) : ?>
            <div class="item <?php if($i == 0) : ?>active<?php endif; ?>">

                <?php if(!empty($p->url)) :  ?>
                    <a href="<?php echo $p->url; ?>" target="_blank">
                <?php endif; ?>

                    <?php echo $this->Html->upload($p->attachment, ['class' => '', 'style' => 'width: 100%;']); ?>

                <?php if(!empty($p->url)) :  ?>
                    </a>
                <?php endif; ?>

            </div>
        <?php $i++; endforeach; ?>

        <ol class="carousel-indicators">
            <?php $i = 0; foreach($parceiros as $p) : ?>
            <li data-target="#carousel-parceiros" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) : ?>active<?php endif; ?>"></li>
            <?php $i++; endforeach; ?>
        </ol>
        </div>



    </div>

</div>