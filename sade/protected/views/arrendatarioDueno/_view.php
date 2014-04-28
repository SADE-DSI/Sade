<?php
/* @var $this ArrendatarioduenoController */
/* @var $data Arrendatariodueno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('adRut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->adRut), array('view', 'id'=>$data->adRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adClave')); ?>:</b>
	<?php echo CHtml::encode($data->adClave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adEstado')); ?>:</b>
	<?php echo CHtml::encode($data->adEstado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adFechaLiberacion')); ?>:</b>
	<?php echo CHtml::encode($data->adFechaLiberacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peNombresApellidos')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peNombresApellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peActivo')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peActivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peEmail')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peTelefono')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peTelefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peDescripcion')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peDescripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peDireccion')); ?>:</b>
	<?php echo CHtml::encode($data->ad_pe->peDireccion); ?>
	<br />

</div>