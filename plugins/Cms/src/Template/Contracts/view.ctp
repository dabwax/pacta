<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contract'), ['action' => 'edit', $contract->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contract'), ['action' => 'delete', $contract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['controller' => 'Plans', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['controller' => 'Plans', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contracts view large-10 medium-9 columns">
    <h2><?= h($contract->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($contract->name) ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($contract->address) ?></p>
            <h6 class="subheader"><?= __('Zip Code') ?></h6>
            <p><?= h($contract->zip_code) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($contract->city) ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= h($contract->state) ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= h($contract->country) ?></p>
            <h6 class="subheader"><?= __('Cnpj') ?></h6>
            <p><?= h($contract->cnpj) ?></p>
            <h6 class="subheader"><?= __('Mf') ?></h6>
            <p><?= h($contract->mf) ?></p>
            <h6 class="subheader"><?= __('Plan') ?></h6>
            <p><?= $contract->has('plan') ? $this->Html->link($contract->plan->name, ['controller' => 'Plans', 'action' => 'view', $contract->plan->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Legal Representant') ?></h6>
            <p><?= h($contract->legal_representant) ?></p>
            <h6 class="subheader"><?= __('Rg') ?></h6>
            <p><?= h($contract->rg) ?></p>
            <h6 class="subheader"><?= __('Cpf') ?></h6>
            <p><?= h($contract->cpf) ?></p>
            <h6 class="subheader"><?= __('Nacionality') ?></h6>
            <p><?= h($contract->nacionality) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contract->id) ?></p>
        </div>
    </div>
</div>
