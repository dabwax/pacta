<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('cms.min.css') ?>

    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') ?>
    <?= $this->Html->script('//cdn.ckeditor.com/4.4.7/standard/ckeditor.js') ?>
    <?= $this->Html->script('//cdn.ckeditor.com/4.4.7/standard/adapters/jquery.js') ?>
    <?= $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js') ?>
    <?= $this->Html->script('http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/localization/messages_pt_BR.js') ?>
    <?= $this->Html->script('cms.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

            <?php if($admin) { ?>

            <nav class="navbar navbar-default">
              <div class="container">
                  <a class="navbar-brand pull-right" href="<?php echo $this->Url->build('/'); ?>" style="padding: 0px;">
                      BBLENDER PACTA
                  </a>

              </div><!-- /.container-fluid -->
            </nav>

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <h1 class="titulo-painel">Painel de Controle <small></small></h1>

                        <hr>

                    </div> <!-- .col-md-12 -->

                </div> <!-- .row -->

                <div class="row">

                    <div class="col-md-3">

                        <ul class="lista-sidebar">
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'dashboard', 'action' => 'index'] ); ?>"> <i class="fa fa-home"></i> Home</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'admins', 'action' => 'index'] ); ?>"> <i class="fa fa-user"></i> Listar Usuários</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'banners', 'action' => 'index'] ); ?>"> <i class="fa fa-user"></i> Listar Banners</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'posts', 'action' => 'index'] ); ?>"> <i class="fa fa-user"></i> Listar Notícias</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'partners', 'action' => 'index'] ); ?>"> <i class="fa fa-user"></i> Listar Parceiros</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $this->Url->build( ['controller' => 'affiliates', 'action' => 'index'] ); ?>"> <i class="fa fa-user"></i> Listar Associados</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'contracts', 'action' => 'index']); ?>"><i class="fa fa-user"></i> Listar Contratos de Adesão</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'index']); ?>"><i class="fa fa-user"></i> Editar Páginas</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'opportunities', 'action' => 'index']); ?>"><i class="fa fa-user"></i> Listar Oportunidades</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'pins', 'action' => 'index']); ?>"><i class="fa fa-user"></i> Listar Pins (Onde Estamos)</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $this->Url->build(['controller' => 'plans', 'action' => 'index']); ?>"><i class="fa fa-user"></i> Listar Planos Farem</a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-md-9">

                            <?= $this->Flash->render() ?>

                            <div class="row">
                                <?= $this->fetch('content') ?>
                            </div>

                    </div>
                </div>

            </div> <!-- .container -->
            <?php } else { ?>

                            <?= $this->Flash->render() ?>

                            <div class="container" style="margin-top: 120px;">
                                <?= $this->fetch('content') ?>
                            </div>
            <?php } ?>
</body>
</html>
