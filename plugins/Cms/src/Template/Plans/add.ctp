<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Adicionar Plano FAREM</h2>
<hr>

    <?= $this->Form->create($plan, ['class' => 'validate', 'type' => 'file']) ?>
    <fieldset>
        <?php
            echo $this->Form->input('name', ['label' => 'Nome']);
            echo $this->Form->input('content',['label' => 'Conteúdo', 'class' => 'editor']);
            echo $this->Form->input('price', ['label' => 'Preço']);
            echo $this->Form->input('attachment', ['label' => 'Anexo', 'type' => 'file']);
            echo $this->Form->input('destaque_1', ['label' => 'Destaque 1']);
            echo $this->Form->input('destaque_2', ['label' => 'Destaque 2']);
            echo $this->Form->input('destaque_3', ['label' => 'Destaque 3']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>