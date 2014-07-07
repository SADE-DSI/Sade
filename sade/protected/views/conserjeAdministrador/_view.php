<?php
/* @var $this ConserjeadministradorController */
/* @var $data Conserjeadministrador */
?>

<div class="view">
<table class="tablaView">
<tr><td>	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->caRut), array('view', 'id'=>$data->caRut)); ?>
	<br /></td></tr>

<tr><td><b><?php echo CHtml::encode($data->ca_pe->getAttributeLabel('peNombresApellidos')); ?>:</b></td><td><?php echo CHtml::encode($data->ca_pe->peNombresApellidos); ?>
	<br /></td></tr>

<tr><td><b><?php echo CHtml::encode($data->ca_pe->getAttributeLabel('peEmail')); ?>:</b></td><td><?php echo CHtml::encode($data->ca_pe->peEmail); ?>
	<br /></td></tr>

<tr><td><b><?php echo CHtml::encode($data->ca_pe->getAttributeLabel('peTelefono')); ?>:</b></td><td><?php echo CHtml::encode($data->ca_pe->peTelefono); ?>
	<br /></td></tr>

<tr><td><b><?php echo CHtml::encode($data->ca_pe->getAttributeLabel('peDescripcion')); ?>:</b></td><td><?php echo CHtml::encode($data->ca_pe->peDescripcion); ?>
	<br /></td></tr>

<tr><td><b><?php echo CHtml::encode($data->ca_pe->getAttributeLabel('peDireccion')); ?>:</b></td><td><?php echo CHtml::encode($data->ca_pe->peDireccion); ?>
	<br /></td></tr>


</table>

</div>