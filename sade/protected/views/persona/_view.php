<?php
/* @var $this PersonaController */
/* @var $data Persona */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->peRut), array('view', 'id'=>$data->peRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombresApellidos')); ?>:</b>
	<?php echo CHtml::encode($data->peNombresApellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Activo')); ?>:</b>
	<?php echo CHtml::encode($data->peActivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->peEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->peTelefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo')); ?>:</b>
	<?php echo CHtml::encode($data->peTipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->peDescripcion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('peDireccion')); ?>:</b>
	<?php echo CHtml::encode($data->peDireccion); ?>
	<br />

	*/ ?>

</div>