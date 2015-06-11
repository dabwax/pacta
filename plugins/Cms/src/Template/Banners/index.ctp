<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Adicionar Novo'), ['action' => 'add'], ['class' => 'btn btn-default']) ?></li>
    </ul>
</div>
<div class="banners index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('title', 'Título') ?></th>
            <th><?= $this->Paginator->sort('attachment', 'Imagem') ?></th>
            <th><?= $this->Paginator->sort('url', 'Caminho') ?></th>
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
            <td><?= h($banner->url) ?></td>
            <td><?= h($banner->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $banner->id]) ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $banner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?>
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
