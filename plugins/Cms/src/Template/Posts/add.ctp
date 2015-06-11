<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="posts form large-10 medium-9 columns">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('description', ['class' => 'editor']);
            echo $this->Form->input('excerpt', ['class' => 'editor']);
            echo $this->Form->input('published_date', ['class' => 'datepicker', 'type' => 'text']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
