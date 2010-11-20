<div class="tipoUsuarios form">
<?php echo $this->Form->create('TipoUsuario');?>
	<fieldset>
 		<legend><?php __('Edit Tipo Usuario'); ?></legend>
	<?php
		echo $this->Form->input('tipo_usuario_id');
		echo $this->Form->input('tipo_usuario');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('TipoUsuario.tipo_usuario_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('TipoUsuario.tipo_usuario_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Opciones', true), array('controller' => 'opciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opciones', true), array('controller' => 'opciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>