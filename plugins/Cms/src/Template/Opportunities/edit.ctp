<div class="col-lg-12">
    <?= $this->Form->create($opportunity, ['class' => 'validate']) ?>
        <h2 class="titulo-painel"><i class="fa fa-user"></i> <?= __('Editar Oportunidade') ?></h2>
        <hr>
    <fieldset>
        <?php
            echo $this->Form->input('name', ['label' => 'Nome', 'required' => true, 'minlength' => 5]);
            echo $this->Form->input('role', ['label' => 'Cargo', 'required' => true, 'minlength' => 5]);
            echo $this->Form->input('local', ['label' => 'Local', 'required' => true, 'minlength' => 5]);
            echo $this->Form->input('city', ['label' => 'Cidade', 'required' => true, 'minlength' => 5]);
            echo $this->Form->input('state', ['label' => 'UF', 'required' => true, 'minlength' => 2]);
            echo $this->Form->input('country', ['label' => 'País', 'required' => true, 'minlength' => 5]);
            echo $this->Form->input('date_of_accession', ['label' => 'Data de Publicação', 'class' => 'datepicker', 'type' => 'text', 'required' => true, 'minlength' => 5]);
            echo $this->Form->input('type', ['label' => 'Tipo', 'required' => true, 'minlength' => 5]);
            echo $this->Form->input('description', ['label' => 'Descrição', 'class' => 'editor', 'required' => true, 'minlength' => 5]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


<div class="col-lg-12 col-excluir-registro">
<?= $this->Form->postLink(
                __('Excluir este registro'),
                ['action' => 'delete', $opportunity->id],
                ['confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $opportunity->id), 'class' => 'btn btn-danger btn-block']
            )
        ?>
</div>