<?php
/* @var $this PagomensualController */
/* @var $model Pagomensual */

$this->breadcrumbs=array(
	'Pagomensuals'=>array('index'),
	$model->pmCodigo=>array('view','id'=>$model->pmCodigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pagomensual', 'url'=>array('index')),
	array('label'=>'Create Pagomensual', 'url'=>array('create')),
	array('label'=>'View Pagomensual', 'url'=>array('view', 'id'=>$model->pmCodigo)),
	array('label'=>'Manage Pagomensual', 'url'=>array('admin')),
);
?>

<h1>Update Pagomensual <?php echo $model->pmCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>