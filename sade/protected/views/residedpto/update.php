<?php
/* @var $this ResidedptoController */
/* @var $model Residedpto */

$this->breadcrumbs=array(
	'Residedptos'=>array('index'),
	$model->rdFechaInicio=>array('view','id'=>$model->rdFechaInicio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Residedpto', 'url'=>array('index')),
	array('label'=>'Create Residedpto', 'url'=>array('create')),
	array('label'=>'View Residedpto', 'url'=>array('view', 'id'=>$model->rdFechaInicio)),
	array('label'=>'Manage Residedpto', 'url'=>array('admin')),
);
?>

<h1>Update Residedpto <?php echo $model->rdFechaInicio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>