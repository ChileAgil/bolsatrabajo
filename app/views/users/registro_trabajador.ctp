<div class="registro">
		<style type="text/css">
		#sortable1, #sortable2, #sortable3 { list-style-type: none; margin: 0; padding: 0; float: left; margin-right: 10px; background: #eee; padding: 5px; width: 143px;}
		#sortable1 li, #sortable2 li, #sortable3 li { margin: 5px; padding: 5px; font-size: 12px; width: 120px; }
		</style>
		<script type="text/javascript">
		$(function() {
			$("ul.droptrue").sortable({
				connectWith: 'ul'
			});

			$("ul.dropfalse").sortable({
				connectWith: 'ul',
				dropOnEmpty: false
			});

			$("#sortable1, #sortable2").disableSelection();
		});
		</script>


	<style> 


	ul {
		margin: 0;
	}

	#contentWrap {
		width: 700px;
		margin: 0 auto;
		height: auto;
		overflow: hidden;
	}

	#contentTop {
		width: 600px;
		padding: 10px;
		margin-left: 30px;
	}

	#contentLeft {
		float: left;
		width: 400px;
	}

	#contentLeft li {
		list-style: none;
		margin: 0 0 4px 0;
		padding: 10px;
		background-color:#00CCCC;
		border: #CCCCCC solid 1px;
		color:#fff;
	}




	#contentRight {
		float: right;
		width: 260px;
		padding:10px;
		background-color:#336600;
		color:#FFFFFF;
	}
	#sortable1{
	
		width:320px;
	}
	#sortable1 li{
		width:300px;
	}
	#sortable2{
	
		width:320px;
		min-height:300px;
	}
	#sortable2 li{
		width:300px;
	}
	</style> 


	<script type="text/javascript"> 

	$(document).ready(function(){ 

	  	$(function() {
		
			$("#sortable2").sortable({ opacity: 0.6, cursor: 'move', update: function() {
				var order = $(this).sortable("toArray"); 
			//	alert(order);
				for(var i=0; i< order.length ; ++i){
					order[i] = order[i].substring(9);
				}
				$("#lista_opciones").attr("value",order);
			//	$.post("registro_empleador", order//, function(theResponse){
				//	alert(theResponse);
					//$("#contentRight").html(theResponse);
				//}
				//); 															 
			}								  
			});
		});
	});	
	</script> 
	
<div class="users form">
<?php echo $this->Form->create('User', array('action'=>'registro_trabajador'));?>


	<fieldset>
 		<legend><?php __('Registro de Trabajador');?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('email');

		echo $this->Form->input('password');
		echo $this->Form->input('fecha_nacimiento',array(
		'type'  => 'date',
		'label' => 'Fecha de nacimiento',
		'minYear' => 1940,
		'maxYear' => 1992,
		'separator' => '/',
		'empty' => true,
		'dateFormat' => 'DMY'
		# default order m/d/y
		/*'selected' => array(
		'day' =>  '09',
		'month' => '03',
		
		'year' => '1985'
		 )*/
		));
	//	echo $this->Form->input('tipo_usuario_id');
	?>
	<table>
		<tr><td colspan="2">Ingrese por favor referencias de alumnos del departamento con quienes hayan trabajado</td></tr>
		<tr>
	<td><?php echo $this->Form->input('Info.1.Informacion.referencia');?></td>
	<td><?php echo $this->Form->input('Info.1.Informacion.descripcion');?></td>
		</tr>
		<tr>
	<td><?php echo $this->Form->input('Info.2.Informacion.referencia');?></td>
	<td><?php echo $this->Form->input('Info.2.Informacion.descripcion');?></td>
		</tr>
		<tr>
	<td><?php echo $this->Form->input('Info.3.Informacion.referencia');?></td>
	<td><?php echo $this->Form->input('Info.3.Informacion.descripcion');?></td>
		</tr>
	</table>
	<div>
	<p><?php __('Arrastre desde la caja ubicada en el lado izquierdo a la caja del lado derecho las 5 propuestas de mayor valor para usted ordenándolas deacuerdo a su preferencia (la que está al tope es la de mayor valor)');?> </p>
	<div id="name2">
	<ul id="sortable1" class='droptrue'>
	<?php
	foreach($opciones as $opcion){
	//	debug($opcion['Opcion']);
		$valor = $opcion['Opcion']['opcion'];
		$id = $opcion['Opcion']['opcion_id'];
		echo "<li id=\"opciones_$id\" class=\"ui-state-default\" value=\"$id\">$valor</li>";
	}
	?>
	</ul>
	</div>
	<?php echo $this->Form->input('valores_lista', array('type'=>'hidden', 'id'=>'lista_opciones')); ?>
	<div id="name">
		<ul id="sortable2" class='droptrue' name="data[Lista]">
		</ul>
	</div>
	</div>
	</fieldset>
<?php echo $this->Form->end('Registrar');?>
</div>
</div>
