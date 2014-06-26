<?php
/* @var $this CompromisopagoController */
/* @var $model Compromisopago */

$this->breadcrumbs=array(
	'Compromisopagos'=>array('index'),
	$model->cpId,
);

$this->menu=array(
	array('label'=>'List Compromisopago', 'url'=>array('index')),
	array('label'=>'Create Compromisopago', 'url'=>array('create')),
	array('label'=>'Update Compromisopago', 'url'=>array('update', 'id'=>$model->cpId)),
	array('label'=>'Delete Compromisopago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cpId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Compromisopago', 'url'=>array('admin')),
);
?>

<h1>View Compromisopago #<?php echo $model->cpId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cpId',
		'cpTipo',
		'cpFechaVencimiento',
		'cpMonto',
		'cpDescripcion',
		'cpFechaIngreso',
		'cpObs',
		'cpNumeroBoleta',
		'cpFechaRealPago',
	),
)); ?>
