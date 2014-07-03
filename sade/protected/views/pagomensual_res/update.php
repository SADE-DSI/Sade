<?php
/* @var $this Pagomensual_resController */
/* @var $model Pagomensual_res */

$this->breadcrumbs=array(
	'Pagomensual Res'=>array('index'),
	$model->pmId=>array('view','id'=>$model->pmId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pagomensual_res', 'url'=>array('index')),
	array('label'=>'Create Pagomensual_res', 'url'=>array('create')),
	array('label'=>'View Pagomensual_res', 'url'=>array('view', 'id'=>$model->pmId)),
	array('label'=>'Manage Pagomensual_res', 'url'=>array('admin')),
);
?>

<h1>Update Pagomensual_res <?php echo $model->pmId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>