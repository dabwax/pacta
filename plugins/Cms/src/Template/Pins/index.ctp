<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Pin'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="pins index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('address') ?></th>
            <th><?= $this->Paginator->sort('neighborhood') ?></th>
            <th><?= $this->Paginator->sort('city') ?></th>
            <th><?= $this->Paginator->sort('state') ?></th>
            <th><?= $this->Paginator->sort('country') ?></th>
            <th><?= $this->Paginator->sort('latitude') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pins as $pin): ?>
        <tr>
            <td><?= $this->Number->format($pin->id) ?></td>
            <td><?= h($pin->address) ?></td>
            <td><?= h($pin->neighborhood) ?></td>
            <td><?= h($pin->city) ?></td>
            <td><?= h($pin->state) ?></td>
            <td><?= h($pin->country) ?></td>
            <td><?= h($pin->latitude) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $pin->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pin->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pin->id)]) ?>
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
