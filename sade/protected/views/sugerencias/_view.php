<?php
/* @var $this SugerenciasController */
/* @var $data Sugerencias */
?>

<div class="view">
<table class="tablaView">
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Número')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->sgId), array('view', 'id'=>$data->sgId)); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Comentario')); ?>:</b></td><td><?php echo CHtml::encode($data->sfComentario); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Respuesta')); ?>:</b></td><td><?php echo ($data->sfRespuesta); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b></td><td><?php if ($data->sfLeido == 0) echo ('Enviado'); else echo ('Respuesto');  ?>
	<br /></td></tr>
</table>
	
</div>