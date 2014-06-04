<?php
/* @var $this AvisoController */
/* @var $data Aviso */
?>

<div class="view">
<table class="tablaView">
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('avCodigo')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->avCodigo), array('view', 'id'=>$data->avCodigo)); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('avTitulo')); ?>:</b></td><td><?php echo CHtml::encode($data->avTitulo); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('avFecha')); ?>:</b></td><td><?php echo CHtml::encode($data->avFecha); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('avAviso')); ?>:</b></td><td><?php echo CHtml::encode($data->avAviso); ?>
	<br /></td></tr>
</table>
	
</div>