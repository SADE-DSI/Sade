<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerenciases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sugerencias', 'url'=>array('index')),
	array('label'=>'Manage Sugerencias', 'url'=>array('admin')),
);
?>

<h1>Create Sugerencias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>