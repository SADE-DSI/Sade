<?php
/* @var $this ReservaespaciocomunController */
/* @var $model Reservaespaciocomun */

$this->breadcrumbs=array(
	'Reservaespaciocomuns'=>array('index'),
	$model->reFechaInicio,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->reFechaInicio)),
	array('label'=>'Eliminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->reFechaInicio),'confirm'=>'Estas seguro que quieres eliminar?')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>

<h1>Reservas #<?php echo $model->reFechaInicio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'reFechaInicio',
		'adRut',
		'ecCodigo',
		'reFechaFin',
	),
)); ?>
