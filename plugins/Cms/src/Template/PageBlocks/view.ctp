<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Page Block'), ['action' => 'edit', $pageBlock->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Page Block'), ['action' => 'delete', $pageBlock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pageBlock->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Page Blocks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page Block'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pages'), ['controller' => 'Pages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page'), ['controller' => 'Pages', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="pageBlocks view large-10 medium-9 columns">
    <h2><?= h($pageBlock->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($pageBlock->name) ?></p>
            <h6 class="subheader"><?= __('Page') ?></h6>
            <p><?= $pageBlock->has('page') ? $this->Html->link($pageBlock->page->name, ['controller' => 'Pages', 'action' => 'view', $pageBlock->page->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($pageBlock->id) ?></p>
            <h6 class="subheader"><?= __('Position') ?></h6>
            <p><?= $this->Number->format($pageBlock->position) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($pageBlock->created) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content') ?></h6>
            <?= $this->Text->autoParagraph(h($pageBlock->content)) ?>
        </div>
    </div>
</div>
