<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Pin'), ['action' => 'edit', $pin->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pin'), ['action' => 'delete', $pin->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pin->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pins'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pin'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="pins view large-10 medium-9 columns">
    <h2><?= h($pin->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($pin->address) ?></p>
            <h6 class="subheader"><?= __('Neighborhood') ?></h6>
            <p><?= h($pin->neighborhood) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($pin->city) ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= h($pin->state) ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= h($pin->country) ?></p>
            <h6 class="subheader"><?= __('Latitude') ?></h6>
            <p><?= h($pin->latitude) ?></p>
            <h6 class="subheader"><?= __('Longitude') ?></h6>
            <p><?= h($pin->longitude) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($pin->type) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($pin->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($pin->created) ?></p>
        </div>
    </div>
</div>
