<?php
/* @var $this DptolocalController */
/* @var $model Dptolocal */

$this->breadcrumbs=array(
	'Dpto/local'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Dpto/local', 'url'=>array('index')),
	array('label'=>'Administrar Dpto/local', 'url'=>array('admin')),
);
?>

<h1>Crear Dpto/local</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>