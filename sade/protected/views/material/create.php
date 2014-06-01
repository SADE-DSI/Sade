<?php
/* @var $this MaterialController */
/* @var $model Material */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Material', 'url'=>array('index')),
	array('label'=>'Administrar Material', 'url'=>array('admin')),
);
?>

<h1>Crear Material</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>