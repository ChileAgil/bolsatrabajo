<div class="users form">
<?php echo $this->Form->create('User');?>


	<fieldset>
 		<legend><?php __('Registro de usuario'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('fecha_nacimiento',array(
		'type'  => 'date',
		'label' => 'Fecha de nacimiento',
		'minYear' => 1940,
		'maxYear' => 1992,
		'separator' => '/',
		'empty' => true,
		'dateFormat' => 'DMY'
		# default order m/d/y
		/*'selected' => array(
		'day' =>  '09',
		'month' => '03',
		
		'year' => '1985'
		 )*/
		));
		echo $this->Form->input('tipo_usuario_id');
	?>

	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios', true), array('controller' => 'tipo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Usuario', true), array('controller' => 'tipo_usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alternativas', true), array('controller' => 'alternativas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alternativa', true), array('controller' => 'alternativas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Informaciones', true), array('controller' => 'informaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Informacion', true), array('controller' => 'informaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
