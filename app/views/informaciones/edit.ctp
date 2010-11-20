<div class="informaciones form">
<?php echo $this->Form->create('Informacion');?>
	<fieldset>
 		<legend><?php __('Edit Informacion'); ?></legend>
	<?php
		echo $this->Form->input('informacion_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('referencia');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Informacion.informacion_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Informacion.informacion_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Informaciones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>