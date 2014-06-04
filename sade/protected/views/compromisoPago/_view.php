<?php
/* @var $this CompromisopagoController */
/* @var $data Compromisopago */
?>

<div class="view">
<table class="tablaView">
	<tr>
	<td><b><?php echo CHtml::encode($data->getAttributeLabel('cpId')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->cpId), array('view', 'id'=>$data->cpId)); ?>
	<br /></td>
	</tr>
	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('cpCodigo')); ?>:</b></td><td><?php echo CHtml::encode($data->cpCodigo); ?>
	<br /></td></tr>
	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('cpFechaVencimiento')); ?>:</b></td><td><?php echo CHtml::encode($data->cpFechaVencimiento); ?>
	<br /></td></tr>
	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('cpMonto')); ?>:</b></td><td><?php echo CHtml::encode($data->cpMonto); ?>
	<br /></td></tr>
	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('cpDescripcion')); ?>:</b></td><td><?php echo CHtml::encode($data->cpDescripcion); ?>
	<br /></td></tr>
	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('cpFechaIngreso')); ?>:</b></td><td><?php echo CHtml::encode($data->cpFechaIngreso); ?>
	<br /></td></tr>
	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('cpObs')); ?>:</b></td><td><?php echo CHtml::encode($data->cpObs); ?>
	<br /></td></tr>
</table>
		

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cpNumeroBoleta')); ?>:</b>
	<?php echo CHtml::encode($data->cpNumeroBoleta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpFechaRealPago')); ?>:</b>
	<?php echo CHtml::encode($data->cpFechaRealPago); ?>
	<br />

	*/ ?>

</div>