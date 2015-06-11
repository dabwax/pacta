<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Pages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Page Blocks'), ['controller' => 'PageBlocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Page Block'), ['controller' => 'PageBlocks', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="pages form large-10 medium-9 columns">
    <?= $this->Form->create($page) ?>
    <fieldset>
        <legend><?= __('Add Page') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('content');
            echo $this->Form->input('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
