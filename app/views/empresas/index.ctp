<div class="empresas index">
	<h2><?php __('Empresas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('empresa_id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_fantasia');?></th>
			<th><?php echo $this->Paginator->sort('razon_social');?></th>
			<th><?php echo $this->Paginator->sort('rut');?></th>
			<th><?php echo $this->Paginator->sort('guion');?></th>
			<th><?php echo $this->Paginator->sort('mision');?></th>
			<th><?php echo $this->Paginator->sort('vision');?></th>
			<th><?php echo $this->Paginator->sort('sitio_web');?></th>
			<th><?php echo $this->Paginator->sort('resena_historica');?></th>
			<th><?php echo $this->Paginator->sort('usuario_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($empresas as $empresa):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $empresa['Empresa']['empresa_id']; ?>&nbsp;</td>
		<td><?php echo $empresa['Empresa']['nombre_fantasia']; ?>&nbsp;</td>
		<td><?php echo $empresa['Empresa']['razon_social']; ?>&nbsp;</td>
		<td><?php echo $empresa['Empresa']['rut']; ?>&nbsp;</td>
		<td><?php echo $empresa['Empresa']['guion']; ?>&nbsp;</td>
		<td><?php echo $empresa['Empresa']['mision']; ?>&nbsp;</td>
		<td><?php echo $empresa['Empresa']['vision']; ?>&nbsp;</td>
		<td><?php echo $empresa['Empresa']['sitio_web']; ?>&nbsp;</td>
		<td><?php echo $empresa['Empresa']['resena_historica']; ?>&nbsp;</td>
		<td><?php echo $empresa['Empresa']['usuario_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $empresa['Empresa']['empresa_id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $empresa['Empresa']['empresa_id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $empresa['Empresa']['empresa_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $empresa['Empresa']['empresa_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Empresa', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>