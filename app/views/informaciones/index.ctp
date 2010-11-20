<div class="informaciones index">
	<h2><?php __('Informaciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('informacion_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th>
			<th><?php echo $this->Paginator->sort('referencia');?></th>
			<th><?php echo $this->Paginator->sort('descripcion');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($informaciones as $informacion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $informacion['Informacion']['informacion_id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($informacion['Usuario']['usuario_id'], array('controller' => 'usuarios', 'action' => 'view', $informacion['Usuario']['usuario_id'])); ?>
		</td>
		<td><?php echo $informacion['Informacion']['referencia']; ?>&nbsp;</td>
		<td><?php echo $informacion['Informacion']['descripcion']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $informacion['Informacion']['informacion_id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $informacion['Informacion']['informacion_id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $informacion['Informacion']['informacion_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $informacion['Informacion']['informacion_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Informacion', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>