<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Plan'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Affiliates'), ['controller' => 'Affiliates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Affiliate'), ['controller' => 'Affiliates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="plans index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('price') ?></th>
            <th><?= $this->Paginator->sort('destaque_1') ?></th>
            <th><?= $this->Paginator->sort('destaque_2') ?></th>
            <th><?= $this->Paginator->sort('destaque_3') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($plans as $plan): ?>
        <tr>
            <td><?= $this->Number->format($plan->id) ?></td>
            <td><?= h($plan->name) ?></td>
            <td><?= h($plan->price) ?></td>
            <td><?= h($plan->destaque_1) ?></td>
            <td><?= h($plan->destaque_2) ?></td>
            <td><?= h($plan->destaque_3) ?></td>
            <td><?= h($plan->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $plan->id]) ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $plan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plan->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
