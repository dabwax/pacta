<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Editar Usuário</h2>
<hr>

    <?= $this->Form->create($admin, ['class' => 'validate']) ?>
    <fieldset>
        <?php
            echo $this->Form->input('username', ['label' => 'E-mail', 'required' => true, 'minlength' => 10, 'type' => 'email']);
            echo $this->Form->input('password', ['label' => 'Senha', 'required' => true, 'minlength' => 8, 'maxlength' => 15, 'value' => '']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>

<div class="col-lg-12 col-excluir-registro">
<?= $this->Form->postLink(
                __('Excluir este registro'),
                ['action' => 'delete', $admin->id],
                ['confirm' => __('Você tem certeza disto? Esta ação é PERMANENTE!', $admin->id), 'class' => 'btn btn-danger btn-block']
            )
        ?>
</div>