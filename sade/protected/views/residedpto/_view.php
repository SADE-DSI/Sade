<?php
/* @var $this ResidedptoController */
/* @var $data Residedpto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rdFechaInicio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rdFechaInicio), array('view', 'id'=>$data->rdFechaInicio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adRut')); ?>:</b>
	<?php echo CHtml::encode($data->adRut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dlDireccion')); ?>:</b>
	<?php echo CHtml::encode($data->dlDireccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rdFechaFin')); ?>:</b>
	<?php echo CHtml::encode($data->rdFechaFin); ?>
	<br />


</div>