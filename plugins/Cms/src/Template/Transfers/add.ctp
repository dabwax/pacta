<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Transfers'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="transfers form large-10 medium-9 columns">
    <?= $this->Form->create($transfer) ?>
    <fieldset>
        <legend><?= __('Add Transfer') ?></legend>
        <?php
            echo $this->Form->input('attachment');
            echo $this->Form->input('name');
            echo $this->Form->input('type');
            echo $this->Form->input('user_id');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
