<?php
/* @var $this MaterialController */
/* @var $model Material */

$this->breadcrumbs=array(
	'Materials'=>array('index'),
	$model->maCodigo=>array('view','id'=>$model->maCodigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Material', 'url'=>array('index')),
	array('label'=>'Create Material', 'url'=>array('create')),
	array('label'=>'View Material', 'url'=>array('view', 'id'=>$model->maCodigo)),
	array('label'=>'Manage Material', 'url'=>array('admin')),
);
?>

<h1>Update Material <?php echo $model->maCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>