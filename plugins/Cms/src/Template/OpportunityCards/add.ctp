<div class="col-lg-12">
    <?= $this->Form->create($opportunityCard, ['class' => 'validate']) ?>
        <h2 class="titulo-painel"><i class="fa fa-user"></i> <?= __('Adicionar Novo Card') ?></h2>
        <hr>
    <fieldset>
        <?php
            echo $this->Form->input('name', ['label' => 'Nome', 'required' => true, 'minlength' => 5]);
            echo $this->Form->input('email', ['type' => 'email', 'label' => 'E-mail', 'required' => true, 'minlength' => 5]);
            echo $this->Form->input('date_of_accession', ['label' => 'Data de Publicação', 'class' => 'datepicker', 'type' => 'text', 'required' => true, 'minlength' => 5]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
