<div class="inicio"><h2 class="title"><a href="#">Reg&iacute;strate</a></h2>
<br /><br />
<div class="entry">
	<p>Si est&aacute;s interesado en participar ya sea buscando trabajo u ofreciendo, te invitamos a registrarte seleecionando
		la opci&oacute;n que m&aacute;s se ajuste a tu perfil
	</p>
	<br />
</div>
<div class="meta">
	<p><?php echo $this->Html->link(__('Trabajador', true), array('controller'=>'users','action' => 'registro_trabajador'),array('class'=>'more'));?></p>
	<p><?php echo $this->Html->link(__('Empresas', true), array('controller'=>'users','action' => 'registro_empleador'),array('class'=>'more'));?></p>
</div></div>