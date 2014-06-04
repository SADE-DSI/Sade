<?php
/* @var $this PagomensualController */
/* @var $data Pagomensual */
?>

<div class="view">

<table class="tablaView">
	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('pmCodigo')); ?>:</b></td>	<td><?php echo CHtml::link(CHtml::encode($data->pmCodigo), array('view', 'id'=>$data->pmCodigo)); ?>
	<br /></td></tr>

	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('dlDireccion')); ?>:</b></td>	<td><?php echo CHtml::encode($data->dlDireccion); ?>
	<br /></td></tr>

	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('pmFechaPago')); ?>:</b></td>	<td><?php echo CHtml::encode($data->pmFechaPago); ?>
	<br /></td></tr>
	
	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('pmMonto')); ?>:</b></td>	<td><?php echo CHtml::encode($data->pmMonto); ?>
	<br /></td></tr>
	
	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('pmObs')); ?>:</b></td>	<td><?php echo CHtml::encode($data->pmObs); ?>
	<br /></td></tr>
	
	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('pmFechaRealPago')); ?>:</b></td>	<td><?php echo CHtml::encode($data->pmFechaRealPago); ?>
	<br /></td></tr>
	
	<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('pmId')); ?>:</b></td>	<td><?php echo CHtml::encode($data->pmId); ?>
	<br /></td></tr>
	</table>
</div>