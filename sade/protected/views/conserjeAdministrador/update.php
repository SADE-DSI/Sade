<?php
/* @var $this ConserjeadministradorController */
/* @var $model Conserjeadministrador */

$this->breadcrumbs=array(
	'Conserjeadministradors'=>array('index'),
	$model->caRut=>array('view','id'=>$model->caRut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Conserjeadministrador', 'url'=>array('index')),
	array('label'=>'Create Conserjeadministrador', 'url'=>array('create')),
	array('label'=>'View Conserjeadministrador', 'url'=>array('view', 'id'=>$model->caRut)),
	array('label'=>'Manage Conserjeadministrador', 'url'=>array('admin')),
);
?>

<h1>Update Conserjeadministrador <?php echo $model->caRut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,'persona'=>$persona)); ?>