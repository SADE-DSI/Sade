<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */

$this->breadcrumbs=array(
	'Sueldo Personal'=>array('index'),
	$model->peRut=>array('view','id'=>$model->peRut),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Sueldo Personal', 'url'=>array('index')),
	array('label'=>'Crear Sueldo Personal', 'url'=>array('create')),
	array('label'=>'Ver Sueldo Personal', 'url'=>array('view', 'id'=>$model->peRut)),
	array('label'=>'Administrar Sueldo Personal', 'url'=>array('admin')),
);
?>

<h1>Actualizar Sueldo Personal <?php echo $model->peRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>