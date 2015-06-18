<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Editar Serviço</h2>
<hr>
    <?= $this->Form->create($service, ['class' => 'validate']) ?>
    <fieldset>
        <?php
            echo $this->Form->input('name', ['label' => 'Nome']);
            echo $this->Form->input('content', ['class' => 'editor', 'label' => 'Conteúdo']);
            echo $this->Form->input('tab_1_title', ['label' => 'Título da 1ª Aba']);
            echo $this->Form->input('tab_1_content', ['class' => 'editor', 'label' => 'Conteúdo da 1ª Aba']);
            echo $this->Form->input('tab_2_title', ['label' => 'Título da 2ª Aba']);
            echo $this->Form->input('tab_2_content', ['class' => 'editor', 'label' => 'Conteúdo da 2ª Aba']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


<div class="col-lg-12 col-excluir-registro">
<?= $this->Form->postLink(
                __('Excluir este registro'),
                ['action' => 'delete', $service->id],
                ['confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $service->id), 'class' => 'btn btn-danger btn-block']
            )
        ?>
</div>