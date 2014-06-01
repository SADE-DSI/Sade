<?php
/* @var $this CompromisopagoController */
/* @var $model Compromisopago */

$this->breadcrumbs=array(
	'Compromisopagos'=>array('index'),
	$model->cpId,
);

$this->menu=array(
	array('label'=>'Listar compromisos de pago', 'url'=>array('index')),
	array('label'=>'Crear compromisos de pago', 'url'=>array('create')),
	array('label'=>'Actualizar compromisos de pago', 'url'=>array('update', 'id'=>$model->cpId)),
	array('label'=>'Eliminar compromisos de pago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cpId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar compromisos de pago', 'url'=>array('admin')),
);
?>

<h1>Compromiso de pago #<?php echo $model->cpId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cpId',
		'cpCodigo',
		'cpFechaVencimiento',
		'cpMonto',
		'cpDescripcion',
		'cpFechaIngreso',
		'cpObs',
		'cpNumeroBoleta',
		'cpFechaRealPago',
	),
)); ?>
