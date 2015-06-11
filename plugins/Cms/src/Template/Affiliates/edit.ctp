<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $affiliate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $affiliate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Affiliates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="affiliates form large-10 medium-9 columns">
    <?= $this->Form->create($affiliate) ?>
    <fieldset>
        <legend><?= __('Edit Affiliate') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('date_of_accession');
            echo $this->Form->input('plan_id', ['options' => $plans, 'empty' => true]);
            echo $this->Form->input('responsible_name');
            echo $this->Form->input('responsible_email');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
