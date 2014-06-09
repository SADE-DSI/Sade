<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */

$this->breadcrumbs=array(
	'Sueldo Personal'=>array('index'),
	$model->peRut,
);

$this->menu=array(
	array('label'=>'Listar Sueldo Personal', 'url'=>array('index')),
	array('label'=>'Crear Sueldo Personal', 'url'=>array('create')),
	array('label'=>'Actualizar Sueldo Personal', 'url'=>array('update', 'id'=>$model->peRut)),
	array('label'=>'Borrar Sueldo Personal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->peRut),'confirm'=>'Está seguro que desea boorar este Sueldo?')),
	array('label'=>'Administrar Sueldo Personal', 'url'=>array('admin')),
);
?>

<h1>Ver Sueldo Personal <?php echo $model->peRut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'peRut',
		'spFechaPago',		
		'spOtrosDescuento',
		'spHorasExtra',
	),
)); ?>
