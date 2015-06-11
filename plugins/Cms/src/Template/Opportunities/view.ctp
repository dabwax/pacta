<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Opportunity'), ['action' => 'edit', $opportunity->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opportunity'), ['action' => 'delete', $opportunity->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunity->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opportunities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opportunity Cards'), ['controller' => 'OpportunityCards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opportunity Card'), ['controller' => 'OpportunityCards', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="opportunities view large-10 medium-9 columns">
    <h2><?= h($opportunity->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($opportunity->name) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= h($opportunity->role) ?></p>
            <h6 class="subheader"><?= __('Local') ?></h6>
            <p><?= h($opportunity->local) ?></p>
            <h6 class="subheader"><?= __('City') ?></h6>
            <p><?= h($opportunity->city) ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= h($opportunity->state) ?></p>
            <h6 class="subheader"><?= __('Country') ?></h6>
            <p><?= h($opportunity->country) ?></p>
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($opportunity->type) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($opportunity->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date') ?></h6>
            <p><?= h($opportunity->date) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($opportunity->description)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related OpportunityCards') ?></h4>
    <?php if (!empty($opportunity->opportunity_cards)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Date') ?></th>
            <th><?= __('Opportunity Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($opportunity->opportunity_cards as $opportunityCards): ?>
        <tr>
            <td><?= h($opportunityCards->id) ?></td>
            <td><?= h($opportunityCards->name) ?></td>
            <td><?= h($opportunityCards->email) ?></td>
            <td><?= h($opportunityCards->date) ?></td>
            <td><?= h($opportunityCards->opportunity_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'OpportunityCards', 'action' => 'view', $opportunityCards->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'OpportunityCards', 'action' => 'edit', $opportunityCards->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'OpportunityCards', 'action' => 'delete', $opportunityCards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opportunityCards->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
