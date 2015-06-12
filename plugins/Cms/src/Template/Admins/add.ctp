<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Adicionar Novo Usuário</h2>
<hr>
    <?= $this->Form->create($admin, ['class' => 'validate']) ?>
    <fieldset>
        <?php
            echo $this->Form->input('username', ['label' => 'E-mail', 'required' => true, 'minlength' => 10, 'type' => 'email']);
            echo $this->Form->input('password', ['label' => 'Senha', 'required' => true, 'minlength' => 8, 'maxlength' => 15]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
