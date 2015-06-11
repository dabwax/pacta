<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Affiliate'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="affiliates index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('date_of_accession') ?></th>
            <th><?= $this->Paginator->sort('plan_id') ?></th>
            <th><?= $this->Paginator->sort('responsible_name') ?></th>
            <th><?= $this->Paginator->sort('responsible_email') ?></th>
            <th><?= $this->Paginator->sort('status') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($affiliates as $affiliate): ?>
        <tr>
            <td><?= $this->Number->format($affiliate->id) ?></td>
            <td><?= h($affiliate->name) ?></td>
            <td><?= h($affiliate->date_of_accession) ?></td>
            <td>
                <?= $affiliate->has('plan') ? $this->Html->link($affiliate->plan->name, ['controller' => 'Plans', 'action' => 'view', $affiliate->plan->id]) : '' ?>
            </td>
            <td><?= h($affiliate->responsible_name) ?></td>
            <td><?= h($affiliate->responsible_email) ?></td>
            <td><?= h($affiliate->status) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $affiliate->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $affiliate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affiliate->id)]) ?>
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
