<?php
/* @var $this PagomensualController */
/* @var $model Pagomensual */

$this->breadcrumbs=array(
	'Pagomensuals'=>array('index'),
	$model->pmCodigo,
);

$this->menu=array(
	array('label'=>'Listar pagos mensuales', 'url'=>array('index')),
	array('label'=>'Crear pago mensual', 'url'=>array('create')),
	array('label'=>'Actualizar Pago mensual', 'url'=>array('update', 'id'=>$model->pmCodigo)),
	array('label'=>'Eliminar pago mensual', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pmCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar pago mensual', 'url'=>array('admin')),
);
?>

<h1>Pago mensual #<?php echo $model->pmCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pmCodigo',
		'dlDireccion',
		'pmFechaPago',
		'pmMonto',
		'pmObs',
		'pmFechaRealPago',
		'pmId',
	),
)); ?>
