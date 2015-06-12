<div class="col-lg-12">
    <?= $this->Form->create($pageBlock) ?>
    <fieldset>
        <h2 class="titulo-painel"><i class="fa fa-user"></i> <?= __('Editar Bloco de Conteúdo') ?></h2>
        <hr>
        <?php
            echo $this->Form->input('name', ['label' => 'Nome']);
            echo $this->Form->input('content', ['class' => 'editor', 'label' => 'Conteúdo']);
            echo $this->Form->input('position', ['label' => 'Posição', 'type' => 'text']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
