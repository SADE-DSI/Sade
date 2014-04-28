<?php
/* @var $this CompromisopagoController */
/* @var $data Compromisopago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cpId), array('view', 'id'=>$data->cpId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpCodigo')); ?>:</b>
	<?php echo CHtml::encode($data->cpCodigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpFechaVencimiento')); ?>:</b>
	<?php echo CHtml::encode($data->cpFechaVencimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpMonto')); ?>:</b>
	<?php echo CHtml::encode($data->cpMonto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpDescripcion')); ?>:</b>
	<?php echo CHtml::encode($data->cpDescripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpFechaIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->cpFechaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpObs')); ?>:</b>
	<?php echo CHtml::encode($data->cpObs); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cpNumeroBoleta')); ?>:</b>
	<?php echo CHtml::encode($data->cpNumeroBoleta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpFechaRealPago')); ?>:</b>
	<?php echo CHtml::encode($data->cpFechaRealPago); ?>
	<br />

	*/ ?>

</div>