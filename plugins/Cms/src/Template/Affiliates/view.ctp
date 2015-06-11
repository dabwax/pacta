<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Affiliate'), ['action' => 'edit', $affiliate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Affiliate'), ['action' => 'delete', $affiliate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affiliate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Affiliates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affiliate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="affiliates view large-10 medium-9 columns">
    <h2><?= h($affiliate->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($affiliate->name) ?></p>
            <h6 class="subheader"><?= __('Plan') ?></h6>
            <p><?= $affiliate->has('plan') ? $this->Html->link($affiliate->plan->name, ['controller' => 'Plans', 'action' => 'view', $affiliate->plan->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Responsible Name') ?></h6>
            <p><?= h($affiliate->responsible_name) ?></p>
            <h6 class="subheader"><?= __('Responsible Email') ?></h6>
            <p><?= h($affiliate->responsible_email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($affiliate->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Of Accession') ?></h6>
            <p><?= h($affiliate->date_of_accession) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($affiliate->created) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $affiliate->status ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
