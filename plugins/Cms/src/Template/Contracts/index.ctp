<div class="col-lg-12">

<div class="form-group">
    <?= $this->Html->link(__('Adicionar Novo Contrato'), ['action' => 'add'], ['class' => 'btn btn-block btn-primary']) ?>
</div>

    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('name', 'Nome') ?></th>
            <th><?= $this->Paginator->sort('zip_code', 'CEP') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contracts as $contract): ?>
        <tr>
            <td><?= $this->Number->format($contract->id) ?></td>
            <td><?= h($contract->name) ?></td>
            <td><?= h($contract->zip_code) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $contract->id], ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $contract->id], ['class' => 'btn btn-danger', 'confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $contract->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
    </div>
</div>
