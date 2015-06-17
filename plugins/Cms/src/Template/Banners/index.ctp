<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Listar Banners</h2>
<hr>

<div class="form-group">
<?= $this->Html->link(__('Adicionar Novo'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
</div>

    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('title', 'Título') ?></th>
            <th><?= $this->Paginator->sort('attachment', 'Imagem') ?></th>
            <th><?= $this->Paginator->sort('created', 'Data de Criação') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($banners as $banner): ?>
        <tr>
            <td><?= $this->Number->format($banner->id) ?></td>
            <td><?= h($banner->title) ?></td>
            <td><?= $this->Html->upload($banner->attachment, ['style' => 'height: 100px;']) ?></td>
            <td><?= h($banner->created->format("d/m/Y H:i:s")) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $banner->id], ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $banner->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?>
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