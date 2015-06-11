<div class="actions columns large-2 medium-3">
    <h3><?= __('Ações') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $admin->id],
                ['confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $admin->id), 'class' => 'btn btn-danger']
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Administradores'), ['action' => 'index'], ['class' => 'btn btn-default']) ?></li>
    </ul>
</div>
<div class="admins form large-10 medium-9 columns">
    <?= $this->Form->create($admin) ?>
    <fieldset>
        <legend><?= __('Editar Administrador') ?></legend>
        <?php
            echo $this->Form->input('username', ['label' => 'E-mail']);
            echo $this->Form->input('password', ['label' => 'Senha', 'value' => '']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
