<?php
/* @var $this PagomensualController */
/* @var $data Pagomensual */
?>

<div class="view">

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

	<b><?php echo CHtml::encode($data->getAttributeLabel('pmMesAPagar')); ?>:</b>
	<?php echo CHtml::encode($data->pmMesAPagar); ?>
	<br />


</div>