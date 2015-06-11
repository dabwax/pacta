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
            <span><?= $this->fetch('title') ?></span>
        </div>
        <div class="header-help">
            <span><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></span>
            <span><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></span>
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
