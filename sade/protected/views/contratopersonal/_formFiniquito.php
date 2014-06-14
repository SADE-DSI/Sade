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

	<p class="note">Debe Completar el campo Fecha Fin</p>

	<?php # echo $form->errorSummary($model); ?>

	<table class="items">
		<tr>
			<td><?php $form->dropDownList($model, 'peRut', $model->getNombresEmpleados()); ?></td>
			<td><?php $form->textField($model,'cpAFPNombre',array('size'=>30,'maxlength'=>20)); ?></td>
			<td><?php $form->textField($model,'cpAFPMonto', array('size'=>30)); ?></td>	
			<td><?php $form->textField($model,'cpPrevisionNombre',array('size'=>30,'maxlength'=>20)); ?></td>
			<td><?php $form->textField($model,'cpPrevisionMonto', array('size'=>30)); ?></td>
			<td><?php $form->textField($model,'cpSueldoBruto', array('size'=>30)); ?></td>
			<td><?php $form->textField($model,'cpValorHoraExtra', array('size'=>30)); ?></td>
			<td><?php $form->textField($model,'cpFechaFin') ?></td>

			<td><?php echo $form->labelEx($model,'cpFechaFin'); ?></td>
			<td><?php $this->widget("zii.widgets.jui.CJuiDatePicker", array(
								'attribute'=>'cpFechaFin', 
								'model'=>$model,
								'language'=>'es',
								'options'=>array(
									'dateFormat'=>'yy-mm-dd'
								)
							)); ?></td>
			<td><?php echo $form->error($model,'cpFechaFin'); ?></td>
		</tr>
	
	</table>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class' => 'guardar')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
 
