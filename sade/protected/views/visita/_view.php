<?php
/* @var $this VisitaController */
/* @var $data Visita */
?>

<div class="view">
<table class="tablaView">
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('viRut')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->viRut), array('view', 'id'=>$data->viRut)); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('viNombresApellidos')); ?>:</b></td><td><?php echo CHtml::encode($data->viNombresApellidos); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('viObs')); ?>:</b></td><td><?php echo CHtml::encode($data->viObs); ?>
	<br /></td></tr>
</table>
</div>