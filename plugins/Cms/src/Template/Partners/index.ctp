<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Listar Parceiros</h2>
<hr>

<div class="form-group">
<?= $this->Html->link(__('Adicionar Novo'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
</div>

    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('title', 'Nome') ?></th>
            <th><?= $this->Paginator->sort('attachment', 'Imagem') ?></th>
            <th><?= $this->Paginator->sort('created', 'Data de Criação') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($partners as $partner): ?>
        <tr>
            <td><?= $this->Number->format($partner->id) ?></td>
            <td><?= h($partner->title) ?></td>
            <td><?= $this->Html->upload($partner->attachment, ['style' => 'height: 100px;']) ?></td>
            <td><?= h($partner->created->format("d/m/Y H:i:s")) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $partner->id]) ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $partner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partner->id)]) ?>
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