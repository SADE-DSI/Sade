<?php
/* @var $this SueldopersonalController */
/* @var $model Sueldopersonal */

$this->breadcrumbs=array(
	'Sueldopersonals'=>array('index'),
	$model->spCodigo=>array('view','id'=>$model->spCodigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sueldopersonal', 'url'=>array('index')),
	array('label'=>'Create Sueldopersonal', 'url'=>array('create')),
	array('label'=>'View Sueldopersonal', 'url'=>array('view', 'id'=>$model->spCodigo)),
	array('label'=>'Manage Sueldopersonal', 'url'=>array('admin')),
);
?>

<h1>Update Sueldopersonal <?php echo $model->spCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>