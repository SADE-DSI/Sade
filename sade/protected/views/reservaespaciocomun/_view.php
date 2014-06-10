<?php
/* @var $this ReservaespaciocomunController */
/* @var $data Reservaespaciocomun */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('reFechaInicio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->reFechaInicio), array('view', 'id'=>$data->reFechaInicio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adRut')); ?>:</b>
	<?php echo CHtml::encode($data->adRut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecCodigo')); ?>:</b>
	<?php echo CHtml::encode($data->ecCodigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reFechaFin')); ?>:</b>
	<?php echo CHtml::encode($data->reFechaFin); ?>
	<br />


</div>