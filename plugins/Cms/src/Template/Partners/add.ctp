<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Partners'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="partners form large-10 medium-9 columns">
    <?= $this->Form->create($partner) ?>
    <fieldset>
        <legend><?= __('Add Partner') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('attachment');
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
