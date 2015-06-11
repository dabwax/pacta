<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="banners form large-10 medium-9 columns">
    <?= $this->Form->create($banner, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Banner') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('description', ['class' => 'editor']);
            echo $this->Form->input('attachment', ['type' => 'file']);
            echo $this->Form->input('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
