<?php
/* @var $this SueldopersonalController */
/* @var $data Sueldopersonal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('peRut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->peRut), array('view', 'id'=>$data->peRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spFechaPago')); ?>:</b>
	<?php echo CHtml::encode($data->spFechaPago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spOtrosDescuento')); ?>:</b>
	<?php echo CHtml::encode($data->spOtrosDescuento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spHorasExtra')); ?>:</b>
	<?php echo CHtml::encode($data->spHorasExtra); ?>
	<br />


</div>