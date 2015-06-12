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

<div class="col-lg-12 col-excluir-registro">
<?= $this->Html->link(
                __('Adicionar Novo Card'),
                ['controller' => 'opportunity_cards', 'action' => 'add', $opportunity->id],
                ['class' => 'btn btn-primary btn-block']
            )
        ?>
</div>

<div class="col-lg-12 col-excluir-registro">

    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('name', 'Nome') ?></th>
            <th><?= $this->Paginator->sort('email', 'E-mail') ?></th>
            <th><?= $this->Paginator->sort('date_of_accession', 'Data de Publicação') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($opportunityCards as $opportunityCard): ?>
        <tr>
            <td><?= $this->Number->format($opportunityCard->id) ?></td>
            <td><?= h($opportunityCard->name) ?></td>
            <td><?= h($opportunityCard->email) ?></td>
            <td><?= h($opportunityCard->date_of_accession) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['controller' => 'opportunity_cards', 'action' => 'edit', $opportunityCard->id, $opportunityCard->opportunity_id], ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Excluir'), ['controller' => 'opportunity_cards', 'action' => 'delete', $opportunityCard->id, $opportunityCard->opportunity_id], ['class' => 'btn btn-danger', 'confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $opportunityCard->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>

</div>