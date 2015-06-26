<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Listar Notícias</h2>
<hr>

<div class="form-group">
<?= $this->Html->link(__('Adicionar Novo'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
</div>

    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('title', 'Título') ?></th>
            <th><?= $this->Paginator->sort('published_date', 'Data de Publicação') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $this->Number->format($post->id) ?></td>
            <td><?= h($post->title) ?></td>
            <td><?= h($post->published_date) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $post->id], ['class' => 'btn btn-primary'] ) ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $post->id], ['class' => 'btn btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
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