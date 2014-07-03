<?php
/* @var $this Reservaespaciocomun_resController */
/* @var $data Reservaespaciocomun_res */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('reId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->reId), array('view', 'id'=>$data->reId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecCodigo')); ?>:</b>
	<?php echo CHtml::encode($data->ecCodigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reFecha')); ?>:</b>
	<?php echo CHtml::encode($data->reFecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adRut')); ?>:</b>
	<?php echo CHtml::encode($data->adRut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reHoraInicio')); ?>:</b>
	<?php echo CHtml::encode($data->reHoraInicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reHoraFin')); ?>:</b>
	<?php echo CHtml::encode($data->reHoraFin); ?>
	<br />


</div>