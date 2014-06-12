<?php
/* @var $this SueldopersonalController */
/* @var $data Sueldopersonal */
?>

<div class="view">

	<b><?php echo CHtml::encode('Nombre Empleado'); ?>:</b>
	<?php echo CHtml::encode($data->getNombre($data->cpCodigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spFechaPago')); ?>:</b>
	<?php echo CHtml::link($data->spFechaPago, array('view', 'id'=>$data->spCodigo)); ?>
	<br />

	<b><?php echo CHtml::encode('Sueldo Líquido'); ?>:</b>
	<?php echo CHtml::encode($data->getSueldoLiquido($data->cpCodigo, $data->spCodigo)); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cpCodigo')); ?>:</b>
	<?php echo CHtml::encode($data->cpCodigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spOtrosDescuentos')); ?>:</b>
	<?php echo CHtml::encode($data->spOtrosDescuentos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spHorasExtras')); ?>:</b>
	<?php echo CHtml::encode($data->spHorasExtras); ?>
	<br /> */ ?>


</div>