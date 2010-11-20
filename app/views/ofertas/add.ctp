<style>
ul#requisitos, ul#requisitos li{
    list-style-type: disc;
    margin: 10px;
}
</style>
<script>
$(document).ready(function(){
    var getNewReq = function( i ){
        var req = $("#reqTypeHolder").html();
        return '<li>' + req.replace(/TYPEX/g,""+i) + '</li>';
        //'<input name="data[ReqAdicional]['+i+'][requerimiento]" type="text" id="req'+i+'" /></li>';
    };
    
    $("#moreReq").click(function(){
        var i = $("#requisitos").children().size();
        $("#requisitos").append(getNewReq(i+1));
    });
});
</script>
<div id="reqTypeHolder" style="display:none">
    <?php echo $this->Form->input('ReqAdicional.TYPEX.tipo_id',array('options' => $tipo_requerimientos)); ?>
    <?php echo $this->Form->input('ReqAdicional.TYPEX.requerimiento'); ?>
</div>
<?php
$vars = $this->getVars();
foreach($vars as $varname){
    $vars[$varname] = $this->getVar($varname);
}
?>
<div class="ofertas form">
<?php echo $this->Form->create('Oferta');?>
	<fieldset>
 		<legend><?php __('Ingreso de ofertas laborales'); ?></legend>
	<?php
		if($tipo_usuario_id == 4)
			echo $this->Form->input('nombre_empresa');
		else
			echo $this->Form->input('empresa_id');
		echo $this->Form->input('titulo');
		echo $this->Form->input('cargo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('ambiente_laboral');
		echo $this->Form->input('sueldo');
		echo $this->Form->input('nivel_practica',
            array(
                'type' => 'select',
                'options' => array('1' => '1', '2' => '2', '3' => '3', 'Trabajo' => 'Trabajo')
            ));
        echo '<table><tr><td>';
		echo $this->Form->input('comuna_id');
        echo '</td><td style="width: 100%">';
        echo $this->Form->input('subzona',
            array(
                'type' => 'select',
                'options' => array('centro' => 'centro', 'norte' => 'norte', 'sur' => 'sur', 'este' => 'este', 'oeste' => 'oeste')
            ));
        echo '</td></tr></table>';
	?>
    <br/>
    <span style="font-size: 110%">Ingrese por favor los requerimientos que debiera cumplir el alumno (tales como tecnologias, experiencia, etc)</span>
    <ul id="requisitos">
        <?php
            if(isset($this->data['ReqAdicional'])){
                foreach($this->data['ReqAdicional'] as $index => $req){
                    echo '<li>';
                    echo $this->Form->input('ReqAdicional.'.$index.'.tipo_id',array('options' => $tipo_requerimientos));
                    echo $this->Form->input('ReqAdicional.'.$index.'.requerimiento');
                    echo '</li>';
                }
            }
        ?>
    </ul>
    <a id="moreReq" style="cursor:pointer">Mas</a>
    
	</fieldset>
<?php echo $this->Form->end(__('Ingresar oferta', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
        <li><?php echo $this->Html->link(__('List Ofertas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Empresas', true), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<!-- <li><?php echo $this->Html->link(__('New Empresa', true), array('controller' => 'empresas', 'action' => 'add')); ?> </li> -->
		<!-- <li><?php echo $this->Html->link(__('List Comunas', true), array('controller' => 'comunas', 'action' => 'index')); ?> </li> -->
		<!-- <li><?php echo $this->Html->link(__('New Comuna', true), array('controller' => 'comunas', 'action' => 'add')); ?> </li> -->
		<!-- <li><?php echo $this->Html->link(__('List Req Adicionales', true), array('controller' => 'req_adicionales', 'action' => 'index')); ?> </li> -->
		<!-- <li><?php echo $this->Html->link(__('New Req Adicional', true), array('controller' => 'req_adicionales', 'action' => 'add')); ?> </li> -->
	</ul>
</div>