<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Page Blocks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pages'), ['controller' => 'Pages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Page'), ['controller' => 'Pages', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="pageBlocks form large-10 medium-9 columns">
    <?= $this->Form->create($pageBlock) ?>
    <fieldset>
        <legend><?= __('Add Page Block') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('content', ['class' => 'editor']);
            echo $this->Form->input('page_id', ['options' => $pages, 'empty' => true]);
            echo $this->Form->input('position', ['value' => 0]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
