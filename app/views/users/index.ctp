<div class="usuarios index">
	<h2><?php __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th>
			<th><?php echo $this->Paginator->sort('nombre');?></th>
			<th><?php echo $this->Paginator->sort('apellido');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento');?></th>
			<th><?php echo $this->Paginator->sort('tipo_usuario_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($usuarios as $usuario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $usuario['User']['usuario_id']; ?>&nbsp;</td>
		<td><?php echo $usuario['User']['nombre']; ?>&nbsp;</td>
		<td><?php echo $usuario['User']['apellido']; ?>&nbsp;</td>
		<td><?php echo $usuario['User']['email']; ?>&nbsp;</td>
		<td><?php echo $usuario['User']['fecha_nacimiento']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usuario['TipoUsuario']['tipo_usuario'], array('controller' => 'tipo_usuarios', 'action' => 'view', $usuario['TipoUsuario']['tipo_usuario_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $usuario['User']['usuario_id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $usuario['User']['usuario_id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $usuario['User']['usuario_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usuario['User']['usuario_id'])); ?>
		</td>
	</tr>
    <?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios', true), array('controller' => 'tipo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Usuario', true), array('controller' => 'tipo_usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alternativas', true), array('controller' => 'alternativas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alternativa', true), array('controller' => 'alternativas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Informaciones', true), array('controller' => 'informaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Informacion', true), array('controller' => 'informaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>