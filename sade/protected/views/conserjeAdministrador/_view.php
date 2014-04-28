<?php
/* @var $this ConserjeadministradorController */
/* @var $data Conserjeadministrador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('caRut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->caRut), array('view', 'id'=>$data->caRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caClave')); ?>:</b>
	<?php echo CHtml::encode($data->caClave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peNombresApellidos')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peNombresApellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peActivo')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peActivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peEmail')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peTelefono')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peTelefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peDescripcion')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peDescripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peDireccion')); ?>:</b>
	<?php echo CHtml::encode($data->ca_pe->peDireccion); ?>
	<br />




</div>