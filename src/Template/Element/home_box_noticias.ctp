<div id="box-noticias" class="col-lg-6 sombra-interna bg-cinza-escuro boxex">
    <h2 class="tit-verde2"><span class="barra2"></span>NOTÍCIAS</h2>

  <?php foreach($noticias as $n) : ?>
    <section class="noticias-home">
        <a class="ver-mais-noticias" data-toggle="modal" data-target=".ultimasNoticias"><img src="img/icone-leia-mais.png" height="22" width="21"></a>
        <div class="col-md-12 col-xl-12 pleft0">
            <span class="data-noticia-home">28.03.2014</span>
            <h3 class="tit-noticias-home"><?php echo $n->title; ?> </h3>
            <p class="font14">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo...</p>
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