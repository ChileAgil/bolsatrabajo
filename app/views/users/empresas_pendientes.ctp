    <h2><?php __('Empresas Pendientes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>Empresa</th>
			<th>Razon Social</th>
			<th>Usuario Representante</th>
			<th>Email</th>
			<th class="actions"><?php __('Acciones');?></th>
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
		<td><?php echo $empresa['Empresa']['nombre_fantasia']; ?>&nbsp;</td>
		<td><?php echo $empresa['Empresa']['razon_social']; ?>&nbsp;</td>
		<td><?php echo $empresa['User']['nombre'] .' '. $empresa['User']['apellido']; ?>&nbsp;</td>
		<td><?php echo $empresa['User']['email']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver detalles', true), array('action' => 'detalles_empresa', $empresa['Empresa']['empresa_id'])); ?>
		</td>
	</tr>
    <?php endforeach; ?>
	</table>