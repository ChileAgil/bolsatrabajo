<div class="empresas form">
<?php echo $this->Form->create('Empresa');?>
	<fieldset>
 		<legend><?php __('Add Empresa'); ?></legend>
	<?php
		echo $this->Form->input('nombre_fantasia');
		echo $this->Form->input('razon_social');
		echo $this->Form->input('rut');
		echo $this->Form->input('guion');
		echo $this->Form->input('mision');
		echo $this->Form->input('vision');
		echo $this->Form->input('sitio_web');
		echo $this->Form->input('resena_historica');
		echo $this->Form->input('usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Empresas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>