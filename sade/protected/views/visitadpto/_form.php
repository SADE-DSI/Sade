<?php
/* @var $this VisitadptoController */
/* @var $model Visitadpto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitadpto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php #echo $form->errorSummary($model, $visita); ?>
	<?php 
		if (isset($_GET['dlDireccion2'])){
			$dlDireccion2 = $_GET['dlDireccion2'];	
			$fechaIngreso = $_GET['fechaIngreso'];
			$a = true;
		} 	
		else{
			$dlDireccion2 ='';
			$a = false;
		} 
	?>

	<table class="items">
	<tr>
		<td><?php echo $form->labelEx($model,'dlDireccion'); ?></td>
		<td><?php 
			if (!$a)echo $form->dropDownList($model, 'dlDireccion', $model->getDirecciones()); 
			else echo $form->textField($model,'dlDireccion', array('readonly'=>true, 'size'=>20,'maxlength'=>20, 'value'=>$dlDireccion2));
			?></td>
		<td><?php echo $form->error($model,'dlDireccion'); ?></td>
	</tr>

	<tr>
		<td><?php if ($a) echo $form->labelEx($model,'vdFechaIngreso');?></td>
		<td><?php if ($a) echo $form->textField($model,'vdFechaIngreso',
											array('readonly'=>true, 'size'=>20,'maxlength'=>20, 'value'=>$fechaIngreso)); ?></td>
		<td><?php if ($a) echo $form->error($model,'vdFechaIngreso'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'viRut'); ?></td>
		<td><?php echo $form->textField($model,'viRut',array('size'=>60,'maxlength'=>13, 'placeholder'=>'Ingrese Rut (11.111.111-1)')); ?></td>
		<td><?php echo $form->error($model,'viRut'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($visita,'viNombresApellidos'); ?></td>
		<td><?php echo $form->textField($visita,'viNombresApellidos',array('size'=>60,'maxlength'=>40, 'placeholder'=>'Ingrese Nombres y Apellidos')); ?></td>
		<td><?php echo $form->error($visita,'viNombresApellidos'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($visita,'viObs'); ?></td>
		<td><?php echo $form->textField($visita,'viObs',array('size'=>60,'maxlength'=>255, 'placeholder'=>'Observaciones')); ?></td>
		<td><?php echo $form->error($visita,'viObs'); ?></td>
	</tr>

	</table>


	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->