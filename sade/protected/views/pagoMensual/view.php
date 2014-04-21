<?php
/* @var $this PagoMensualController */
/* @var $model PagoMensual */

$this->breadcrumbs=array(
	'Pago Mensuals'=>array('index'),
	$model->pmCodigo,
);

$this->menu=array(
	array('label'=>'List PagoMensual', 'url'=>array('index')),
	array('label'=>'Create PagoMensual', 'url'=>array('create')),
	array('label'=>'Update PagoMensual', 'url'=>array('update', 'id'=>$model->pmCodigo)),
	array('label'=>'Delete PagoMensual', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pmCodigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PagoMensual', 'url'=>array('admin')),
);
?>

<h1>View PagoMensual #<?php echo $model->pmCodigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pmCodigo',
		'dlDireccion',
		'pmFechaPago',
		'pmMonto',
		'pmObs',
		'pmFechaRealPago',
	),
)); ?>
