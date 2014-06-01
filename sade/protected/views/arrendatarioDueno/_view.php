<?php
/* @var $this ArrendatarioduenoController */
/* @var $data Arrendatariodueno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->adRut), array('view', 'id'=>$data->adRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clave')); ?>:</b>
	<?php echo CHtml::encode($data->adClave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->adEstado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombresApellidos')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peNombresApellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Activo')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peActivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peTelefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peDescripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peDireccion')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peDireccion); ?>
	<br />

</div>