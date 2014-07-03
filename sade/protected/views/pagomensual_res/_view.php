<?php
/* @var $this Pagomensual_resController */
/* @var $data Pagomensual_res */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pmId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pmId), array('view', 'id'=>$data->pmId)); ?>
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