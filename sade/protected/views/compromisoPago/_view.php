<?php
/* @var $this CompromisoPagoController */
/* @var $data CompromisoPago */
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
	<b><?php echo CHtml::encode($data->getAttributeLabel('gpNumeroBoleta')); ?>:</b>
	<?php echo CHtml::encode($data->gpNumeroBoleta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gpFechaRealPago')); ?>:</b>
	<?php echo CHtml::encode($data->gpFechaRealPago); ?>
	<br />

	*/ ?>

</div>