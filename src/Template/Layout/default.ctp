
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title') ?> - Pacta International Business Center</title>
    <!-- Bootstrap -->
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
    <div class="wrapper">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>

    <div id="rodape" class="row ">
    <div class="col-lg-1 col-md-1 col-sm-1 altura-rodape linha-cinza-rodape sombra-topo box-rodape hidden-xs"></div>
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-13 altura-rodape sombra-topo box-rodape">
        <img class="img-center" src="img/logo-pacta.png" height="56" width="66">
        <p class="txt-center"><a href="#">Termos</a> | <a href="#">Privaciadade</a> | <a href="#">Cunho</a></p>
        <div class="linha-rodape hidden-xs"></div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7 altura-rodape sombra-topo box-rodape">
            <address id="endereco">
                <p>PACTA SUNT SERVANDA<br/>
                Centro de Negócios Internacionais<br/>
                Avenida Floriano Peixoto, 51 – 12º andar<br/>
                Centro, 20020-906
            </address>
            <div class="linha-rodape hidden-xs"></div>

    </div>
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-13 altura-rodape sombra-topo box-rodape">

        <ul class="menu-rodape">
            <li><a href="#">INSTITUCIONAL</a></li>
            <li><a href="#">NOSSOS SERVIÇOS </a></li>
            <li><a href="#">ONDE ESTAMOS</a>
            <li><a href="#">OPORTUNIDADES</a></li>
          </ul>

          <div class="linha-rodape hidden-xs"></div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-13 altura-rodape sombra-topo box-rodape">

        <ul class="menu-rodape">
            <li><a href="www.farem.eu" target="_blanck">FAREM</a></li>
            <li><a href="#">LINKEDIN </a></li>
            <li><a href="#">CONTATO</a>
        </ul>
        <p class="txt-right">Pacta®2015</p>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

     <script>
      $(function() {
        $( "#sortable" ).sortable({
          revert: true
        });
        $( "#draggable" ).draggable({
          connectToSortable: "#sortable",
          helper: "clone",
          revert: "invalid"
        });
        $( "ul, li" ).disableSelection();
      });
    </script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('grids.min.js') ?>
    <?= $this->Html->script('jquery.mask.js') ?>
    <?= $this->Html->script('/vendor/simplepagination/jquery.simplePagination.js') ?>
    <?= $this->Html->script('main.js') ?>
</body>
</html>