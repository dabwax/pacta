<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Page'), ['action' => 'edit', $page->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Page'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Page Blocks'), ['controller' => 'PageBlocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page Block'), ['controller' => 'PageBlocks', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="pages view large-10 medium-9 columns">
    <h2><?= h($page->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($page->name) ?></p>
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($page->slug) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($page->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($page->created) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content') ?></h6>
            <?= $this->Text->autoParagraph(h($page->content)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related PageBlocks') ?></h4>
    <?php if (!empty($page->page_blocks)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Content') ?></th>
            <th><?= __('Page Id') ?></th>
            <th><?= __('Position') ?></th>
            <th><?= __('Created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($page->page_blocks as $pageBlocks): ?>
        <tr>
            <td><?= h($pageBlocks->id) ?></td>
            <td><?= h($pageBlocks->name) ?></td>
            <td><?= h($pageBlocks->content) ?></td>
            <td><?= h($pageBlocks->page_id) ?></td>
            <td><?= h($pageBlocks->position) ?></td>
            <td><?= h($pageBlocks->created) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'PageBlocks', 'action' => 'view', $pageBlocks->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'PageBlocks', 'action' => 'edit', $pageBlocks->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PageBlocks', 'action' => 'delete', $pageBlocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pageBlocks->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
