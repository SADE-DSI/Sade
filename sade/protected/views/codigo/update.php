<?php
/* @var $this CodigoController */
/* @var $model Codigo */

$this->breadcrumbs=array(
	'Codigos'=>array('index'),
	$model->coCodigo=>array('view','id'=>$model->coCodigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Codigo', 'url'=>array('index')),
	array('label'=>'Create Codigo', 'url'=>array('create')),
	array('label'=>'View Codigo', 'url'=>array('view', 'id'=>$model->coCodigo)),
	array('label'=>'Manage Codigo', 'url'=>array('admin')),
);
?>

<h1>Update Codigo <?php echo $model->coCodigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>