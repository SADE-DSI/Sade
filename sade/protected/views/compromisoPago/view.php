<?php
/* @var $this CompromisoPagoController */
/* @var $model CompromisoPago */

$this->breadcrumbs=array(
	'Compromiso Pagos'=>array('index'),
	$model->cpId,
);

$this->menu=array(
	array('label'=>'List CompromisoPago', 'url'=>array('index')),
	array('label'=>'Create CompromisoPago', 'url'=>array('create')),
	array('label'=>'Update CompromisoPago', 'url'=>array('update', 'id'=>$model->cpId)),
	array('label'=>'Delete CompromisoPago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cpId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompromisoPago', 'url'=>array('admin')),
);
?>

<h1>View CompromisoPago #<?php echo $model->cpId; ?></h1>

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
		'gpNumeroBoleta',
		'gpFechaRealPago',
	),
)); ?>
