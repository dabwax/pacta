<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="services form large-10 medium-9 columns">
    <?= $this->Form->create($service) ?>
    <fieldset>
        <legend><?= __('Add Service') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('content', ['class' => 'editor']);
            echo $this->Form->input('tab_1_title');
            echo $this->Form->input('tab_1_content', ['class' => 'editor']);
            echo $this->Form->input('tab_2_title');
            echo $this->Form->input('tab_2_content', ['class' => 'editor']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
