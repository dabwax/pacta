<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Opportunities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opportunity Cards'), ['controller' => 'OpportunityCards', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity Card'), ['controller' => 'OpportunityCards', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="opportunities form large-10 medium-9 columns">
    <?= $this->Form->create($opportunity) ?>
    <fieldset>
        <legend><?= __('Add Opportunity') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('role');
            echo $this->Form->input('local');
            echo $this->Form->input('city');
            echo $this->Form->input('state');
            echo $this->Form->input('country');
            echo $this->Form->input('date');
            echo $this->Form->input('type');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
