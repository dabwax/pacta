<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Transfer'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="transfers index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('attachment') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($transfers as $transfer): ?>
        <tr>
            <td><?= $this->Number->format($transfer->id) ?></td>
            <td><?= h($transfer->attachment) ?></td>
            <td><?= h($transfer->name) ?></td>
            <td><?= h($transfer->type) ?></td>
            <td><?= $this->Number->format($transfer->user_id) ?></td>
            <td><?= h($transfer->status) ?></td>
            <td><?= h($transfer->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $transfer->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transfer->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transfer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfer->id)]) ?>
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
