<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */

$this->breadcrumbs=array(
	'Sueldo Personal'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Sueldo Personal', 'url'=>array('index')),
	array('label'=>'Administrar Sueldo Personal', 'url'=>array('admin')),
);
?>

<h1>Ingresar Sueldo Personal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>