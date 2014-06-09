<?php
/* @var $this ContratopersonalController */
/* @var $data Contratopersonal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('peRut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->peRut), array('view', 'id'=>$data->peRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpAFPNombre')); ?>:</b>
	<?php echo CHtml::encode($data->cpAFPNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpAFPMonto')); ?>:</b>
	<?php echo CHtml::encode($data->cpAFPMonto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpPrevisionNombre')); ?>:</b>
	<?php echo CHtml::encode($data->cpPrevisionNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpPrevisionMonto')); ?>:</b>
	<?php echo CHtml::encode($data->cpPrevisionMonto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpSueldoBruto')); ?>:</b>
	<?php echo CHtml::encode($data->cpSueldoBruto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpFechaInicio')); ?>:</b>
	<?php echo CHtml::encode($data->cpFechaInicio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cpFechaFin')); ?>:</b>
	<?php echo CHtml::encode($data->cpFechaFin); ?>
	<br />

	*/ ?>

</div>
 
