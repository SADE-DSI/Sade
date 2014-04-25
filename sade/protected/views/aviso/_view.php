<?php
/* @var $this AvisoController */
/* @var $data Aviso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('avCodigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->avCodigo), array('view', 'id'=>$data->avCodigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avTitulo')); ?>:</b>
	<?php echo CHtml::encode($data->avTitulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avFecha')); ?>:</b>
	<?php echo CHtml::encode($data->avFecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avAviso')); ?>:</b>
	<?php echo CHtml::encode($data->avAviso); ?>
	<br />


</div>