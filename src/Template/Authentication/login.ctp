<?php echo $this->Form->create($affiliate); ?>

<?php echo $this->Form->input("responsible_email"); ?>
<?php echo $this->Form->input("responsible_password", ['type' => 'password'] ); ?>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Entrar</button>
</div>

<?php echo $this->Form->end(); ?>