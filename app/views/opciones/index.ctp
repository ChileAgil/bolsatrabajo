

<div class="entry">



<div class="opciones index">
	

	<h2><?php __('Opciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('opcion_id');?></th>
			<th><?php echo $this->Paginator->sort('opcion');?></th>
			<th><?php echo $this->Paginator->sort('tipo_usuario_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($opciones as $opcion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $opcion['Opcion']['opcion_id']; ?>&nbsp;</td>
		<td><?php echo $opcion['Opcion']['opcion']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($opcion['TipoUsuario']['tipo_usuario'], array('controller' => 'tipo_usuarios', 'action' => 'view', $opcion['TipoUsuario']['tipo_usuario_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $opcion['Opcion']['opcion_id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $opcion['Opcion']['opcion_id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $opcion['Opcion']['opcion_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opcion['Opcion']['opcion_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Opcion', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios', true), array('controller' => 'tipo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Usuario', true), array('controller' => 'tipo_usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>