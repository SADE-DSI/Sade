<?php
/* @var $this MaterialesController */
/* @var $data Materiales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('maCodigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->maCodigo), array('view', 'id'=>$data->maCodigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maNombre')); ?>:</b>
	<?php echo CHtml::encode($data->maNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maDescripcion')); ?>:</b>
	<?php echo CHtml::encode($data->maDescripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maEstado')); ?>:</b>
	<?php echo CHtml::encode($data->maEstado); ?>
	<br />


</div>