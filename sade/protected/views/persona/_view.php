<?php
/* @var $this PersonaController */
/* @var $data Persona */
?>

	<?php
	 $tipo=$data->peTipo;
			if ($tipo == 1 || $tipo == 2){}
				else if ($tipo == 3){
	 ?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->peRut), array('view', 'id'=>$data->peRut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NombresApellidos')); ?>:</b>
	<?php echo CHtml::encode($data->peNombresApellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->peEmail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->peTelefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->peDescripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peDireccion')); ?>:</b>
	<?php echo CHtml::encode($data->peDireccion); ?>
	<br />

</div>
	<?php
		}
	?>

