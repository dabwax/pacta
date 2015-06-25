<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Listar Pins</h2>
<hr>

    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id' ,'#') ?></th>
            <th><?= $this->Paginator->sort('address', 'Endereço') ?></th>
            <th><?= $this->Paginator->sort('data', 'Nome') ?></th>
            <th><?= $this->Paginator->sort('tag', 'Categoria') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pins as $pin): ?>
        <tr>
            <td><?= $this->Number->format($pin->id) ?></td>
            <td><?= h($pin->address) ?></td>
            <td><?= h($pin->data) ?></td>
            <td><?= h($pin->tag) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $pin->id], ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $pin->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $pin->id)]) ?>
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
