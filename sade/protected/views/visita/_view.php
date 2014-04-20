<?php
/* @var $this VisitaController */
/* @var $data Visita */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('viRut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->viRut), array('view', 'id'=>$data->viRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viNombresApellidos')); ?>:</b>
	<?php echo CHtml::encode($data->viNombresApellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viObs')); ?>:</b>
	<?php echo CHtml::encode($data->viObs); ?>
	<br />


</div>