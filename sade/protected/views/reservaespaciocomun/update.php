<?php
/* @var $this ReservaespaciocomunController */
/* @var $model Reservaespaciocomun */

$this->breadcrumbs=array(
	'Reservaespaciocomuns'=>array('index'),
	$model->reFechaInicio=>array('view','id'=>$model->reFechaInicio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reservaespaciocomun', 'url'=>array('index')),
	array('label'=>'Create Reservaespaciocomun', 'url'=>array('create')),
	array('label'=>'View Reservaespaciocomun', 'url'=>array('view', 'id'=>$model->reFechaInicio)),
	array('label'=>'Manage Reservaespaciocomun', 'url'=>array('admin')),
);
?>

<h1>Update Reservaespaciocomun <?php echo $model->reFechaInicio; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>