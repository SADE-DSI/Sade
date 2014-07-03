<?php
/* @var $this Pagomensual_conController */
/* @var $model Pagomensual */

$this->breadcrumbs=array(
	'Pagomensuals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pagomensual', 'url'=>array('index')),
	array('label'=>'Manage Pagomensual', 'url'=>array('admin')),
);
?>

<h1>Create Pagomensual</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>