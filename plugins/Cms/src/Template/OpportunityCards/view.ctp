<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Opportunity Card'), ['action' => 'edit', $opportunityCard->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opportunity Card'), ['action' => 'delete', $opportunityCard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityCard->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Cards'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Card'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="opportunityCards view large-10 medium-9 columns">
    <h2><?= h($opportunityCard->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($opportunityCard->name) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($opportunityCard->email) ?></p>
            <h6 class="subheader"><?= __('Opportunity') ?></h6>
            <p><?= $opportunityCard->has('opportunity') ? $this->Html->link($opportunityCard->opportunity->name, ['controller' => 'Opportunities', 'action' => 'view', $opportunityCard->opportunity->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($opportunityCard->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($opportunityCard->date) ?></p>
        </div>
    </div>
</div>
