<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Plan'), ['action' => 'edit', $plan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Plan'), ['action' => 'delete', $plan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Affiliates'), ['controller' => 'Affiliates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Affiliate'), ['controller' => 'Affiliates', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="plans view large-10 medium-9 columns">
    <h2><?= h($plan->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($plan->name) ?></p>
            <h6 class="subheader"><?= __('Price') ?></h6>
            <p><?= h($plan->price) ?></p>
            <h6 class="subheader"><?= __('Destaque 1') ?></h6>
            <p><?= h($plan->destaque_1) ?></p>
            <h6 class="subheader"><?= __('Destaque 2') ?></h6>
            <p><?= h($plan->destaque_2) ?></p>
            <h6 class="subheader"><?= __('Destaque 3') ?></h6>
            <p><?= h($plan->destaque_3) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($plan->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($plan->created) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content') ?></h6>
            <?= $this->Text->autoParagraph(h($plan->content)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Affiliates') ?></h4>
    <?php if (!empty($plan->affiliates)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Date Of Accession') ?></th>
            <th><?= __('Plan Id') ?></th>
            <th><?= __('Responsible Name') ?></th>
            <th><?= __('Responsible Email') ?></th>
            <th><?= __('Status') ?></th>
            <th><?= __('Created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($plan->affiliates as $affiliates): ?>
        <tr>
            <td><?= h($affiliates->id) ?></td>
            <td><?= h($affiliates->name) ?></td>
            <td><?= h($affiliates->date_of_accession) ?></td>
            <td><?= h($affiliates->plan_id) ?></td>
            <td><?= h($affiliates->responsible_name) ?></td>
            <td><?= h($affiliates->responsible_email) ?></td>
            <td><?= h($affiliates->status) ?></td>
            <td><?= h($affiliates->created) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Affiliates', 'action' => 'view', $affiliates->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Affiliates', 'action' => 'edit', $affiliates->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Affiliates', 'action' => 'delete', $affiliates->id], ['confirm' => __('Are you sure you want to delete # {0}?', $affiliates->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Contracts') ?></h4>
    <?php if (!empty($plan->contracts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('Zip Code') ?></th>
            <th><?= __('City') ?></th>
            <th><?= __('State') ?></th>
            <th><?= __('Country') ?></th>
            <th><?= __('Cnpj') ?></th>
            <th><?= __('Mf') ?></th>
            <th><?= __('Plan Id') ?></th>
            <th><?= __('Legal Representant') ?></th>
            <th><?= __('Rg') ?></th>
            <th><?= __('Cpf') ?></th>
            <th><?= __('Nacionality') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($plan->contracts as $contracts): ?>
        <tr>
            <td><?= h($contracts->id) ?></td>
            <td><?= h($contracts->name) ?></td>
            <td><?= h($contracts->address) ?></td>
            <td><?= h($contracts->zip_code) ?></td>
            <td><?= h($contracts->city) ?></td>
            <td><?= h($contracts->state) ?></td>
            <td><?= h($contracts->country) ?></td>
            <td><?= h($contracts->cnpj) ?></td>
            <td><?= h($contracts->mf) ?></td>
            <td><?= h($contracts->plan_id) ?></td>
            <td><?= h($contracts->legal_representant) ?></td>
            <td><?= h($contracts->rg) ?></td>
            <td><?= h($contracts->cpf) ?></td>
            <td><?= h($contracts->nacionality) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Contracts', 'action' => 'view', $contracts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Contracts', 'action' => 'edit', $contracts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contracts', 'action' => 'delete', $contracts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contracts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
