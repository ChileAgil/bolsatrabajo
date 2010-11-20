<div class="tipoUsuarios view">
<h2><?php  __('Tipo Usuario');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo Usuario Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoUsuario['TipoUsuario']['tipo_usuario_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo Usuario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tipoUsuario['TipoUsuario']['tipo_usuario']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Usuario', true), array('action' => 'edit', $tipoUsuario['TipoUsuario']['tipo_usuario_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tipo Usuario', true), array('action' => 'delete', $tipoUsuario['TipoUsuario']['tipo_usuario_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipoUsuario['TipoUsuario']['tipo_usuario_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Usuario', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Opciones', true), array('controller' => 'opciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opciones', true), array('controller' => 'opciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Opciones');?></h3>
	<?php if (!empty($tipoUsuario['Opciones'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Opcion Id'); ?></th>
		<th><?php __('Opcion'); ?></th>
		<th><?php __('Tipo Usuario Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php

		$i = 0;
		foreach ($tipoUsuario['Opciones'] as $opciones):
			
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $opciones['opcion_id'];?></td>
			<td><?php echo $opciones['opcion'];?></td>
			<td><?php echo $opciones['tipo_usuario_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'opciones', 'action' => 'view', $opciones['opcion_id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'opciones', 'action' => 'edit', $opciones['opcion_id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'opciones', 'action' => 'delete', $opciones['opcion_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opciones['opcion_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Opciones', true), array('controller' => 'opciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Usuarios');?></h3>
	<?php if (!empty($tipoUsuario['Usuario'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Usuario Id'); ?></th>
		<th><?php __('Nombre'); ?></th>
		<th><?php __('Apellido'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Fecha Nacimiento'); ?></th>
		<th><?php __('Tipo Usuario Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tipoUsuario['Usuario'] as $usuario):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $usuario['usuario_id'];?></td>
			<td><?php echo $usuario['nombre'];?></td>
			<td><?php echo $usuario['apellido'];?></td>
			<td><?php echo $usuario['email'];?></td>
			<td><?php echo $usuario['password'];?></td>
			<td><?php echo $usuario['fecha_nacimiento'];?></td>
			<td><?php echo $usuario['tipo_usuario_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'usuarios', 'action' => 'view', $usuario['usuario_id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'usuarios', 'action' => 'edit', $usuario['usuario_id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'usuarios', 'action' => 'delete', $usuario['usuario_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['usuario_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
