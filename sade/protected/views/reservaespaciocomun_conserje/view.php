<?php
/* @var $this Reservaespaciocomun_conserjeController */
/* @var $model Reservaespaciocomun */

$this->breadcrumbs=array(
	'Reserva espacio común'=>array('index'),
	$model->reFechaInicio,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
);
?>

<h1>Ver Reserva espacio común #<?php echo $model->reFechaInicio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'reFechaInicio',
		'adRut',
		'ecCodigo',
		'reFechaFin',
	),
)); ?>
