<?php
/* @var $this DptolocalController */
/* @var $data Dptolocal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dlDireccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dlDireccion), array('view', 'id'=>$data->dlDireccion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dlMts2Construidos')); ?>:</b>
	<?php echo CHtml::encode($data->dlMts2Construidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dlValorArriendo')); ?>:</b>
	<?php echo CHtml::encode($data->dlValorArriendo); ?>
	<br />


</div>