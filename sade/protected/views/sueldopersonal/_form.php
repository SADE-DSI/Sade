<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sueldopersonal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos Con <span class="required">*</span> son obligatorios.</p>

	<?php #echo $form->errorSummary($model); ?>
	<?php 
		if (isset($_GET['cpCodigo'])) $codigoCP = $_GET['cpCodigo'];		
		else $codigoCP ='';
	?>

	<table class="items">
	<tr>
		<td><?php echo $form->labelEx($model,'cpCodigo'); ?></td>
		<td><?php echo $form->dropDownList($model, 'cpCodigo', $model->getContratos()); ?></td>
		<td><?php #echo $form->textField($model,'cpCodigo', array('size'=>20,'maxlength'=>20, 'value'=>$codigoCP)); ?></td>
		<td><?php echo $form->error($model,'cpCodigo'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'spFechaPago'); ?></td>
		<td><?php $this->widget("zii.widgets.jui.CJuiDatePicker", array(
							'attribute'=>'spFechaPago', 
							'model'=>$model,
							'language'=>'es',
							'options'=>array(
								'dateFormat'=>'yy-mm-dd'
							)
						)); ?></td>
		<td><?php echo $form->error($model,'spFechaPago'); ?></td>
	</tr>
	<tr>
		<td><?php echo $form->labelEx($model,'spOtrosDescuentos'); ?></td>
		<td><?php echo $form->textField($model,'spOtrosDescuentos', array('size'=>40,'maxlength'=>20, 'placeholder'=>'Cantidad en pesos chilenos')); ?></td>
		<td><?php echo $form->error($model,'spOtrosDescuentos'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'spHorasExtras'); ?></td>
		<td><?php echo $form->textField($model,'spHorasExtras', array('size'=>40,'maxlength'=>20, 'placeholder'=>'Ingrese cantidad de horas extras en horas.')); ?></td>
		<td><?php echo $form->error($model,'spHorasExtras'); ?></td>
	</tr>
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->