<?php
/* @var $this MaterialController */
/* @var $data Material */
?>

<div class="view">
<table class="tablaView">
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Codigo')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->maCodigo), array('view', 'id'=>$data->maCodigo)); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b></td><td><?php echo CHtml::encode($data->maNombre); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b></td><td><?php echo CHtml::encode($data->maDescripcion); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b></td><td><?php echo CHtml::encode($data->maEstado); ?>	<br /></td></tr>
</table>
	
</div>