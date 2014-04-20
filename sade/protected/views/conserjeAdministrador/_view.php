<?php
/* @var $this ConserjeAdministradorController */
/* @var $data ConserjeAdministrador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('caRut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->caRut), array('view', 'id'=>$data->caRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caClave')); ?>:</b>
	<?php echo CHtml::encode($data->caClave); ?>
	<br />


</div>