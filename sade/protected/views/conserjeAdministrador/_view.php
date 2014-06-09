<?php
/* @var $this ConserjeadministradorController */
/* @var $data Conserjeadministrador */
?>

<div class="view">
<table class="tablaView">
<tr><td>	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->caRut), array('view', 'id'=>$data->caRut)); ?>
	<br /></td></tr>

<tr><td>	<b><?php echo CHtml::encode($data->getAttributeLabel('Clave')); ?>:</b></td><td><?php echo CHtml::encode($data->caClave); ?>
	<br /></td></tr>

<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('NombresApellidos')); ?>:</b></td><td><?php echo CHtml::encode($data->ca_pe->peNombresApellidos); ?>
	<br /></td></tr>

<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b></td><td><?php echo CHtml::encode($data->ca_pe->peEmail); ?>
	<br /></td></tr>

<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b></td><td><?php echo CHtml::encode($data->ca_pe->peTelefono); ?>
	<br /></td></tr>

<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b></td><td><?php echo CHtml::encode($data->ca_pe->peDescripcion); ?>
	<br /></td></tr>

<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b></td><td><?php echo CHtml::encode($data->ca_pe->peDireccion); ?>
	<br /></td></tr>


</table>

</div>