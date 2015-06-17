<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Adicionar Novo Parceiro</h2>
<hr>
    <?= $this->Form->create($partner, ['class' => 'validate', 'type' => 'file']) ?>
    <fieldset>
        <?php
            echo $this->Form->input('title', ['label' => 'Título']);
            echo $this->Form->input('attachment', ['type' => 'file', 'label' => 'Imagem']);
            echo $this->Form->input('url', ['label' => 'URL']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
