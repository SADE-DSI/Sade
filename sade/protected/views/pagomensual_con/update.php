<?php
/* @var $this Pagomensual_conController */
/* @var $model Pagomensual */

$this->breadcrumbs=array(
	'Pagomensuals'=>array('index'),
	$model->pmId=>array('view','id'=>$model->pmId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pagomensual', 'url'=>array('index')),
	array('label'=>'View Pagomensual', 'url'=>array('view', 'id'=>$model->pmId)),
	array('label'=>'Manage Pagomensual', 'url'=>array('admin')),
);
?>

<h1>Update Pagomensual <?php echo $model->pmId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>