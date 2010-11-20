<div class="opciones form">
<?php echo $this->Form->create('Opcion');?>
	<fieldset>
 		<legend><?php __('Edit Opcion'); ?></legend>
	<?php
		echo $this->Form->input('opcion_id');
		echo $this->Form->input('opcion');
		echo $this->Form->input('tipo_usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Opcion.opcion_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Opcion.opcion_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Opciones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios', true), array('controller' => 'tipo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Usuario', true), array('controller' => 'tipo_usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>