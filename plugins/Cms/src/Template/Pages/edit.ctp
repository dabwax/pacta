<div class="col-lg-12">
    <?= $this->Form->create($page, ['class' => 'validate']) ?>
    <fieldset>
        <h2 class="titulo-painel"><i class="fa fa-user"></i> <?= __('Editar Página') ?></h2>
        <hr>
        <?php
            echo $this->Form->input('name', ['label' => 'Nome', 'required' => true]);
            echo $this->Form->input('content', ['class' => 'editor', 'label' => 'Conteúdo']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div class="col-lg-12 col-excluir-registro form-group">
<?= $this->Form->postLink(
                __('Excluir este registro'),
                ['action' => 'delete', $page->id],
                ['class' => 'btn btn-danger btn-block', 'confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $page->id)]
            )
        ?>
</div>

<div class="col-lg-12 col-excluir-registro form-group">
<?= $this->Html->link(
                __('Adicionar novo bloco de conteúdo'),
                ['controller' => 'page_blocks', 'action' => 'add', $page->id],
                ['class' => 'btn btn-primary btn-block']
            )
        ?>
</div>

<div class="col-lg-12">

    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('name', 'Nome') ?></th>
            <th><?= $this->Paginator->sort('position', 'Posição') ?></th>
            <th><?= $this->Paginator->sort('created', 'Data de Criação') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($pageBlocks as $pageBlock): ?>
        <tr>
            <td><?= $this->Number->format($pageBlock->id) ?></td>
            <td><?= h($pageBlock->name) ?></td>
            <td><?= $this->Number->format($pageBlock->position) ?></td>
            <td><?= h($pageBlock->created->format("d/m/Y")) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['controller' => 'page_blocks', 'action' => 'edit', $pageBlock->id, $pageBlock->page_id], ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->postLink(__('Excluir'), ['controller' => 'page_blocks', 'action' => 'delete', $pageBlock->id, $pageBlock->page_id], ['class' => 'btn btn-danger', 'confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $pageBlock->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>


</div>