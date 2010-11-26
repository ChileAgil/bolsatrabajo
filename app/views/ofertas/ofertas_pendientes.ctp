<h2><?php __('Ofertas Pendientes');?></h2>
<?php //debug($ofertas);?>
<table cellpadding="0" cellspacing="0">
<tr>
		<th>Oferta</th>
		<th>Empresa</th>
		<th>Título</th>
		<th>Cargo</th>
		<th>Descripción</th>
		<th class="actions"><?php __('Acciones');?></th>
</tr>
<?php
$i = 0;
foreach ($ofertas as $oferta):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
<tr<?php echo $class;?>>
	<td><?php echo $oferta['Oferta']['oferta_id']; ?>&nbsp;</td>

	<td><?php 
	if( $oferta['Empresa']['nombre_fantasia'])
		echo $oferta['Empresa']['nombre_fantasia']; 
	else
		echo $oferta['Oferta']['nombre_empresa'];
	?>&nbsp;</td>
	<td><?php echo $oferta['Oferta']['titulo']; ?>&nbsp;</td>
	<td><?php echo $oferta['Oferta']['cargo']; ?>&nbsp;</td>
	<td><?php echo $oferta['Oferta']['descripcion']; ?>&nbsp;</td>
	
	<td class="actions">
		<?php echo $this->Html->link(__('Ver detalles', true), array('action' => 'detalles_ofertas', $oferta['Oferta']['oferta_id'])); ?>
	</td>
</tr>
<?php endforeach; ?>
</table>