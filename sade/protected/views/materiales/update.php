<?php
/* @var $this MaterialesController */
/* @var $model Materiales */

$this->breadcrumbs=array(
	'Materiales'=>array('index'),
	$model->maCodigo=>array('view','id'=>$model->maCodigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Materiales', 'url'=>array('index')),
	array('label'=>'Create Materiales', 'url'=>array('create')),
	array('label'=>'View Materiales', 'url'=>array('view', 'id'=>$model->maCodigo)),
	array('label'=>'Manage Materiales', 'url'=>array('admin')),
);
?>

<h1>Update Materiales <?php echo $model->maCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>