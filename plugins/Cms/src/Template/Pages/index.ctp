<div class="col-lg-12">

<div class="form-group">
    <?= $this->Html->link(__('Adicionar Nova Página'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
</div>

    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('name', 'Nome') ?></th>
            <th><?= $this->Paginator->sort('created', 'Data de Criação') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pages as $page): ?>
        <tr>
            <td><?= $this->Number->format($page->id) ?></td>
            <td><?= h($page->name) ?></td>
            <td><?= h($page->created->format("d/m/Y")) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $page->id], ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $page->id], ['class' => 'btn btn-danger', 'confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $page->id)]) ?>
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
