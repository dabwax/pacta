<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $plan->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $plan->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Plans'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Affiliates'), ['controller' => 'Affiliates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Affiliate'), ['controller' => 'Affiliates', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="plans form large-10 medium-9 columns">
    <?= $this->Form->create($plan) ?>
    <fieldset>
        <legend><?= __('Edit Plan') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('content');
            echo $this->Form->input('price');
            echo $this->Form->input('destaque_1');
            echo $this->Form->input('destaque_2');
            echo $this->Form->input('destaque_3');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
