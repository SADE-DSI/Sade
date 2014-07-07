<?php
/* @var $this MaterialController */
/* @var $data Material */
?>

<div class="view">
<table class="tablaView">
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('maCodigo')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->maCodigo), array('view', 'id'=>$data->maCodigo)); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('maNombre')); ?>:</b></td><td><?php echo CHtml::encode($data->maNombre); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('maDescripcion')); ?>:</b></td><td><?php echo CHtml::encode($data->maDescripcion); ?>
	<br /></td></tr>
</table>
	
</div>