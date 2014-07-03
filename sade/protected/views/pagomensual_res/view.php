<?php
/* @var $this Pagomensual_resController */
/* @var $model Pagomensual_res */

$this->breadcrumbs=array(
	'Pago mensual'=>array('index'),
	$model->pmId,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Pago mensual #<?php echo $model->pmId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dlDireccion',
		'pmFechaPago',
		'pmMonto',
		'pmObs',
		'pmFechaRealPago',
		'pmId',
	),
)); ?>
