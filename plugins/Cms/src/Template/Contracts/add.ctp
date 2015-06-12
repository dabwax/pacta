<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Adicionar Contrato</h2>
<hr>

    <?= $this->Form->create($contract, ['class' => 'validate']) ?>
    <fieldset>
        <?php
            echo $this->Form->input('name', ['label' => 'Nome', 'required' => true, 'minlength' => 10]);
            echo $this->Form->input('address', ['label' => 'Endereço', 'required' => true, 'minlength' => 10]);
            echo $this->Form->input('zip_code', ['label' => 'CEP', 'required' => true, 'minlength' => 8]);
            echo $this->Form->input('city', ['label' => 'Cidade', 'required' => true, 'minlength' => 4]);
            echo $this->Form->input('state', ['label' => 'UF', 'required' => true, 'minlength' => 2]);
            echo $this->Form->input('country', ['label' => 'País', 'required' => true, 'minlength' => 4]);
            echo $this->Form->input('cnpj', ['label' => 'CNPJ', 'required' => true, 'minlength' => 14]);
            echo $this->Form->input('mf', ['label' => 'MF', 'required' => true, 'minlength' => 2]);
            echo $this->Form->input('plan_id', ['options' => $plans, 'empty' => 'Selecionar Plano', 'label' => 'Plano', 'required' => true]);
            echo "<h3 class='titulo-painel'>Representante Legal</h3><hr />";
            echo $this->Form->input('legal_representant', ['label' => 'Nome', 'required' => true, 'minlength' => 4]);
            echo $this->Form->input('rg', ['label' => 'RG', 'required' => true, 'minlength' => 10]);
            echo $this->Form->input('cpf', ['label' => 'CPF', 'required' => true, 'minlength' => 10]);
            echo $this->Form->input('nacionality', ['label' => 'Nacionalidade', 'required' => true, 'minlength' => 4]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
