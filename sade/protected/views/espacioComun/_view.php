<?php
/* @var $this EspaciocomunController */
/* @var $data Espaciocomun */
?>

<div class="view">
<table class="tablaView">
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('ecCodigo')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->ecCodigo), array('view', 'id'=>$data->ecCodigo)); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('ecDescripcion')); ?>:</b></td><td><?php echo CHtml::encode($data->ecDescripcion); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('ecFrecuencia')); ?>:</b></td><td><?php echo CHtml::encode($data->ecFrecuencia); ?>
	<br /></td></tr>
</table>

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('ecActivo')); ?>:</b>
	<?php echo CHtml::encode($data->ecActivo); ?> 
	<br />-->


</div>