<div class="ofertas index">
	<h2><?php __('Ofertas');?></h2>
<?php //debug($ofertas);?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('empresa_id');?></th>
			<th><?php echo $this->Paginator->sort('titulo');?></th>
			<th><?php echo $this->Paginator->sort('cargo');?></th>
		<th><?php echo $this->Paginator->sort('sueldo');?></th>
			<th><?php echo $this->Paginator->sort('nivel_practica');?></th>
		
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
//	debug($ofertas);
	foreach ($ofertas as $oferta):
	//debug($oferta);
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		
		<td>
			<?php 
			if(isset($oferta['Oferta']['nombre_empresa'])){
				echo $oferta['Oferta']['nombre_empresa'];
			}
			else{
				echo $oferta['Empresa']['nombre_fantasia'];//, array('controller' => 'empresas', 'action' => 'view', $oferta['Empresa']['empresa_id']));
				
			}
			 ?>
		</td>
		<td><?php echo $oferta['Oferta']['titulo']; ?>&nbsp;</td>
		<td><?php echo $oferta['Oferta']['cargo']; ?>&nbsp;</td>
	
		<td><?php echo $oferta['Oferta']['sueldo']; ?>&nbsp;</td>
		<td><?php echo $oferta['Oferta']['nivel_practica']; ?>&nbsp;</td>
	
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $oferta['Oferta']['oferta_id'])); ?>
			<?php
			if($oferta['Empresa']['usuario_id'] == $usuario_id || $nivelusuario > 3):
			?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $oferta['Oferta']['oferta_id'])); ?>
			<?php endif;?>
			<?php //echo $this->Html->link(__('Delete', true), array('action' => 'delete', $oferta['Oferta']['oferta_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $oferta['Oferta']['oferta_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% registros de un total de %count% , comenzando en el registro %start%, finalizando en %end%', true)
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
	<?php if($nivelusuario > 1):?>
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Oferta', true), array('action' => 'add')); ?></li>
		<?php endif;?>
		<?php if($nivelusuario > 2):?>
		<li><?php // echo $this->Html->link(__('List Empresas', true), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		
		<?php endif;?>
	
	</ul>
</div>