<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Listar Associados</h2>
<hr>

<div class="form-group">
    <?= $this->Html->link(__('Adicionar Novo Associado'), ['action' => 'add'], ['class' => 'btn btn-block btn-primary']) ?>
</div>

    <table class="table">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('status', 'S.') ?></th>
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('name', 'Associado') ?></th>
            <th><?= $this->Paginator->sort('plan_id', 'Plano') ?></th>
            <th><?= $this->Paginator->sort('responsible_email', 'E-mail') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($affiliates as $affiliate): ?>
        <tr>
            <? if($affiliate->status == 1 ) : ?><td> <span class="label label-success" title="Indisponível">&nbsp;</span> </td><?php endif; ?>
            <? if($affiliate->status == 0 ) : ?><td> <span class="label label-danger" title="Disponível">&nbsp;</span> </td><?php endif; ?>
            <td><?= $this->Number->format($affiliate->id) ?></td>
            <td><?= h($affiliate->name) ?></td>
            <td>
                <?= $affiliate->has('plan') ? $this->Html->link($affiliate->plan->name, ['controller' => 'Plans', 'action' => 'edit', $affiliate->plan->id], ['class' => 'label label-default']) : '' ?>
            </td>
            <td><?= h($affiliate->responsible_email) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $affiliate->id], ['class' => 'btn btn-primary']) ?>

                <? if($affiliate->status == 1 ) : ?>
                    <?= $this->Form->postLink(__('Desaprovar'), ['action' => 'disapprove_approve', $affiliate->id, 0], ['class' => 'btn btn-warning', 'confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $affiliate->id)]) ?>
                <?php endif; ?>

                <? if($affiliate->status == 0 ) : ?>
                    <?= $this->Form->postLink(__('Aprovar'), ['action' => 'disapprove_approve', $affiliate->id, 1], ['class' => 'btn btn-success', 'confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $affiliate->id)]) ?>
                <?php endif; ?>
                <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $affiliate->id], ['class' => 'btn btn-danger', 'confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $affiliate->id)]) ?>
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
