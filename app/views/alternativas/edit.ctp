<div class="alternativas form">
<?php echo $this->Form->create('Alternativa');?>
	<fieldset>
 		<legend><?php __('Edit Alternativa'); ?></legend>
	<?php
		echo $this->Form->input('alternativa_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('opcion_id');
		echo $this->Form->input('lugar');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Alternativa.alternativa_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Alternativa.alternativa_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Alternativas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Opciones', true), array('controller' => 'opciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opcion', true), array('controller' => 'opciones', 'action' => 'add')); ?> </li>
	</ul>
</div>