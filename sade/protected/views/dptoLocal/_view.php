<?php
/* @var $this DptolocalController */
/* @var $data Dptolocal */
?>

<div class="view">
<table class="tablaView">
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('dlDireccion')); ?>:</b></td><td><?php echo CHtml::link(CHtml::encode($data->dlDireccion), array('view', 'id'=>$data->dlDireccion)); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('dlMts2Construidos')); ?>:</b></td><td><?php echo CHtml::encode($data->dlMts2Construidos); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('dlValorArriendo')); ?>:</b></td><td><?php echo CHtml::encode($data->dlValorArriendo); ?>
	<br /></td></tr>
<tr><td><b><?php echo CHtml::encode($data->getAttributeLabel('dlActivo')); ?>:</b></td><td><?php echo CHtml::encode($data->dlActivo); ?>
	<br /></td></tr>
</table>
	
</div>