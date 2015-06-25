<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Editar Parceiro</h2>
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


<strong>Anexo Atual</strong>

<div class="clearfix"></div>

<?php echo $this->Html->upload($partner->attachment, ['style' => 'max-height: 360px;']); ?>

<div class="col-lg-12 col-excluir-registro">
<?= $this->Form->postLink(
                __('Excluir este registro'),
                ['action' => 'delete', $partner->id],
                ['confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $admin->id), 'class' => 'btn btn-danger btn-block']
            )
        ?>
</div>