<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */
/* @var $modelCP Sueldopersonal */

$this->breadcrumbs=array(
	'Sueldo Personal'=>array('index'),
	$model->spCodigo,
);

$this->menu=array(
	array('label'=>'Listar Sueldo Personal', 'url'=>array('index')),
	array('label'=>'Crear Sueldo Personal', 'url'=>array('create')),
	array('label'=>'Actualizar Sueldo Personal', 'url'=>array('update', 'id'=>$model->spCodigo)),
	array('label'=>'Borrar Sueldo Personal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->spCodigo),'confirm'=>'¿Está seguro que quiere eliminar este sueldo?')),
	array('label'=>'Administrar Sueldo Personal', 'url'=>array('admin')),
);
?>

<h1>Ver Sueldo <?php echo $model->getNombre($model->cpCodigo).' '.$model->spFechaPago; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model, 
	'attributes'=>array(
		array('label'=>'Nombre Empleado',
			'type'=>'text',
			'value'=>$model->getNombre($model->cpCodigo)),
		'cpCodigo',
		'spFechaPago',
		array('label'=>'Sueldo Bruto',
			'type'=>'text',
			'value'=>$model->getDatosSueldo($model->cpCodigo, 'cpSueldoBruto')),
		'spHorasExtras',
		array('label'=>'Valor Hora Extra',
			'type'=>'text',
			'value'=>$model->getDatosSueldo($model->cpCodigo, 'cpValorHoraExtra')),
		array('label'=>'Descuento AFP',
			'type'=>'text',
			'value'=>$model->getDatosSueldo($model->cpCodigo, 'cpAFPMonto')),
		array('label'=>'Descuento Previsión',
			'type'=>'text',
			'value'=>$model->getDatosSueldo($model->cpCodigo, 'cpPrevisionMonto')),
		'spOtrosDescuentos',
		array('label'=>'Sueldo Líquido',
			'type'=>'text',
			'value'=>$model->getSueldoLiquido ($model->cpCodigo, $model->spCodigo)),
	),

)); ?>
