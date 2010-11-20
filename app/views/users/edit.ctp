<div class="usuarios form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Modificar Datos Personales'); ?></legend>
	<?php
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('email');
		//echo $this->Form->input('password');
		echo $this->Form->input('fecha_nacimiento');
	//	echo $this->Form->input('tipo_usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php if ($this->data['User']['tipo_usuario_id'] == "3") :?>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Usuario.usuario_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Usuario.usuario_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios', true), array('controller' => 'tipo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Usuario', true), array('controller' => 'tipo_usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alternativas', true), array('controller' => 'alternativas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alternativa', true), array('controller' => 'alternativas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Informaciones', true), array('controller' => 'informaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Informacion', true), array('controller' => 'informaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php endif;?>