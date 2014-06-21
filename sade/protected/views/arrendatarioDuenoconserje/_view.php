<?php
/* @var $this ArrendatarioduenoController */
/* @var $data Arrendatariodueno */
?>

<div class="view">
<table class="tablaView">
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b></td><td><?php echo CHtml::encode($data->adRut); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('NombresApellidos')); ?>:</b></td><td><?php echo CHtml::encode($data->ad_pe->peNombresApellidos); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b></td><td><?php echo CHtml::encode($data->ad_pe->peEmail); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b></td><td><?php echo CHtml::encode($data->ad_pe->peTelefono); ?>
	<br /></td></tr>
<tr><td>	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b></td><td><?php echo CHtml::encode($data->ad_pe->peDescripcion); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b></td><td><?php echo CHtml::encode($data->ad_pe->peDireccion); ?>
	<br /></td></tr>
</table>
	
</div>