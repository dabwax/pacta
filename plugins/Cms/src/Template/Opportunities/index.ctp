<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Listar Oportunidades</h2>
<hr>

<div class="form-group">
    <?= $this->Html->link(__('Adicionar Nova Oportunidade'), ['action' => 'add'], ['class' => 'btn btn-block btn-primary']) ?>
</div>
    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('name', 'Nome') ?></th>
            <th><?= $this->Paginator->sort('role', 'Cargo') ?></th>
            <th><?= $this->Paginator->sort('local', 'Local') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($opportunities as $opportunity): ?>
        <tr>
            <td><?= $this->Number->format($opportunity->id) ?></td>
            <td><?= h($opportunity->name) ?></td>
            <td><?= h($opportunity->role) ?></td>
            <td><?= h($opportunity->local) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $opportunity->id], ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $opportunity->id], ['class' => 'btn btn-danger', 'confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $opportunity->id)]) ?>

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
