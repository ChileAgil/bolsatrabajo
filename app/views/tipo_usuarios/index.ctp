<div class="tipoUsuarios index">
	<h2><?php __('Tipo Usuarios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('tipo_usuario_id');?></th>
			<th><?php echo $this->Paginator->sort('tipo_usuario');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tipoUsuarios as $tipoUsuario):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tipoUsuario['TipoUsuario']['tipo_usuario_id']; ?>&nbsp;</td>
		<td><?php echo $tipoUsuario['TipoUsuario']['tipo_usuario']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tipoUsuario['TipoUsuario']['tipo_usuario_id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tipoUsuario['TipoUsuario']['tipo_usuario_id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tipoUsuario['TipoUsuario']['tipo_usuario_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipoUsuario['TipoUsuario']['tipo_usuario_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tipo Usuario', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Opciones', true), array('controller' => 'opciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opciones', true), array('controller' => 'opciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>