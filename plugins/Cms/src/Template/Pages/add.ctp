<div class="col-lg-12">
    <?= $this->Form->create($page, ['class' => 'validate']) ?>
    <fieldset>
        <h2 class="titulo-painel"><i class="fa fa-user"></i> <?= __('Adicionar Nova Página') ?></h2>
        <hr>
        <?php
            echo $this->Form->input('name', ['label' => 'Nome', 'required' => true]);
            echo $this->Form->input('content', ['class' => 'editor', 'label' => 'Conteúdo']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
