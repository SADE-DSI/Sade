<?php
/* @var $this PagoMensualController */
/* @var $data PagoMensual */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pmCodigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pmCodigo), array('view', 'id'=>$data->pmCodigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dlDireccion')); ?>:</b>
	<?php echo CHtml::encode($data->dlDireccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pmFechaPago')); ?>:</b>
	<?php echo CHtml::encode($data->pmFechaPago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pmMonto')); ?>:</b>
	<?php echo CHtml::encode($data->pmMonto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pmObs')); ?>:</b>
	<?php echo CHtml::encode($data->pmObs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pmFechaRealPago')); ?>:</b>
	<?php echo CHtml::encode($data->pmFechaRealPago); ?>
	<br />


</div>