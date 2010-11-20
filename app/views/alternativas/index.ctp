<div class="alternativas index">
	<h2><?php __('Alternativas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('alternativa_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th>
			<th><?php echo $this->Paginator->sort('opcion_id');?></th>
			<th><?php echo $this->Paginator->sort('lugar');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($alternativas as $alternativa):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $alternativa['Alternativa']['alternativa_id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alternativa['Usuario']['usuario_id'], array('controller' => 'usuarios', 'action' => 'view', $alternativa['Usuario']['usuario_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alternativa['Opcion']['opcion_id'], array('controller' => 'opciones', 'action' => 'view', $alternativa['Opcion']['opcion_id'])); ?>
		</td>
		<td><?php echo $alternativa['Alternativa']['lugar']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $alternativa['Alternativa']['alternativa_id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $alternativa['Alternativa']['alternativa_id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $alternativa['Alternativa']['alternativa_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $alternativa['Alternativa']['alternativa_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Alternativa', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Opciones', true), array('controller' => 'opciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opcion', true), array('controller' => 'opciones', 'action' => 'add')); ?> </li>
	</ul>
</div>