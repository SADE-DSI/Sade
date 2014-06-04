<?php
/* @var $this CodigoController */
/* @var $data Codigo */
?>

<div class="view">
<table class="tablaView">
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('coCodigo')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->coCodigo), array('view', 'id'=>$data->coCodigo)); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('coNombre')); ?>:</b></td><td><?php echo CHtml::encode($data->coNombre); ?>
	<br /></td></tr>
</table>

</div>