<?php
/* @var $this ConserjeadministradorController */
/* @var $data Conserjeadministrador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->caRut), array('view', 'id'=>$data->caRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clave')); ?>:</b>
	<?php echo CHtml::encode($data->caClave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombresApellidos')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peNombresApellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Activo')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peActivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peTelefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peDescripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peDireccion); ?>
	<br />




</div>