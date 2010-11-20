<div class="alternativas view">
<h2><?php  __('Alternativa');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alternativa Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alternativa['Alternativa']['alternativa_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuario'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($alternativa['Usuario']['usuario_id'], array('controller' => 'usuarios', 'action' => 'view', $alternativa['Usuario']['usuario_id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Opcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($alternativa['Opcion']['opcion_id'], array('controller' => 'opciones', 'action' => 'view', $alternativa['Opcion']['opcion_id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lugar'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $alternativa['Alternativa']['lugar']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alternativa', true), array('action' => 'edit', $alternativa['Alternativa']['alternativa_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Alternativa', true), array('action' => 'delete', $alternativa['Alternativa']['alternativa_id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $alternativa['Alternativa']['alternativa_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alternativas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alternativa', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios', true), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario', true), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Opciones', true), array('controller' => 'opciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Opcion', true), array('controller' => 'opciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
