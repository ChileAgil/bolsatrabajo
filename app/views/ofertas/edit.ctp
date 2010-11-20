<div class="ofertas form">
<?php echo $this->Form->create('Oferta');?>
	<fieldset>
 		<legend><?php __('Edit Oferta'); ?></legend>
	<?php
		echo $this->Form->input('oferta_id');
		if($tipo_usuario_id == 4)
			echo $this->Form->input('nombre_empresa');
		else
			echo $this->Form->input('empresa_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('cargo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('ambiente_laboral');
		echo $this->Form->input('sueldo');
		echo $this->Form->input('nivel_practica');
		echo $this->Form->input('comuna_id');
		echo $this->Form->input('subzona');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Oferta.oferta_id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Oferta.oferta_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ofertas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Empresas', true), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa', true), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comunas', true), array('controller' => 'comunas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comuna', true), array('controller' => 'comunas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Req Adicionales', true), array('controller' => 'req_adicionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Req Adicional', true), array('controller' => 'req_adicionales', 'action' => 'add')); ?> </li>
	</ul>
</div>