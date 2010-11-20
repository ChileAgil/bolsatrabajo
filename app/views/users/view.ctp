<div class="usuarios view">
<h2><?php  __('Usuario');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuario Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['User']['usuario_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['User']['nombre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Apellido'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['User']['apellido']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Nacimiento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usuario['User']['fecha_nacimiento']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo Usuario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($usuario['TipoUsuario']['tipo_usuario'], array('controller' => 'tipo_usuarios', 'action' => 'view', $usuario['TipoUsuario']['tipo_usuario_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario', true), array('action' => 'edit', $usuario['User']['usuario_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Usuario', true), array('action' => 'delete', $usuario['User']['usuario_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['User']['usuario_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios', true), array('controller' => 'tipo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Usuario', true), array('controller' => 'tipo_usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alternativas', true), array('controller' => 'alternativas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alternativa', true), array('controller' => 'alternativas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Informaciones', true), array('controller' => 'informaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Informacion', true), array('controller' => 'informaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Alternativas');?></h3>
	<?php if (!empty($usuario['Alternativa'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Alternativa Id'); ?></th>
		<th><?php __('Usuario Id'); ?></th>
		<th><?php __('Opcion Id'); ?></th>
		<th><?php __('Lugar'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Alternativa'] as $alternativa):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $alternativa['alternativa_id'];?></td>
			<td><?php echo $alternativa['usuario_id'];?></td>
			<td><?php echo $alternativa['opcion_id'];?></td>
			<td><?php echo $alternativa['lugar'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'alternativas', 'action' => 'view', $alternativa['alternativa_id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'alternativas', 'action' => 'edit', $alternativa['alternativa_id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'alternativas', 'action' => 'delete', $alternativa['alternativa_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $alternativa['alternativa_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Alternativa', true), array('controller' => 'alternativas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Informaciones');?></h3>
	<?php if (!empty($usuario['Informacion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Informacion Id'); ?></th>
		<th><?php __('Usuario Id'); ?></th>
		<th><?php __('Referencia'); ?></th>
		<th><?php __('Descripcion'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Informacion'] as $informacion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $informacion['informacion_id'];?></td>
			<td><?php echo $informacion['usuario_id'];?></td>
			<td><?php echo $informacion['referencia'];?></td>
			<td><?php echo $informacion['descripcion'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'informaciones', 'action' => 'view', $informacion['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'informaciones', 'action' => 'edit', $informacion['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'informaciones', 'action' => 'delete', $informacion['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $informacion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Informacion', true), array('controller' => 'informaciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
