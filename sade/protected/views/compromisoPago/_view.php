<?php
/* @var $this CompromisopagoController */
/* @var $data Compromisopago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpTipo')); ?>:</b>
	<?php echo CHtml::encode($data->cpTipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpMonto')); ?>:</b>
	<?php echo CHtml::encode($data->cpMonto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpFechaIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->cpFechaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpObs')); ?>:</b>
	<?php echo CHtml::encode($data->cpObs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpNumeroBoleta')); ?>:</b>
	<?php echo CHtml::encode($data->cpNumeroBoleta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpFechaPago')); ?>:</b>
	<?php echo CHtml::encode($data->cpFechaPago); ?>
	<br />


</div>