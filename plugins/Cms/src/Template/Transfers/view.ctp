<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Transfer'), ['action' => 'edit', $transfer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transfer'), ['action' => 'delete', $transfer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transfer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transfers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transfer'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="transfers view large-10 medium-9 columns">
    <h2><?= h($transfer->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Attachment') ?></h6>
            <p><?= h($transfer->attachment) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($transfer->name) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($transfer->type) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($transfer->id) ?></p>
            <h6 class="subheader"><?= __('User Id') ?></h6>
            <p><?= $this->Number->format($transfer->user_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($transfer->created) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $transfer->status ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
