<?php
/* @var $this CodigoController */
/* @var $data Codigo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('coCodigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->coCodigo), array('view', 'id'=>$data->coCodigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coNombre')); ?>:</b>
	<?php echo CHtml::encode($data->coNombre); ?>
	<br />


</div>