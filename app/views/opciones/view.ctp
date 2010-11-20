<div class="opciones view">
<h2><?php  __('Opcion');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Opcion Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $opcion['Opcion']['opcion_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Opcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $opcion['Opcion']['opcion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo Usuario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($opcion['TipoUsuario']['tipo_usuario_id'], array('controller' => 'tipo_usuarios', 'action' => 'view', $opcion['TipoUsuario']['tipo_usuario_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Opcion', true), array('action' => 'edit', $opcion['Opcion']['opcion_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Opcion', true), array('action' => 'delete', $opcion['Opcion']['opcion_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opcion['Opcion']['opcion_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Opciones', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opcion', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios', true), array('controller' => 'tipo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Usuario', true), array('controller' => 'tipo_usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
