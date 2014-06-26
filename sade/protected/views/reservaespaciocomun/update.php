<?php
/* @var $this ReservaespaciocomunController */
/* @var $model Reservaespaciocomun */

$this->breadcrumbs=array(
	'Reservaespaciocomuns'=>array('index'),
	$model->reId=>array('view','id'=>$model->reId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reservaespaciocomun', 'url'=>array('index')),
	array('label'=>'Create Reservaespaciocomun', 'url'=>array('create')),
	array('label'=>'View Reservaespaciocomun', 'url'=>array('view', 'id'=>$model->reId)),
	array('label'=>'Manage Reservaespaciocomun', 'url'=>array('admin')),
);
?>

<h1>Update Reservaespaciocomun <?php echo $model->reId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>