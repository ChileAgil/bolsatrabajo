<div class="ofertas view">
    <h2><?php  __('Oferta'); //debug($oferta);?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nombre Fantasia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php 
			if( $oferta['Empresa']['nombre_fantasia'])
				echo $oferta['Empresa']['nombre_fantasia']; 
			else
				echo $oferta['Oferta']['nombre_empresa'];
			?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Título'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['titulo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cargo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['cargo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripción'); ?></dt>
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
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nivel Práctica'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['nivel_practica']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comuna - Subzona'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Comuna']['comuna']. " - ". $oferta['Oferta']['subzona']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nivel Práctica'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $oferta['Oferta']['nivel_practica']; ?>
			&nbsp;
		</dd>
	</dl>
    <br/>
    <h2><?php  __('Requisitos Adicionales');?></h2>
    <dl><?php $i = 0; $class = ' class="altrow"';?>
	<?php foreach($oferta['ReqAdicional'] as $requisito):?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo de Requerimiento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $requisito['TipoRequerimiento']['tipo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Requerimiento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $requisito['requerimiento']; ?>
			&nbsp;
		</dd>
	<?php endforeach;?>
	
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Aceptar Empresa', true), array('action' => 'aceptar_oferta', $oferta['Oferta']['oferta_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Rechazar Empresa', true), array('action' => 'rechazar_empresa',  $oferta['Oferta']['oferta_id']), null, sprintf(__('Seguro desea rechazar la oferta %s?', true),  $oferta['Oferta']['titulo'])); ?> </li>
	</ul>
</div>