<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Listar Serviços</h2>
<hr>

<div class="form-group">
<?= $this->Html->link(__('Adicionar Novo'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
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
    <?php foreach ($services as $service): ?>
        <tr>
            <td><?= $this->Number->format($service->id) ?></td>
            <td><?= h($service->name) ?></td>
            <td><?= h($service->created->format("d/m/Y H:i:s")) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $service->id]) ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
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

