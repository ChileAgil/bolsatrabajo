<div class="informaciones view">
<h2><?php  __('Informacion');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Informacion Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $informacion['Informacion']['informacion_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($informacion['Usuario']['usuario_id'], array('controller' => 'usuarios', 'action' => 'view', $informacion['Usuario']['usuario_id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Referencia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $informacion['Informacion']['referencia']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $informacion['Informacion']['descripcion']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Informacion', true), array('action' => 'edit', $informacion['Informacion']['informacion_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Informacion', true), array('action' => 'delete', $informacion['Informacion']['informacion_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $informacion['Informacion']['informacion_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Informaciones', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Informacion', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
