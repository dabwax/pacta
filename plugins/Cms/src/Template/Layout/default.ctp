<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('/cms/css/cms.css') ?>

    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') ?>
    <?= $this->Html->script('/cms/js/cms.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="header-title">
            <span>BBlender - Pacta</span>
        </div>
        <div class="header-help">

            <?php if($admin) { ?>
            <div class="btn-group">
                <a href="<?php echo $this->Url->build(['controller' => 'admins', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Administradores</a>
                <a href="<?php echo $this->Url->build(['controller' => 'banners', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Banners</a>
                <a href="<?php echo $this->Url->build(['controller' => 'plans', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Planos</a>
                <a href="<?php echo $this->Url->build(['controller' => 'affiliates', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Associados</a>
                <a href="<?php echo $this->Url->build(['controller' => 'contracts', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Contratos</a>
                <a href="<?php echo $this->Url->build(['controller' => 'newsletter', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Newsletter</a>
                <a href="<?php echo $this->Url->build(['controller' => 'opportunities', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Oportunidades</a>
                <a href="<?php echo $this->Url->build(['controller' => 'pages', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Páginas</a>
                <a href="<?php echo $this->Url->build(['controller' => 'partners', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Parceiros</a>
                <a href="<?php echo $this->Url->build(['controller' => 'pins', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Pins</a>
                <a href="<?php echo $this->Url->build(['controller' => 'posts', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Posts</a>
                <a href="<?php echo $this->Url->build(['controller' => 'services', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Serviços</a>
                <a href="<?php echo $this->Url->build(['controller' => 'transfers', 'action' => 'index']); ?>" class="btn btn-warning"><i class="fa fa-sign-out"></i> Transferências</a>
                <a href="<?php echo $this->Url->build(['controller' => 'authentication', 'action' => 'logout']); ?>" class="btn btn-danger"><i class="fa fa-sign-out"></i> Sair do Sistema</a>
            </div>
            <?php } ?>
        </div>
    </header>
    <div id="container">

        <div id="content">
            <?= $this->Flash->render() ?>

            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>
