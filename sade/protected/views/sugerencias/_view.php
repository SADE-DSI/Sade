<?php
/* @var $this SugerenciasController */
/* @var $data Sugerencias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sgId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sgId), array('view', 'id'=>$data->sgId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sfComentario')); ?>:</b>
	<?php echo CHtml::encode($data->sfComentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sfRespuesta')); ?>:</b>
	<?php echo CHtml::encode($data->sfRespuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sfLeido')); ?>:</b>
	<?php echo CHtml::encode($data->sfLeido); ?>
	<br />


</div>