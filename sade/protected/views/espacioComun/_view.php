<?php
/* @var $this EspaciocomunController */
/* @var $data Espaciocomun */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecCodigo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ecCodigo), array('view', 'id'=>$data->ecCodigo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecDescripcion')); ?>:</b>
	<?php echo CHtml::encode($data->ecDescripcion); ?>
	<br />


</div>