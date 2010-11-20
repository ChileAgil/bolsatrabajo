<div class="ofertas view">
<h2><?php  __('Oferta');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Oferta Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['oferta_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Empresa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($oferta['Empresa']['empresa_id'], array('controller' => 'empresas', 'action' => 'view', $oferta['Empresa']['empresa_id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cargo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['cargo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['descripcion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ambiente Laboral'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['ambiente_laboral']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sueldo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['sueldo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nivel Practica'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['nivel_practica']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comuna'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($oferta['Comuna']['comuna'], array('controller' => 'comunas', 'action' => 'view', $oferta['Comuna']['comuna_id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subzona'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['subzona']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Oferta', true), array('action' => 'edit', $oferta['Oferta']['oferta_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Oferta', true), array('action' => 'delete', $oferta['Oferta']['oferta_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $oferta['Oferta']['oferta_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas', true), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa', true), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunas', true), array('controller' => 'comunas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comuna', true), array('controller' => 'comunas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Req Adicionales', true), array('controller' => 'req_adicionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Req Adicional', true), array('controller' => 'req_adicionales', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Req Adicionales');?></h3>
	<?php if (!empty($oferta['ReqAdicional'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Req Adicional Id'); ?></th>
		<th><?php __('Oferta Id'); ?></th>
		<th><?php __('Tipo Id'); ?></th>
		<th><?php __('Requerimiento'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($oferta['ReqAdicional'] as $reqAdicional):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $reqAdicional['req_adicional_id'];?></td>
			<td><?php echo $reqAdicional['oferta_id'];?></td>
			<td><?php echo $reqAdicional['tipo_id'];?></td>
			<td><?php echo $reqAdicional['requerimiento'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'req_adicionales', 'action' => 'view', $reqAdicional['req_adicional_id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'req_adicionales', 'action' => 'edit', $reqAdicional['req_adicional_id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'req_adicionales', 'action' => 'delete', $reqAdicional['req_adicional_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reqAdicional['req_adicional_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Req Adicional', true), array('controller' => 'req_adicionales', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
