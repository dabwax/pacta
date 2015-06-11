<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Opportunity Cards'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opportunities'), ['controller' => 'Opportunities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Opportunity'), ['controller' => 'Opportunities', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="opportunityCards form large-10 medium-9 columns">
    <?= $this->Form->create($opportunityCard) ?>
    <fieldset>
        <legend><?= __('Add Opportunity Card') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('date_of_accession', ['class' => 'datepicker', 'type' => 'text']);
            echo $this->Form->input('opportunity_id', ['options' => $opportunities, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
