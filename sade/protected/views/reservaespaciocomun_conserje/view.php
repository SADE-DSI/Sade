<?php
/* @var $this Reservaespaciocomun_conserjeController */
/* @var $model Reservaespaciocomun */

$this->breadcrumbs=array(
	'Reservaespaciocomuns'=>array('index'),
	$model->reFechaInicio,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
);
?>

<h1>View Reservaespaciocomun #<?php echo $model->reFechaInicio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'reFechaInicio',
		'adRut',
		'ecCodigo',
		'reFechaFin',
	),
)); ?>
