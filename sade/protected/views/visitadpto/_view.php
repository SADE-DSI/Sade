<?php
/* @var $this VisitadptoController */
/* @var $data Visitadpto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('vdCodigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->vdCodigo), array('view', 'id'=>$data->vdCodigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viRut')); ?>:</b>
	<?php echo CHtml::encode($data->viRut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dlDireccion')); ?>:</b>
	<?php echo CHtml::encode($data->dlDireccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vdFechaIngreso')); ?>:</b>
	<?php echo CHtml::encode($data->vdFechaIngreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caRut')); ?>:</b>
	<?php echo CHtml::encode($data->caRut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vdFechaSalida')); ?>:</b>
	<?php echo CHtml::encode($data->vdFechaSalida); ?>
	<br />


</div>