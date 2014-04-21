<?php
/* @var $this ArrendatarioDuenoController  */
/* @var $data ArrendatarioDueno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('adRut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->adRut), array('view', 'id'=>$data->adRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adClave')); ?>:</b>
	<?php echo CHtml::encode($data->adClave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adEstado')); ?>:</b>
	<?php echo CHtml::encode($data->adEstado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adFechaLiberacion')); ?>:</b>
	<?php echo CHtml::encode($data->adFechaLiberacion); ?>
	<br />


</div>