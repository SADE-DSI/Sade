<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerencias'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Sugerencias', 'url'=>array('index')),
	array('label'=>'Administrar Sugerencias', 'url'=>array('admin')),
);
?>

<h1>Crear Sugerencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>