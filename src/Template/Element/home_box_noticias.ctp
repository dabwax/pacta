<div id="box-noticias" class="col-lg-6 sombra-interna bg-cinza-escuro boxex">
    <h2 class="tit-verde2"><span class="barra2"></span><?php echo __('NOTÍCIAS'); ?></h2>

    <?php if(empty($noticias->toArray())) : ?>
        <div class="alert alert-danger">Não há notícias para este idioma.</div>
    <?php endif; ?>

  <?php foreach($noticias as $n) : ?>
    <section class="noticias-home">
        <a class="ver-mais-noticias" data-json='<?php echo json_encode($n->toArray()); ?>'><img src="img/icone-leia-mais.png" height="22" width="21"></a>
        <div class="col-md-12 col-xl-12 pleft0">
            <span class="data-noticia-home"><?php echo $n->published_date; ?></span>
            <h3 class="tit-noticias-home"><?php echo $n->title; ?> </h3>
            <p class="font14"><?php echo $n->excerpt; ?></p>
        </div>
        <div class="clearfix"></div>
    </section> <!-- .noticias-home -->
  <?php endforeach; ?>

    <div class="text-center">
        <nav id="paginacao-noticias">
          <ul class="pagination">
            <?= $this->Paginator->numbers() ?>
          </ul> <!-- .pagination -->
        </nav> <!-- #paginacao-noticias -->
    </div> <!-- .text-center -->

</div> <!-- #box-noticias -->