<div class="col-lg-12">


    <?= $this->Form->create($affiliate, ['class' => 'validate']) ?>
        <h2 class="titulo-painel"><i class="fa fa-user"></i> <?= __('Editar Associado') ?></h2>
        <hr>
    <fieldset>
        <?php
            echo $this->Form->input('name', ['label' => 'Nome', 'required' => true, 'minlength' => 5]);
            echo $this->Form->input('date_of_accession', ['class' => 'datepicker', 'type' => 'text', 'label' => 'Data de Associação', 'required' => true, 'minlength' => 10]);
            echo $this->Form->input('plan_id', ['options' => $plans, 'empty' => 'Selecionar Plano', 'label' => 'Plano Atual', 'required' => true]);
            echo $this->Form->input('responsible_name', ['label' => 'Nome do Responsável', 'required' => true, 'minlength' => 5]);
            echo $this->Form->input('responsible_email', ['label' => 'E-mail do Responsável', 'required' => true, 'type' => 'email', 'minlength' => 10]);
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>

<div class="col-lg-12 col-excluir-registro">
<?= $this->Form->postLink(
                __('Excluir este registro'),
                ['action' => 'delete', $affiliate->id],
                ['class' => 'btn btn-danger btn-block', 'confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $affiliate->id)]
            )
        ?>
</div>