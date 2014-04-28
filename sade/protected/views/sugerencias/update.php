<?php
/* @var $this SugerenciasController */
/* @var $model Sugerencias */

$this->breadcrumbs=array(
	'Sugerenciases'=>array('index'),
	$model->sgId=>array('view','id'=>$model->sgId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sugerencias', 'url'=>array('index')),
	array('label'=>'Create Sugerencias', 'url'=>array('create')),
	array('label'=>'View Sugerencias', 'url'=>array('view', 'id'=>$model->sgId)),
	array('label'=>'Manage Sugerencias', 'url'=>array('admin')),
);
?>

<h1>Update Sugerencias <?php echo $model->sgId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>