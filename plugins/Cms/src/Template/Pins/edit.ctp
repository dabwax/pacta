<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pin->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pin->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pins'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="pins form large-10 medium-9 columns">
    <?= $this->Form->create($pin) ?>
    <fieldset>
        <legend><?= __('Edit Pin') ?></legend>
        <?php
            echo $this->Form->input('address');
            echo $this->Form->input('neighborhood');
            echo $this->Form->input('city');
            echo $this->Form->input('state');
            echo $this->Form->input('country');
            echo $this->Form->input('latitude');
            echo $this->Form->input('longitude');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
