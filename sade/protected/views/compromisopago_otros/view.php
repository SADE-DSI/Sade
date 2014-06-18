<?php
/* @var $this CompromisopagoController */
/* @var $model Compromisopago */

$this->breadcrumbs=array(
	'Gastos comunes'=>array('index'),
	$model->cpId,
);
?>

<h1>Gasto común #<?php echo $model->cpId; ?></h1>

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
