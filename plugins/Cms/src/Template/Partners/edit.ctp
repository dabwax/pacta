<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $partner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $partner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Partners'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="partners form large-10 medium-9 columns">
    <?= $this->Form->create($partner, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Partner') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('attachment', ['type' => 'file']);
            echo $this->Form->input('url');
        ?>
        <strong>Anexo Atual</strong>

        <div class="clearfix"></div>

        <?php echo $this->Html->upload($partner->attachment, ['style' => 'max-height: 360px;']); ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
