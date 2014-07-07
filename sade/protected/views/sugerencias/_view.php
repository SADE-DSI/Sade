<?php
/* @var $this SugerenciasController */
/* @var $data Sugerencias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Número')); ?>:</b>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('sfFecha')); ?>:</b>
	<?php echo CHtml::encode($data->sfFecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sfUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->sfUsuario); ?>
	<br />


</div>