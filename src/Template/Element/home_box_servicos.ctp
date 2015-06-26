
<div id="box-servicos" class="col-lg-4 sombra-interna bg-cinza-claro boxex height-servicos bordatopverde2">
    <?php if(!empty($servico)) : ?>
        <h2 class="tit-verde1" style="text-transform: uppercase;"><span class="barra1"></span><?php echo $servico->name; ?></h2>

        <?php echo $servico->content; ?>
    <?php else : ?>
        <div class="alert alert-danger">É necessário criar uma página de serviços para este idioma.</div>
    <?php endif; ?>
</div> <!-- #box-servicos -->