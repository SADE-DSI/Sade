<?php
/* @var $this PersonaController */
/* @var $data Persona */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('peRut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->peRut), array('view', 'id'=>$data->peRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peNombresApellidos')); ?>:</b>
	<?php echo CHtml::encode($data->peNombresApellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peActivo')); ?>:</b>
	<?php echo CHtml::encode($data->peActivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peEmail')); ?>:</b>
	<?php echo CHtml::encode($data->peEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peTelefono')); ?>:</b>
	<?php echo CHtml::encode($data->peTelefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peTipo')); ?>:</b>
	<?php echo CHtml::encode($data->peTipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peDescripcion')); ?>:</b>
	<?php echo CHtml::encode($data->peDescripcion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('peDireccion')); ?>:</b>
	<?php echo CHtml::encode($data->peDireccion); ?>
	<br />

	*/ ?>

</div>