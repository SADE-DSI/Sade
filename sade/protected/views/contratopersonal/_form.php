<?php
/* @var $this ContratopersonalController */
/* @var $model Contratopersonal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contratopersonal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos Con <span class="required">*</span> son obligatorios.</p>

	<?php # echo $form->errorSummary($model); ?>

	<table class="items">
	<tr>
		<td><?php echo $form->labelEx($model,'peRut'); ?></td>
		<td><?php echo $form->dropDownList($model, 'peRut', $model->getNombresEmpleados()); ?></td>
		<td><?php echo $form->error($model,'peRut'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'cpAFPNombre'); ?></td>
		<td><?php echo $form->textField($model,'cpAFPNombre',array('size'=>30,'maxlength'=>20, 'placeholder'=>'Nombre AFP')); ?></td>
		<td><?php echo $form->error($model,'cpAFPNombre'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'cpAFPMonto'); ?></td>
		<td><?php echo $form->textField($model,'cpAFPMonto', array('size'=>30, 'placeholder'=>'Cantidad en pesos chilenos')); ?></td>	
		<td><?php echo $form->error($model,'cpAFPMonto'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'cpPrevisionNombre'); ?></td>
		<td><?php echo $form->textField($model,'cpPrevisionNombre',array('size'=>30,'maxlength'=>20, 'placeholder'=>'Nombre Isapre')); ?></td>
		<td><?php echo $form->error($model,'cpPrevisionNombre'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'cpPrevisionMonto'); ?></td>
		<td><?php echo $form->textField($model,'cpPrevisionMonto', array('size'=>30, 'placeholder'=>'Cantidad en pesos chilenos')); ?></td>
		<td><?php echo $form->error($model,'cpPrevisionMonto'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'cpSueldoBruto'); ?></td>
		<td><?php echo $form->textField($model,'cpSueldoBruto', array('size'=>30, 'placeholder'=>'Cantidad en pesos chilenos')); ?></td>
		<td><?php echo $form->error($model,'cpSueldoBruto'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'cpValorHoraExtra'); ?></td>
		<td><?php echo $form->textField($model,'cpValorHoraExtra', array('size'=>30, 'placeholder'=>'Cantidad en pesos chilenos')); ?></td>
		<td><?php echo $form->error($model,'cpValorHoraExtra'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'cpFechaInicio'); ?></td>
		<td><?php $this->widget("zii.widgets.jui.CJuiDatePicker", array(
							'attribute'=>'cpFechaInicio', 
							'model'=>$model,
							'language'=>'es',
							'options'=>array(
								'dateFormat'=>'yy-mm-dd'
							),

						)); ?></td>
		<td><?php echo $form->error($model,'cpFechaInicio'); ?></td>
	</tr>
	
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
 
