<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Listar Usuários</h2>
<hr>

<div class="form-group">
<?= $this->Html->link(__('Adicionar Novo'), ['action' => 'add'], ['class' => 'btn btn-primary btn-block']) ?>
</div>

    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('username', 'Usuário') ?></th>
            <th><?= $this->Paginator->sort('created', 'Data de Criação') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($admins as $a): ?>
        <tr>
            <td>#<?= $this->Number->format($a->id) ?></td>
            <td><?= h($a->username) ?></td>
            <td><?= h($a->created->format("d/m/Y H:i:s")) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $a->id], ['class' => 'btn btn-primary']) ?>

                <?php if($a->id != $admin->id) : ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $a->id], ['class' => 'btn btn-danger', 'confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $a->id)]) ?>
                <?php endif; ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
    </div>
</div>
