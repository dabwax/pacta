<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Opportunity Card'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="opportunityCards index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('date_of_accession') ?></th>
            <th><?= $this->Paginator->sort('opportunity_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($opportunityCards as $opportunityCard): ?>
        <tr>
            <td><?= $this->Number->format($opportunityCard->id) ?></td>
            <td><?= h($opportunityCard->name) ?></td>
            <td><?= h($opportunityCard->email) ?></td>
            <td><?= h($opportunityCard->date_of_accession) ?></td>
            <td>
                <?= $opportunityCard->has('opportunity') ? $this->Html->link($opportunityCard->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $opportunityCard->opportunity->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $opportunityCard->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $opportunityCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityCard->id)]) ?>
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
