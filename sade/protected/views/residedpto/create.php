<?php
/* @var $this ResidedptoController */
/* @var $model Residedpto */

$this->breadcrumbs=array(
	'Residedptos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Residedpto', 'url'=>array('index')),
	array('label'=>'Manage Residedpto', 'url'=>array('admin')),
);
?>

<h1>Create Residedpto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>