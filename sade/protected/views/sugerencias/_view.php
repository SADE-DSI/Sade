<?php
/* @var $this SugerenciasController */
/* @var $data Sugerencias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Número')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sgId), array('view', 'id'=>$data->sgId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comentario')); ?>:</b>
	<?php echo CHtml::encode($data->sfComentario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Respuesta')); ?>:</b>
	<?php echo CHtml::encode($data->sfRespuesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Leido')); ?>:</b>
	<?php echo CHtml::encode($data->sfLeido); ?>
	<br />


</div>