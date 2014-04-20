<?php
/* @var $this DptoLocalController */
/* @var $model DptoLocal */

$this->breadcrumbs=array(
	'Dpto Locals'=>array('index'),
	$model->dlDireccion=>array('view','id'=>$model->dlDireccion),
	'Update',
);

$this->menu=array(
	array('label'=>'List DptoLocal', 'url'=>array('index')),
	array('label'=>'Create DptoLocal', 'url'=>array('create')),
	array('label'=>'View DptoLocal', 'url'=>array('view', 'id'=>$model->dlDireccion)),
	array('label'=>'Manage DptoLocal', 'url'=>array('admin')),
);
?>

<h1>Update DptoLocal <?php echo $model->dlDireccion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>