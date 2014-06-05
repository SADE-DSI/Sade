<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */

$this->breadcrumbs=array(
	'Sueldopersonals'=>array('index'),
	$model->peRut=>array('view','id'=>$model->peRut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sueldopersonal', 'url'=>array('index')),
	array('label'=>'Create Sueldopersonal', 'url'=>array('create')),
	array('label'=>'View Sueldopersonal', 'url'=>array('view', 'id'=>$model->peRut)),
	array('label'=>'Manage Sueldopersonal', 'url'=>array('admin')),
);
?>

<h1>Update Sueldopersonal <?php echo $model->peRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>