<?php
/* @var $this ArrendatarioduenoController */
/* @var $data Arrendatariodueno */
?>


	<?php
	 $activo=$data->adEstado;
			if ($activo == 0 ){}
				else if ($activo == 1){
	 ?>

<div class="view">
<table class="tablaView">
<tr><td><b><?php echo CHtml::encode($data->ad_pe->getAttributeLabel('Rut')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->adRut), array('view', 'id'=>$data->adRut)); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->ad_pe->getAttributeLabel('peNombresApellidos')); ?>:</b></td><td><?php echo CHtml::encode($data->ad_pe->peNombresApellidos); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->ad_pe->getAttributeLabel('peDireccion')); ?>:</b></td><td><?php echo CHtml::encode($data->ad_pe->peDireccion); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->ad_pe->getAttributeLabel('peEmail')); ?>:</b></td><td><?php echo CHtml::encode($data->ad_pe->peEmail); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->ad_pe->getAttributeLabel('peTelefono')); ?>:</b></td><td><?php echo CHtml::encode($data->ad_pe->peTelefono); ?>
	<br /></td></tr>
<tr><td>	<b><?php echo CHtml::encode($data->ad_pe->getAttributeLabel('peDescripcion')); ?>:</b></td><td><?php echo CHtml::encode($data->ad_pe->peDescripcion); ?>
	<br /></td></tr>
</table>
	
</div>

	<?php
		}
	?>