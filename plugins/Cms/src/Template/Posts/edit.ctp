<div class="col-lg-12">

<h2 class="titulo-painel"><i class="fa fa-user"></i> Editar Notícia</h2>
<hr>
    <?= $this->Form->create($post, ['class' => 'validate', 'type' => 'file']) ?>
    <fieldset>
        <?php
            echo $this->Form->input('title', ['label' => 'Título']);
            echo $this->Form->input('description', ['class' => 'editor', 'label' => 'Conteúdo']);
            echo $this->Form->input('excerpt', ['class' => 'editor', 'label' => 'Resumo']);
            echo $this->Form->input('published_date', ['class' => 'datepicker', 'type' => 'text', 'label' => 'Data de Publicação', 'value' => (new DateTime('now'))->format("d/m/Y") ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

</div>