<?php
/* @var $this CompromisopagoController */
/* @var $model Compromisopago */

$this->breadcrumbs=array(
	'Compromisopagos'=>array('index'),
	$model->cpId,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->cpId)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cpId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
	 array('label'=>'Crear PDF', 'url'=>array('pdf','id'=>$model->cpId)),

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
